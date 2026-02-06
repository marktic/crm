<?php

declare(strict_types=1);

namespace Marktic\Crm\Bundle\Modules\Admin\Controllers;

use Marktic\Crm\Utility\CrmModels;

/**
 * Trait LegalProfilesControllerTrait
 * @package Marktic\Crm\Bundle\Modules\Admin\Controllers
 */
trait LegalProfilesControllerTrait
{
    use AbstractCrmControllerTrait;

    protected function generateModelName(): string
    {
        return CrmModels::legalProfilesClass();
    }
}
