<?php

declare(strict_types=1);

namespace App\Presentation\Img;

use Nette;
use Nette\Http\FileUpload;
use Nette\Utils\Image;



final class ImgPresenter extends Nette\Application\UI\Presenter
{

    private string $uploadDir = 'C:/xampp/htdocs/web/www/uploads';
    private string $uploadDirImg = 'C:/xampp/htdocs/web/www/uploads/img';
  

    public function __construct(private \Nette\Database\Explorer $database,
                                private \App\Model\ImageUploadFormFactory $imageForm)
    {
        
    }


    // public function renderDefault()
    // {
    //   $this->template->posts = $this->database->table('posts');  
    // //   $this->template->form = $this->imageForm->create(function (FileUpload $file));
    // }

    public function createComponentImageUploadForm()
    {   
        
        return $this->imageForm->create(function (FileUpload $file) {
            if ($file->isOk()) {

                $fileName = uniqid() . '.' . $file->getSuggestedExtension();
                $file->move("$this->uploadDir/$fileName");
              
                $pathFile = "$this->uploadDir/$fileName";
                
                if (!file_exists($pathFile)) {
                    
                    throw new \Exception("Soubor $fileName neexistuje.");
                }
       

                if ($file->getContentType() === 'image/jpeg') {
                    $image = Image::fromFile($pathFile);
                    $convertedPath = $this->uploadDir . '/' . pathinfo($fileName, PATHINFO_FILENAME) . '.png';
                    $image->save($convertedPath, 90, Image::PNG);

                    unlink($pathFile); // Smazání původního souboru
                    $this->flashMessage("Obrázek byl nahrán a převeden na PNG jako $convertedPath.", 'success');
                    $this->redirect('this');
                } else {
                    $this->flashMessage("Obrázek byl nahrán bez změny formátu.", 'success');
                }

            } 
        });
    }

    public function renderDefault(): void
    {   
        $this->template->uploads = array_diff(scandir($this->uploadDir), ['.', '..']);
        
    }
}
