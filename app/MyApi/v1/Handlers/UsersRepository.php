<?php


namespace App\MyApi\v1\Handlers;

use Nette;
use Tomaj\NetteApi\Handlers\BaseHandler;
use Tomaj\NetteApi\Response\JsonApiResponse;
use Tomaj\NetteApi\Response\ResponseInterface;

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