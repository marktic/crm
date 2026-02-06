<?php

declare(strict_types=1);

namespace Marktic\Crm\Bundle\Modules\Admin\Controllers;

use Marktic\Crm\Utility\CrmModels;

/**
 * Trait AddressesControllerTrait
 * @package Marktic\Crm\Bundle\Modules\Admin\Controllers
 */
trait AddressesControllerTrait
{
    use AbstractCrmControllerTrait;

    protected function generateModelName(): string
    {
        return CrmModels::addressesClass();
    }
}
