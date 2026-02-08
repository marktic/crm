<?php

declare(strict_types=1);

namespace Marktic\Crm\AbstractBase\Models;

use ByTIC\Records\Behaviors\HasForms\HasFormsRecordsTrait;
use Nip\I18n\Translatable\HasTranslations;
use Nip\Records\RecordManager;

/**
 * Class CrmRecordManager
 * @package Marktic\Crm\AbstractBase\Models
 */
abstract class CrmRecordManager extends RecordManager
{
    use \ByTIC\DataObjects\Behaviors\Timestampable\TimestampableManagerTrait;

    use HasTranslations;
    use HasFormsRecordsTrait;

    use HasDatabaseConnectionTrait;

    /**
     * @return string
     */
    public function getTranslateRoot()
    {
        return $this->getController();
    }
}
