<?php

declare(strict_types=1);

namespace App\Presentation\Calculator;

use Nette;
use Nette\Application\UI\Form;
use Nette\Utils\ArrayHash;
use App\Model\CalculatorManager;

/**
 * Presenter Kalkulačky
 * @package App\Prenseters
 */


final class CalculatorPresenter extends Nette\Application\UI\Presenter
{   

    private $calculator;
    
    /**Definice konstant pro zprávy folmuláře */

    const
        FORM_MSG_REQUIRED = 'Tohle pole je povinné',
        FORM_MSG_RULE = 'Tohle pole má neplatný formát';


        
        public function __construct(CalculatorManager $calculator)
            {
                parent::__construct();
                $this->calculator = $calculator;
            }


    /** @var int|null výsledek operace nebo null */
    private $result = null;

    /**Výchozí vykreslovací metoda tohoto presenteru. */
    public function renderDefault()
    {
        // Předání výsledku do šablony
        $this->template->result = $this->result;
        
    }
    
    /**
     * Vrátí folmulář kalkulačky
     * @return Form formulář kalkulačky
     */

    public function createComponentCalculatorForm(): Form
    {
        $form = new Form;
        //Získáme existující operace kalkulačky a dáme je do výběru operací
        $form->addRadioList('operation','Operace:',$this->calculator->getOperations())
            ->setDefaultValue(CalculatorManager::ADD)
            ->setRequired(self::FORM_MSG_REQUIRED);
        $form->addText('x','První číslo:')
            ->setHtmlType('number')
            ->setDefaultValue(0)
            ->setRequired(self::FORM_MSG_REQUIRED)
            ->addRule(Form::INTEGER, self::FORM_MSG_RULE);
        $form->addText('y','Druhé číso:')
            ->setHtmlType('number')
            ->setDefaultValue(0)
            ->setRequired(self::FORM_MSG_REQUIRED)
            ->addRule(Form::INTEGER, self::FORM_MSG_RULE)
            //ošetříme dělení nulou
            ->addConditionOn($form['operation'], Form::EQUAL, CalculatorManager::DIVIDE)
            ->addRule(Form::PATTERN,'Nelze dělit nulou.','^[^0].*');
        $form->addSubmit('calculate','Spočítej výsledek');
        $form->onSuccess[] = [$this,'calculatorFormSucceeded'];

        return $form;
    }

    /**Funkce je vykonána při úspěšném odeslání formuláře kalkulačky a zpracuje odeslané hodnoty.
     *  @param Form $form   formulář kalkulačky
     *  @param ArrayHash $values odeslané hodnoty formuláře
     */

     public function calculatorFormSucceeded(Form $form, ArrayHash $values)
     {
        //Necháme si vypočítat výsledek podle zvolené operace a zadaných hodnot
        $this->result = $this->calculator->calculate($values->operation,$values->x,$values->y);
     }

}
