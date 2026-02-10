<?php

declare(strict_types=1);

namespace Marktic\Crm\Activities\Models;

use Marktic\Crm\AbstractBase\Models\CrmRecordManager;
use Marktic\Crm\AbstractBase\Models\HasSubject\HasSubjectRepositoryTrait;
use Marktic\Crm\AbstractBase\Models\HasTenant\HasTenantRepositoryTrait;
use Marktic\Crm\Utility\CrmModels;
use Marktic\Crm\Utility\PackageConfig;

/**
 * Class Activities
 * @package Marktic\Crm\Activities\Models
 *
 * @method Activity getNew($data = [])
 * @method Activity findOne($id)
 * @method Activity[] findAll()
 */
class Activities extends CrmRecordManager
{
    public const TABLE = 'mkt_crm_activities';
    public const CONTROLLER = 'mkt_crm-activities';
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
        return PackageConfig::tableName(CrmModels::ACTIVITIES, self::TABLE);
    }

    protected function generateController()
    {
        return self::CONTROLLER;
    }
}
