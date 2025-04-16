<?php

declare(strict_types=1);

namespace App\Presentation\Tomaj;

use Nette;

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