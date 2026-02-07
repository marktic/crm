<?php

declare(strict_types=1);

namespace Marktic\Crm\Bundle\Modules\Admin\Forms\LegalProfiles;

use Marktic\Crm\Bundle\Library\Form\FormModel;

/**
 * Class DetailsForm
 * @package Marktic\Crm\Bundle\Modules\Admin\Forms\LegalProfiles
 */
class DetailsForm extends FormModel
{
    public function initialize()
    {
        parent::initialize();

        $this->initializeFiscalCode();
        $this->initializeLegalRepresentative();
        $this->initializeCompanyName();
        $this->initializeRegistrationNumber();
        $this->initializeVatNumber();
        $this->initializeLegalForm();
        $this->initializeNotes();

        $this->addButton('save', translator()->trans('submit'));
    }

    protected function initializeFiscalCode()
    {
        $this->addInput('fiscal_code', translator()->trans('fiscal_code'), false);
    }

    protected function initializeLegalRepresentative()
    {
        $this->addInput('legal_representative', translator()->trans('legal_representative'), false);
    }

    protected function initializeCompanyName()
    {
        $this->addInput('company_name', translator()->trans('company_name'), false);
    }

    protected function initializeRegistrationNumber()
    {
        $this->addInput('registration_number', translator()->trans('registration_number'), false);
    }

    protected function initializeVatNumber()
    {
        $this->addInput('vat_number', translator()->trans('vat_number'), false);
    }

    protected function initializeLegalForm()
    {
        $this->addInput('legal_form', translator()->trans('legal_form'), false);
    }

    protected function initializeNotes()
    {
        $this->addTextarea('notes', translator()->trans('notes'), false);
    }
}
