<?php

declare(strict_types=1);

namespace App\Model;

use Nette;
use Nette\Security\SimpleIdentity;
use Nette\Security\Authenticator;
use Nette\Security\AuthenticationException;

class Auth implements Authenticator
{
    

    public function __construct(private \Nette\Database\Explorer $database)
    {
        
    }

    public function authenticate(string $email, string $password): SimpleIdentity
    {
        $row = $this->database->table('users')
            ->where('email', $email)
            ->fetch();

        if (!$row) {
            throw new AuthenticationException('Uživatel neexistuje.');
        }

        if (!password_verify($password, $row->password)) {
            throw new AuthenticationException('Nesprávné heslo.');
        }

        return new SimpleIdentity($row->id,$row->roles, ['email' => $row->email,'username'=>$row->username]);
    }
}