<?php


namespace App\MyApi\v1\Handlers;

use Nette;
use Nette\Application\Responses\FileResponse;
use Nette\Utils\Image;
use Tomaj\NetteApi\Handlers\BaseHandler;
use Tomaj\NetteApi\Response\JsonApiResponse;
use Tomaj\NetteApi\Response\ResponseInterface;
use Nette\Application\Attributes\Requires;

class ImgHandler 
{
    // private $userRepository;

    // public function __construct(UsersRepository $userRepository)
    // {
    //     parent::__construct();
    //     $this->userRepository = $userRepository;
    // }

    #[Requires(methods:'POST')]
    public function handlePng(): ResponseInterface
    {   
        $file = $this->getHttpRequest()->getFile('image');
        return new JsonApiResponse(200, ['status' => 'ok', 'file' => $file]);
    }
}