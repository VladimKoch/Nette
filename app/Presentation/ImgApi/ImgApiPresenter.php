<?php

declare(strict_types=1);

namespace App\Presentation\ImgApi;

use Nette;
use Nette\ComponentModel\IComponent;
use Nette\Application\UI\Form;
use Nette\Application\Responses\FileResponse;
use Nette\Application\BadRequestException;
use Nette\Utils\Image;

final class ImgApiPresenter extends Nette\Application\UI\Presenter
{   



    
    private string $uploadDir = 'C:/xampp/htdocs/web/www/uploads/png';
    private string $uploadDirImg = 'C:/xampp/htdocs/web/www/uploads/img';

    public function __construct(
        private \App\MyApi\v1\Forms\ImgForm $imgForm)
        {                           
       
    }
    
    public function renderDefault(): void
    {   
        $this->template->uploads = array_diff(scandir($this->uploadDir), ['.', '..']);
        $this->template->uploadsImgs = array_diff(scandir($this->uploadDirImg), ['.', '..']);
    }

    protected function createComponentImageUploadForm(): ?IComponent
    {   
     

        $form = new Form;

        $form->addUpload('image', 'Nahrajte obrázek:')
            ->setRequired('Prosím, nahrajte obrázek.')
            ->addRule(Form::Image, 'Soubor musí být obrázek.');

        $form->addSubmit('submitBtn', 'Ulož jako JPG')
        ->onClick[] = [$this, 'submitButtonPressed'];

        $form->addSubmit('convertBtn', 'Převeď a stáhni jako PNG')
        ->onClick[] = [$this, 'convertButtonPressed'];

        $form->addSubmit('savePngBtn', 'Převeď a ulož jako PNG')
        ->onClick[] = [$this, 'savePngButtonPressed'];

        return $form;
    }

    public function submitButtonPressed(Nette\Forms\Controls\Button $button, $data)
    {
             /**
            * Uložení do složky www/uploads/img
            */

                    // Uložení obrázku
                    $image = $data->image;
             
                    //Kontrola jestli Obrázek je správně nahrán a přesunutí do složky
                    if ($image->isOk()) {
                        $image->move(__DIR__ . '/../../../www/uploads/img/' . $image->getName());
                        
                        $this->flashMessage('Obrázek byl úspěšně nahrán.','success');
                    } else {
                        $this->flashMessage('Nastala chyba při nahrávání obrázku.', 'error');
                    }
    }

    public function convertButtonPressed(Nette\Forms\Controls\Button $button, $data)
    {
        /**
        * Stažní ve formátu PNG
        */

        // Načtení JPEG/JPG obrázku
            $fileImg = $data->image;

             $image = Image::fromFile($fileImg->getTemporaryFile());

        // Ověření, že je soubor nahrán a má správný typ
            if (!$fileImg || $fileImg->isOK() && $fileImg->getContentType() !== 'image/jpeg'&& $fileImg->getContentType() !== 'image/jpg') 
            {
                throw new BadRequestException('Invalid image file');
            }

        // Uložení obrázku ve formátu PNG do dočasného souboru
            $tmpFile = tempnam(sys_get_temp_dir(), 'image_') . '.png';

            $image->save($tmpFile, 100); // 100 je kvalita PNG

        // Získání původního názvu obrázku
            $basename = pathinfo($fileImg->getUntrustedName(), PATHINFO_FILENAME);

        // Vracení PNG obrázku jako odpověď
            $this->sendResponse(new FileResponse($tmpFile, $basename .'.png','image/png'));
    }

    public function savePngButtonPressed(Nette\Forms\Controls\Button $button, $data)
    {
        /**
        * Uložení do složky www/uploads/png
        */
                    
                    $fileImg = $data->image;

                    if (!$fileImg || $fileImg->isOK() && $fileImg->getContentType() !== 'image/jpeg'&& $fileImg->getContentType() !== 'image/jpg') {
                        throw new BadRequestException('Invalid image file');
                           }

                    // Získání původního názvu obrázku
                    $basename = pathinfo($fileImg->getUntrustedName(), PATHINFO_FILENAME);

                    $fileName = $basename . '.' . $fileImg->getSuggestedExtension();
                    // Přesunutí obrázku
                    $fileImg->move("$this->uploadDir/$fileName");
                    

                    $pathFile = "$this->uploadDir/$fileName";

                    // Kontrola zda-li obrázek existuje
                    if (!file_exists($pathFile)) {
                    
                        throw new \Exception("Soubor $fileName neexistuje.");
                    }

                    // Jestli je obrázek správný typ
                    if ($fileImg->getContentType() === 'image/jpeg') {
                        $image = Image::fromFile($pathFile);
                        $convertedPath = $this->uploadDir . '/' . pathinfo($fileName, PATHINFO_FILENAME) . '.png';

                        //Uložení jako PNG
                        $image->save($convertedPath, 100, Image::PNG);
                        
    
                        unlink($pathFile); // Smazání původního souboru
                        $this->flashMessage("Obrázek byl nahrán a převeden na PNG jako $convertedPath.", 'success');
                        $this->redirect('this');
                    } else {
                        $this->flashMessage("Obrázek byl nahrán bez změny formátu.", 'success');
                    }
                
    }
}