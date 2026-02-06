<?php

declare(strict_types=1);

namespace Marktic\Crm\Bundle\Modules\Admin\Controllers;

use ByTIC\Controllers\Admin\Behaviors\HasModelInController;

/**
 * Trait AbstractCrmControllerTrait
 * @package Marktic\Crm\Bundle\Modules\Admin\Controllers
 */
trait AbstractCrmControllerTrait
{
    use HasModelInController;

    /**
     * Get the model name for the controller
     *
     * @return string
     */
    abstract protected function generateModelName(): string;
}
