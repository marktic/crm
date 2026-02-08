<?php

declare(strict_types=1);

namespace Marktic\Crm\Bundle\Modules\Admin\Controllers;

use Marktic\Crm\Utility\ViewHelper;

/**
 * Trait AbstractCrmControllerTrait
 * @package Marktic\Crm\Bundle\Modules\Admin\Controllers
 */
trait AbstractCrmControllerTrait
{
    protected function bootAbstractCrmControllerTrait()
    {
        $this->after(
            function () {
                $this->registerCrmViewPaths();
            }
        );
    }

    protected function registerCrmViewPaths()
    {
        $view = $this->getView();
        ViewHelper::registerAdminPaths($view);
    }

    abstract protected function getCrmTenant();
}
