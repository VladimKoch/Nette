<?php

declare(strict_types=1);



namespace App\Model;

use Nette\Security\IUserStorage;
use Nette\Security\Passwords;

class UserManager
{
    

    public function __construct(private \Nette\Database\Explorer $database)
    {
       
    }

    public function findUser($email)
    {
        return $this->database->table('users')->where('email', $email)->fetch();
    }

    public function verifyPassword($user, $password)
    {   
        $pass = new Passwords;
        return $pass->verify($password, $user->password);
    }
}