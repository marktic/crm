<?php

declare(strict_types=1);

namespace Marktic\Crm\Bundle\Modules\Admin\Controllers;

use Marktic\Crm\Bundle\Modules\Admin\Forms\Contracts\DetailsForm;
use Marktic\Crm\Utility\CrmModels;

/**
 * Trait ContractsControllerTrait
 * @package Marktic\Crm\Bundle\Modules\Admin\Controllers
 */
trait ContractsControllerTrait
{
    use AbstractCrmControllerTrait;

    protected function getModelFormClass($model, $action = null): string
    {
        return DetailsForm::class;
    }

    protected function generateModelName(): string
    {
        return CrmModels::contractsClass();
    }
}
