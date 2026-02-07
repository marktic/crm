<?php

declare(strict_types=1);

namespace Marktic\Crm\Contracts\Models;

use Marktic\Crm\AbstractBase\Models\CrmRecordManager;

/**
 * Class Contracts
 * @package Marktic\Crm\Contracts\Models
 *
 * @method Contract getNew($data = [])
 * @method Contract findOne($id)
 * @method Contract[] findAll()
 */
class Contracts extends CrmRecordManager
{
    public const TABLE = 'mkt_crm_contracts';
    public const CONTROLLER = 'mkt_crm-contracts';

    /**
     * @return Contract
     */
    public function getNewModel(): Contract
    {
        return new Contract();
    }
}
