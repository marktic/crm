<?php

namespace Marktic\Crm\AbstractBase\Models;

use Marktic\Crm\Utility\PackageConfig;
use Nip\Database\Connections\Connection;

use function app;

/**
 * Trait HasDatabaseConnectionTrait
 * @package ByTIC\World\Base\Models\Traits
 */
trait HasDatabaseConnectionTrait
{

    /**
     * @return Connection
     */
    protected function newDbConnection()
    {
        return app('db')->connection(PackageConfig::databaseConnection());
    }
}

