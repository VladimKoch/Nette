<?php

declare(strict_types=1);



namespace App\Presentation\Api;
use Nette;
use Nette\Application\Responses\JsonResponse;
use Nette\Application\BadRequestException;


final class ApiPresenter extends Nette\Application\UI\Presenter
{   

    public function __construct(private \App\Model\PostManager $postmanager)
    {
        

    }

    public function actionDefault()
    {  
        
        $datas = $this->postmanager->getPosts();

        $result = [];
        foreach ($datas as $data) {
            $result[] = $data->toArray(); // Předpokládáme, že máme metodu toArray
        }

        // $this->sendResponse(new JsonResponse(['id'=>$data->id,'title'=>$data->title]));
        // $this->sendResponse(new JsonResponse($result));
        $this->template->datas = $result;
        
    }

    public function renderShow($id)
    {
        $datas = $this->postmanager->getPosts();

       
        $result=[];
        foreach ($datas as $index=> $data) {
            $result[$index] = $data->toArray(); // Předpokládáme, že máme metodu toArray
        }

        if(isset($result[$id]))
        {
            $this->sendResponse(new JsonResponse($result[$id]));
        }else
        {
            throw new BadRequestException('item not found');
        }

        
    }

}