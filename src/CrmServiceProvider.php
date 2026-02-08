<?php

declare(strict_types=1);

namespace Marktic\Crm;

use Bytic\PackageBase\BaseBootableServiceProvider;
use Marktic\Crm\Utility\PackageConfig;

/**
 * Class CrmServiceProvider
 * @package Marktic\Crm
 */
class CrmServiceProvider extends BaseBootableServiceProvider
{
    public const NAME = 'mkt_crm';

    public function migrations(): ?string
    {
        if (PackageConfig::shouldRunMigrations()) {
            return dirname(__DIR__) . '/database/migrations/';
        }

        return null;
    }

    protected function translationsPath(): ?string
    {
        return dirname(__DIR__) . '/resources/lang';
    }
}
