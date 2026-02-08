<?php

declare(strict_types=1);

namespace Marktic\Crm\AbstractBase\Models;

use Nip\Records\Record;

/**
 * Class CrmRecord
 * @package Marktic\Crm\AbstractBase\Models
 */
abstract class CrmRecord extends Record
{
    use \ByTIC\DataObjects\Behaviors\Timestampable\TimestampableTrait;

    /**
     * @var string
     */
    protected static $createTimestamps = ['created_at'];

    /**
     * @var string
     */
    protected static $updateTimestamps = ['updated_at'];
}
