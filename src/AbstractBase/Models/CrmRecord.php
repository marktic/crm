<?php

declare(strict_types=1);

namespace Marktic\Crm\AbstractBase\Models;

use ByTIC\Models\SmartProperties\SmartPropertiesRecordTrait;
use ByTIC\ORM\Behaviors\Timestampable\TimestampableRecordTrait;
use Nip\Records\Record;

/**
 * Class CrmRecord
 * @package Marktic\Crm\AbstractBase\Models
 */
abstract class CrmRecord extends Record
{
    use SmartPropertiesRecordTrait;
    use TimestampableRecordTrait;
}
