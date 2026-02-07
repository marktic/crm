<?php

declare(strict_types=1);

namespace Marktic\Crm\Activities\Models;

use Marktic\Crm\AbstractBase\Models\CrmRecordManager;

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

    /**
     * @return Activity
     */
    public function getNewModel(): Activity
    {
        return new Activity();
    }
}
