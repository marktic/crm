<?php

declare(strict_types=1);

namespace Marktic\Crm\Bundle\Modules\Admin\Forms\Contracts;

use Marktic\Crm\Bundle\Library\Form\FormModel;

/**
 * Class DetailsForm
 * @package Marktic\Crm\Bundle\Modules\Admin\Forms\Contracts
 */
class DetailsForm extends FormModel
{
    public function initialize()
    {
        parent::initialize();

        $this->initializeContractNumber();
        $this->initializeTitle();
        $this->initializeDescription();
        $this->initializeStatus();
        $this->initializeStartDate();
        $this->initializeEndDate();
        $this->initializeValue();
        $this->initializeCurrency();
        $this->initializeNotes();

        $this->addButton('save', translator()->trans('submit'));
    }

    protected function initializeContractNumber()
    {
        $this->addInput('contract_number', translator()->trans('contract_number'), false);
    }

    protected function initializeTitle()
    {
        $this->addInput('title', translator()->trans('title'), true);
    }

    protected function initializeDescription()
    {
        $this->addTextarea('description', translator()->trans('description'), false);
    }

    protected function initializeStatus()
    {
        $this->addSelect('status', translator()->trans('status'), true);
        $statusElement = $this->getElement('status');
        $statusElement->addOption('draft', translator()->trans('draft'));
        $statusElement->addOption('active', translator()->trans('active'));
        $statusElement->addOption('completed', translator()->trans('completed'));
        $statusElement->addOption('cancelled', translator()->trans('cancelled'));
    }

    protected function initializeStartDate()
    {
        $this->addInput('start_date', translator()->trans('start_date'), false);
    }

    protected function initializeEndDate()
    {
        $this->addInput('end_date', translator()->trans('end_date'), false);
    }

    protected function initializeValue()
    {
        $this->addInput('value', translator()->trans('value'), false);
    }

    protected function initializeCurrency()
    {
        $this->addInput('currency', translator()->trans('currency'), false);
    }

    protected function initializeNotes()
    {
        $this->addTextarea('notes', translator()->trans('notes'), false);
    }
}
