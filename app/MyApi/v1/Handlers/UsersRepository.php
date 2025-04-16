<?php


namespace App\MyApi\v1\Handlers;

use Nette;


class UsersRepository
{

    public function __construct(private \Nette\Database\Explorer $database)
    {
        
    }

    public function all()
    {
      return $this->database->table('users')->fetchAll();

    }

    public function find(array $params)
    {

    }
}