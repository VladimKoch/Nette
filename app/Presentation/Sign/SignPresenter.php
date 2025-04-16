<?php
namespace App\Presentation\Sign;

use Nette;
use Nette\Application\UI\Form;
use Nette\Database\UniqueConstraintViolationException;




final class SignPresenter extends Nette\Application\UI\Presenter
{   

    public function __construct(private \Nette\Database\Explorer $database,
                                private \Nette\Security\User $user,
                                private \App\Model\UserManager $userManager,
                                private \App\Model\Auth $auth)
    {
        
    }

	protected function createComponentSignInForm(): Form
	{
		$form = new Form;
		$form->addText('username', 'Uživatelské jméno:')
			->setRequired('Prosím vyplňte své uživatelské jméno.');
		$form->addEmail('email', 'Email:')
			->setRequired('Prosím vyplňte email.');

		$form->addPassword('password', 'Heslo:')
			->setRequired('Prosím vyplňte své heslo.');

		$form->addSubmit('send', 'Přihlásit');

		$form->onSuccess[] = [$this,'signInFormSucceeded'];
		return $form;
	}

    public function signInFormSucceeded(Form $form,\stdClass $data): void
    {   
        try{
            $this->database->table('users')->insert([
                'username'=>$data->username,
                'email'=>$data->email,
                'password'=>password_hash($data->password,PASSWORD_DEFAULT)
                
            ]);
            $this->flashMessage('Váš účet byl úspěšně zaregistrován');
            $this->redirect('Home:');

        }catch(UniqueConstraintViolationException $e){
            $form->addError('Uživatel již existuje');
        }

    }

    protected function createComponentLoginForm(): Form
	{
		$form = new Form;
		
		$form->addEmail('email', 'Email:')
			->setRequired('Prosím vyplňte email.');

		$form->addPassword('password', 'Heslo:')
			->setRequired('Prosím vyplňte své heslo.');

		$form->addSubmit('send', 'Přihlásit');

		$form->onSuccess[] = [$this,'loginFormSucceeded'];
		return $form;
	}

    public function loginFormSucceeded(Form $form,\stdClass $data): void
    {  

     
    try {
            
            $this->getUser()->login($data->email, $data->password);
            $this->flashMessage('Byl jste uspěšne přihlášen');
            $this->redirect('Home:default');
      
        } catch (Nette\Security\AuthenticationException $e) {
            $form->addError('Nesprávné přihlašovací jméno nebo heslo.');
            // $this->redirect('this');

        }

    }

    public function actionOut(): void
    {   
        $this->user->logout();
        $this->flashMessage('Byl jste odhlášen.', 'info');
        $this->redirect('Sign:login');
    }


}