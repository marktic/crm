<?php

declare(strict_types=1);

namespace Marktic\Crm\Bundle\Modules\Admin\Forms\Activities;

use Marktic\Crm\Bundle\Library\Form\FormModel;

/**
 * Class DetailsForm
 * @package Marktic\Crm\Bundle\Modules\Admin\Forms\Activities
 */
class DetailsForm extends FormModel
{
    public function initialize()
    {
        parent::initialize();

        $this->initializeTitle();
        $this->initializeSummary();
        $this->initializeOnDate();

        $this->addButton('save', translator()->trans('submit'));
    }

    protected function initializeTitle()
    {
        $this->addInput('title', translator()->trans('title'), true);
    }

    protected function initializeSummary()
    {
        $this->addTextarea('summary', translator()->trans('summary'), false);
    }

    protected function initializeOnDate()
    {
        $this->addInput('on_date', translator()->trans('on_date'), false);
    }
}
