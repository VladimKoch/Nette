<?php

declare(strict_types=1);

namespace App\MyApi\v1\Forms;



use Nette\Application\UI\Form;



class ImgForm
{
    public function create(): Form
    {
        $form = new Form;

        $form->addUpload('image', 'Nahrajte obrázek:')
            ->setRequired('Prosím, nahrajte obrázek.')
            ->addRule(Form::Image, 'Soubor musí být obrázek.');

        $form->addSubmit('submitBtn', 'Ulož jako JPG')
        ->onClick[] = [$this, 'submitButtonPressed'];

        $form->addSubmit('convertBtn', 'Převeď a stáhni jako PNG')
        ->onClick[] = [$this, 'convertButtonPressed'];

        $form->addSubmit('savePngBtn', 'Převeď a ulož jako PNG')
        ->onClick[] = [$this, 'savePngButtonPressed'];

        return $form;
    }

    
}