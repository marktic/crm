<?php

declare(strict_types=1);

namespace Marktic\Crm\Contacts\Models;

use Marktic\Crm\AbstractBase\Models\CrmRecordManager;

/**
 * Class Contacts
 * @package Marktic\Crm\Contacts\Models
 *
 * @method Contact getNew($data = [])
 * @method Contact findOne($id)
 * @method Contact[] findAll()
 */
class Contacts extends CrmRecordManager
{
    public const TABLE = 'mkt_crm_contacts';
    public const CONTROLLER = 'mkt_crm-contacts';

    /**
     * @return Contact
     */
    public function getNewModel(): Contact
    {
        return new Contact();
    }
}
