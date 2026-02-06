<?php

declare(strict_types=1);

namespace Marktic\Crm\Activities\Models;

use Marktic\Crm\AbstractBase\Models\CrmRecord;
use Marktic\Crm\AbstractBase\Models\HasTenant\HasTenantRecordTrait;
use Marktic\Crm\AbstractBase\Models\HasSubject\HasSubjectRecordTrait;

/**
 * Class Activity
 * @package Marktic\Crm\Activities\Models
 *
 * @property int $id
 * @property int $tenant_id
 * @property int $subject_id
 * @property string $title
 * @property string $summary
 * @property string $on_date
 * @property string $created_at
 * @property string $updated_at
 */
class Activity extends CrmRecord
{
    use HasTenantRecordTrait;
    use HasSubjectRecordTrait;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->title ?? 'Activity #' . $this->id;
    }

    /**
     * @return string|null
     */
    public function getFormattedDate(): ?string
    {
        if (!$this->on_date) {
            return null;
        }
        
        return date('Y-m-d', strtotime($this->on_date));
    }
}
