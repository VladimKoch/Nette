<?php

declare(strict_types=1);

namespace App\Presentation\Tomaj;

use Nette;

use Nette\ComponentModel\IComponent;
use Tomaj\NetteApi\Handlers\BaseHandler;
use Tomaj\NetteApi\Response\JsonApiResponse;
use Tomaj\NetteApi\Response\ResponseInterface;
use Nette\Application\Attributes\Requires;
use Nette\Application\UI\Form;
use Nette\Http\FileUpload;
use Nette\Application\Responses\FileResponse;
use Nette\Application\BadRequestException;
use Nette\Utils\Image;

final class TomajPresenter extends Nette\Application\UI\Presenter
{   

    

    public function __construct(private \App\MyApi\v1\Handlers\UsersListingHandler $listingHandler,
                                private \App\MyApi\v1\Forms\ImgForm $imgForm)
    {                           
       
    }

    public function renderDefault(){
      
        $this->template->response = $this->listingHandler->handle([]);
    }
    
    
}