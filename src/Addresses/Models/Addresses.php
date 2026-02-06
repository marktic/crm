<?php

declare(strict_types=1);

namespace Marktic\Crm\Addresses\Models;

use Marktic\Crm\AbstractBase\Models\CrmRecordManager;

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
    public const CONTROLLER = 'addresses';

    /**
     * @return Address
     */
    public function getNewModel(): Address
    {
        return new Address();
    }
}
