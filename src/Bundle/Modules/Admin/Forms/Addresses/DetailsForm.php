<?php

declare(strict_types=1);

namespace Marktic\Crm\Bundle\Modules\Admin\Forms\Addresses;

use Marktic\Crm\Bundle\Library\Form\FormModel;

/**
 * Class DetailsForm
 * @package Marktic\Crm\Bundle\Modules\Admin\Forms\Addresses
 */
class DetailsForm extends FormModel
{
    public function initialize()
    {
        parent::initialize();

        $this->initializeType();
        $this->initializeAddressLine1();
        $this->initializeAddressLine2();
        $this->initializeCity();
        $this->initializeState();
        $this->initializePostalCode();
        $this->initializeCountry();
        $this->initializeIsPrimary();

        $this->addButton('save', translator()->trans('submit'));
    }

    protected function initializeType()
    {
        $this->addInput('type', translator()->trans('type'), false);
    }

    protected function initializeAddressLine1()
    {
        $this->addInput('address_line1', translator()->trans('address_line1'), true);
    }

    protected function initializeAddressLine2()
    {
        $this->addInput('address_line2', translator()->trans('address_line2'), false);
    }

    protected function initializeCity()
    {
        $this->addInput('city', translator()->trans('city'), true);
    }

    protected function initializeState()
    {
        $this->addInput('state', translator()->trans('state'), false);
    }

    protected function initializePostalCode()
    {
        $this->addInput('postal_code', translator()->trans('postal_code'), false);
    }

    protected function initializeCountry()
    {
        $this->addInput('country', translator()->trans('country'), true);
    }

    protected function initializeIsPrimary()
    {
        $this->addRadioGroup('is_primary', translator()->trans('is_primary'), false);
        $isPrimaryElement = $this->getElement('is_primary');
        $isPrimaryElement->addOption('1', translator()->trans('yes'));
        $isPrimaryElement->addOption('0', translator()->trans('no'));
    }
}
