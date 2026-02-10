<?php

declare(strict_types=1);

namespace Marktic\Crm\Addresses\Models;

use Marktic\Crm\AbstractBase\Models\CrmRecordManager;
use Marktic\Crm\AbstractBase\Models\HasSubject\HasSubjectRepositoryTrait;
use Marktic\Crm\AbstractBase\Models\HasTenant\HasTenantRepositoryTrait;
use Marktic\Crm\Activities\Models\Activities;
use Marktic\Crm\Utility\CrmModels;
use Marktic\Crm\Utility\PackageConfig;

/**
 * Class Addresses
 * @package Marktic\Crm\Addresses\Models
 *
 * @method Address getNew($data = [])
 * @method Address findOne($id)
 * @method Address[] findAll()
 */
class Addresses extends CrmRecordManager
{
    public const TABLE = 'mkt_crm_addresses';
    public const CONTROLLER = 'mkt_crm-addresses';
    use HasTenantRepositoryTrait;
    use HasSubjectRepositoryTrait;

    public function initRelations()
    {
        parent::initRelations();
        $this->initRelationsCrm();
    }

    protected function initRelationsCrm(): void
    {
        $this->initRelationsCrmSubject();
        $this->initRelationsCrmTenant();
    }


    protected function generateTable(): string
    {
        return PackageConfig::tableName(CrmModels::ADDRESSES, self::TABLE);
    }

    protected function generateController()
    {
        return self::CONTROLLER;
    }
}
