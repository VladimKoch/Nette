<?php

declare(strict_types=1);

namespace App\Model;

use Nette;

class ArticleManager
{
    public function __construct(private \Nette\Database\Explorer $database)
    {
        
    }

    public function findArticle()
    {
       return $this->database->table('posts')->where('created_at <',new \DateTime)->order('created_at ASC');
    }
}