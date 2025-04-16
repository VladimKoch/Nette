<?php

namespace App\Model;

use Nette\Application\UI\Form;


class PostManager
{

    public function __construct(private \Nette\Database\Explorer $database)
    {
        
    }
    public function getPosts()
    {
        $datas = $this->database->table('posts')->fetchAll();

        return $datas;
    }
}