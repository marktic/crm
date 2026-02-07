<?php

declare(strict_types=1);

namespace Marktic\Crm;

use Bytic\PackageBase\BaseServiceProvider;

/**
 * Class CrmServiceProvider
 * @package Marktic\Crm
 */
class CrmServiceProvider extends BaseServiceProvider
{
    public const NAME = 'mkt_crm';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            $this->getConfigFile() => config_path('crm.php'),
        ], 'config');

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            $this->getConfigFile(),
            'crm'
        );
    }

    /**
     * Get the config file path
     *
     * @return string
     */
    protected function getConfigFile(): string
    {
        return __DIR__ . '/../config/crm.php';
    }
}
