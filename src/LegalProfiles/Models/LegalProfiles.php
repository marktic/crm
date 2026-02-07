<?php

declare(strict_types=1);

namespace Marktic\Crm\LegalProfiles\Models;

use Marktic\Crm\AbstractBase\Models\CrmRecordManager;

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

    /**
     * @return LegalProfile
     */
    public function getNewModel(): LegalProfile
    {
        return new LegalProfile();
    }
}
