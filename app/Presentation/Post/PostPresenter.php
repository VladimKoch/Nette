<?php

declare(strict_types=1);

namespace App\Presentation\Post;

use Nette;
use Nette\Application\UI\Form;


final class PostPresenter extends Nette\Application\UI\Presenter
{
    public function __construct(private \App\Model\ArticleManager $article,
                                private \Nette\Database\Explorer $database)
    {
        
    }

    public function renderDefault(int $id)
    {
        // $post = $this->article->findArticle()->get($id);
        $post = $this->database->table('posts')->get($id);
        
        if(!$post)
        {
            $this->error('Stránka nebyla nalezena');
        }

        $this->template->post = $post;
        $this->template->comments = $post->related('comments');
    
    }

    public function createComponentCommentForm()
    {   

        $form = new Form;
        $form->addText('name','Jméno:')->setRequired('Vyplňte prosím jméno');
        $form->addEmail('email','Email:')->setRequired('Vyplňte prosím email');

        $form->addTextArea('content', 'Komentář:')->setRequired('Vyplňte prosím textové pole');
        $form->addSubmit('send', 'Publikovat komentář');

        $form->onSuccess[] = [$this, 'commentFormSucceeded'];

        return $form;

        
    }

    public function  commentFormSucceeded(\stdClass $values)
    {
         $postId = $this->getParameter('id');
 
         $this->database->table('comments')->insert([
             'post_id' => $postId,
             'name' => $values->name,
             'email' => $values->email,
             'content' => $values->content]);
             
             $this->flashMessage('Děkuji za komentář', 'success');
             $this->redirect('this');
 
    }

    public function createComponentPostForm()
    {

        $form = new Form;
        $form->addText('title','Topic:')->setRequired();
        $form->addTextArea('content', 'Obsah:')->setRequired();
        $form->addSubmit('send', 'Publikovat Topic');

        $form->onSuccess[] = [$this, 'postFormSucceeded'];

        return $form;

    }

    public function postFormSucceeded(\stdclass $values)
    {   



        $postId = $this->getParameter('postId');


        if (!$this->getUser()->isLoggedIn())
         {$this->error('Pro vytvoření, nebo editování příspěvku se musíte přihlásit.');}
         
        if ($postId) 
        {$post = $this->database->table('posts')->get($postId);
            $post-> $post->update([
                'title'=>$values->title,
                'content'=>$values->content,
                'created_at' => new \DateTime
            ]);}
          else {
            $post = $this->database->table('posts')->insert([
                'title'=>$values->title,
                'content'=>$values->content,
                'created_at' => new \DateTime
            ]);}$this->flashMessage('Příspěvek byl úspěšně publikován.','success');
            $this->redirect('default', $post->id);



        $this->database->table('posts')->insert([
            'title'=>$values->title,
            'content'=>$values->content,
            'created_at' => new \DateTime
        ]);

            $this->flashMessage('Topic byl vložen', 'success');
            $this->redirect('Home:default');
    }



    public function renderEdit(int $id): void
    {
        // $post = $this->article->findArticle()->get($id);

        $post = $this->database->table('posts')->get($id);
        

        if(!$post)
        {
            $this->error('Stránka nebyla nalezena');
        }

        $this['postForm']->setDefaults($post->toArray());

        $this->template->post = $post;
        $this->template->comments = $post->related('comments');
    


        



    }

    // public function createComponentEditForm()
    // {
        
    //     // $post = $this->getParameter($id);

    //     $form = new Form;
    //     $form->addText('title','Topic:')->setRequired();
    //     $form->addTextArea('content', 'Obsah:')->setRequired();
    //     $form->addSubmit('send', 'Publikovat Topic');

    //     $form->onSuccess[] = [$this, 'editeFormSucceeded'];

    //     return $form;

    // }

    // public function editFormSucceeded(\stdclass $values)
    // {   
    //     $id = $this->getParameter('id');

    //     print_r($values);
    //     die;

    //     if ($id) 
        
    //     {$post = $this->database->table('posts')->get($id);
            
    //             // $post->update($values);}

        // $post->update([
        //     'title'=>$values->title,
        //     'content'=>$values->content,
        //     'created_at' => new \DateTime
        // ]);

    //         $this->flashMessage('Topic byl upraven', 'success');
    //         $this->redirect('Home:default');
 
    //     }
    // }
    }