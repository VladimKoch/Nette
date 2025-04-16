<?php

declare(strict_types=1);

namespace App\Presentation\Edit;

use Nette;
use Nette\Application\UI\Form;
use stdClass;

final class EditPresenter extends Nette\Application\UI\Presenter
{   

    public function __construct(private \Nette\Database\Explorer $database)
    {
        
    }


    public function renderDefault(int $id): void
    {
        $post = $this->database
            ->table('posts')
            ->get($id);
    
        if (!$post) {
            $this->error('Post not found');
        }
    
        $this['postForm']
            ->setDefaults($post->toArray());
    
    
        $this->template->post = $post;
    }

    protected function createComponentPostForm(): Form
{
	$form = new Form;
	$form->addText('title', 'Titulek:')
		->setRequired();
	$form->addTextArea('content', 'Obsah:')
		->setRequired();

	$form->addSubmit('send', 'Uložit a publikovat');
	$form->onSuccess[] = [$this,'postFormSucceeded'];

	return $form;
}

public function postFormSucceeded(array $data): void
{
    $id = $this->getParameter('id');

    if(!$this->getUser()->isLoggedIn()) {$this->redirect('Sign:login');}

    if($id){
        $post = $this->database
                ->table('posts')
                ->get($id);
        $post->update($data);
    }else{
        $post=$this->database
                ->table('posts')
                ->insert($data);
    }

    $this->flashMessage('Příspěvek byl úspěšně upraven.', 'success');
	$this->redirect('Post:default',$post->id);
}


    
}
