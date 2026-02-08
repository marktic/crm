<?php

declare(strict_types=1);

namespace Marktic\Crm\LegalProfiles\Models;

use Marktic\Crm\AbstractBase\Models\CrmRecordManager;
use Marktic\Crm\Utility\CrmModels;
use Marktic\Crm\Utility\PackageConfig;

/**
 * Class LegalProfiles
 * @package Marktic\Crm\LegalProfiles\Models
 *
 * @method LegalProfile getNew($data = [])
 * @method LegalProfile findOne($id)
 * @method LegalProfile[] findAll()
 */
class LegalProfiles extends CrmRecordManager
{
    public const TABLE = 'mkt_crm_legal_profiles';
    public const CONTROLLER = 'mkt_crm-legal_profiles';

    protected function generateTable(): string
    {
        return PackageConfig::tableName(CrmModels::LEGAL_PROFILES, self::TABLE);
    }

    protected function generateController()
    {
        return self::CONTROLLER;
    }
}
