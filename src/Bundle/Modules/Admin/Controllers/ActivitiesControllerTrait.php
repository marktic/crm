<?php

declare(strict_types=1);

namespace Marktic\Crm\Bundle\Modules\Admin\Controllers;

use Marktic\Crm\Utility\CrmModels;

/**
 * Trait ActivitiesControllerTrait
 * @package Marktic\Crm\Bundle\Modules\Admin\Controllers
 */
trait ActivitiesControllerTrait
{
    use AbstractCrmControllerTrait;

    protected function generateModelName(): string
    {
        return CrmModels::activitiesClass();
    }
}
