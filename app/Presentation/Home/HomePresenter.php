<?php

declare(strict_types=1);

namespace App\Presentation\Home;

use Nette;
// use App\Model\ArticleManager;

final class HomePresenter extends Nette\Application\UI\Presenter
{   

    

    public function __construct(private \App\Model\ArticleManager $article,
                                private \Nette\Http\Request $request)
    {
       
    }

    public function renderDefault($page = 1)
    {

        
            // Získání aktuálně přihlášeného uživatele
            $user = $this->getUser();

            // echo '<pre>';
            // print_r($user->getIdentity());
            // echo '</pre>';
            // die;
            
            // Zkontrolujte, zda je uživatel přihlášen
            if ($user->isLoggedIn()) {
                $this->template->username = $user->getIdentity()->username; // nebo jiný atribut s uživatelským jménem
            } else {
                $this->template->username = null; // Není přihlášen
            }
        
        $posts = $this->article->findArticle();
        
        $lastPage = 0;

        $this->template->posts = $posts->page($page, 4, $lastPage);

        $this->template->page = $page;
        $this->template->lastPage = $lastPage;
        $this->template->time = date('H:i:s');
    }

    public function handleClick(): void
    {   
        
        
        if($this->isAjax()){
            
            bdump($this->isAjax());
            $time = 'ogon';
            $this->template->time = $time;
            $this->redrawControl('mySnippet');
            // $flashMessage = 'je to ajax';
            
            
            // $this->sendJson(['ok' => true, 'message' => $flashMessage]);
  
        }else{
            $this->flashMessage('Neni AJax');
            $this->redirect('this');
        }

    }

    
}
