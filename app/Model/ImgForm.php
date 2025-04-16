<?php

namespace App\Model;

use Nette\Application\UI\Form;


class ImageUploadFormFactory
{
    public function create(callable $onSuccess): Form
    {
        $form = new Form;
        $form->addUpload('image', 'Vyberte obrázek:')
            ->setRequired('Musíte vybrat obrázek.')
            ->addRule(Form::IMAGE, 'Obrázek musí být ve formátu JPEG, PNG nebo GIF')
            ->addRule(Form::MAX_FILE_SIZE, 'Maximální velikost souboru je 5 MB', 5 * 1024 * 1024);
        
        $form->addSubmit('upload', 'Nahrát');

        $form->onSuccess[] = function (Form $form, array $values) use ($onSuccess) {
            $onSuccess($values['image']);
        };

        return $form;
    }
}