<?php

declare(strict_types=1);

namespace Marktic\Crm\Contracts\Models;

use Marktic\Crm\AbstractBase\Models\CrmRecord;
use Marktic\Crm\AbstractBase\Models\HasTenant\HasTenantRecordTrait;
use Marktic\Crm\AbstractBase\Models\HasSubject\HasSubjectRecordTrait;

/**
 * Class Contract
 * @package Marktic\Crm\Contracts\Models
 *
 * @property int $id
 * @property int $tenant_id
 * @property int $subject_id
 * @property string $contract_number
 * @property string $title
 * @property string $description
 * @property string $status
 * @property string $start_date
 * @property string $end_date
 * @property float $value
 * @property string $currency
 * @property string $notes
 * @property string $created_at
 * @property string $updated_at
 */
class Contract extends CrmRecord
{
    use HasTenantRecordTrait;
    use HasSubjectRecordTrait;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->title ?? $this->contract_number ?? 'Contract #' . $this->id;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->status === 'active';
    }

    /**
     * @return bool
     */
    public function isExpired(): bool
    {
        if (!$this->end_date) {
            return false;
        }

        return strtotime($this->end_date) < time();
    }
}
