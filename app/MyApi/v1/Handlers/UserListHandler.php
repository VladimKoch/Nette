<?php


namespace App\MyApi\v1\Handlers;

use Tomaj\NetteApi\Handlers\BaseHandler;
use Tomaj\NetteApi\Response\JsonApiResponse;
use Tomaj\NetteApi\Response\ResponseInterface;

class UsersListingHandler extends Basehandler
{
    private $userRepository;

    public function __construct(UsersRepository $userRepository)
    {
        parent::__construct();
        $this->userRepository = $userRepository;
    }

    public function handle(array $params): ResponseInterface
    {
        $users = [];
        
        foreach ($this->userRepository->all() as $user) {
            $users[] = $user->toArray();
        }
        
        return new JsonApiResponse(200, ['status' => 'ok', 'users' => $users]);
    }
}