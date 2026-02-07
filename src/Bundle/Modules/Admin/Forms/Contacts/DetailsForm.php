<?php

declare(strict_types=1);

namespace Marktic\Crm\Bundle\Modules\Admin\Forms\Contacts;

use Marktic\Crm\Bundle\Library\Form\FormModel;

/**
 * Class DetailsForm
 * @package Marktic\Crm\Bundle\Modules\Admin\Forms\Contacts
 */
class DetailsForm extends FormModel
{
    public function initialize()
    {
        parent::initialize();

        $this->initializeFirstName();
        $this->initializeLastName();
        $this->initializeEmail();
        $this->initializePhone();
        $this->initializeMobile();
        $this->initializeCompany();
        $this->initializePosition();
        $this->initializeNotes();

        $this->addButton('save', translator()->trans('submit'));
    }

    protected function initializeFirstName()
    {
        $this->addInput('first_name', translator()->trans('first_name'), true);
    }

    protected function initializeLastName()
    {
        $this->addInput('last_name', translator()->trans('last_name'), true);
    }

    protected function initializeEmail()
    {
        $this->addInput('email', translator()->trans('email'), false);
    }

    protected function initializePhone()
    {
        $this->addInput('phone', translator()->trans('phone'), false);
    }

    protected function initializeMobile()
    {
        $this->addInput('mobile', translator()->trans('mobile'), false);
    }

    protected function initializeCompany()
    {
        $this->addInput('company', translator()->trans('company'), false);
    }

    protected function initializePosition()
    {
        $this->addInput('position', translator()->trans('position'), false);
    }

    protected function initializeNotes()
    {
        $this->addTextarea('notes', translator()->trans('notes'), false);
    }
}
