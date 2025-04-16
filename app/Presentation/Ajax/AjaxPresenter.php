<?php

declare(strict_types=1);

namespace App\Presentation\Ajax;

use Nette;
use Nette\Http\Request;
use Nette\Http\UrlScript;
use Nette\Http\FileUpload;
use Nette\Utils\Image;

use Nette\Application\Responses\JsonResponse;
// use Nette\Application\Responses\Response;
// use Tomaj\Tomaj\Ajax;



final class AjaxPresenter extends Nette\Application\UI\Presenter
{   

    

    public function __construct(private \Nette\Http\Response $response,
                                private \App\Model\ImageUploadFormFactory $imageForm,
                                
                                )
    {
       
    }

    public function createComponentImageUploadForm()
    {
        return $this->imageForm->create(function(FileUpload $file){
            if($file->hasFile() && $file->isOk())
            {   

                
                print_r($file);
                $img = $file->getUntrustedName();
                $img = $this->request->getRemoteAddress();
                print_r($img);
                echo 'soubor byl nahraný a je ok';
                die;
            }
        });
        
    }

    


   
 
    
}
