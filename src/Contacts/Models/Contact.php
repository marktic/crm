<?php

declare(strict_types=1);

namespace Marktic\Crm\Contacts\Models;

use Marktic\Crm\AbstractBase\Models\CrmRecord;
use Marktic\Crm\AbstractBase\Models\HasTenant\HasTenantRecordTrait;
use Marktic\Crm\AbstractBase\Models\HasSubject\HasSubjectRecordTrait;

/**
 * Class Contact
 * @package Marktic\Crm\Contacts\Models
 *
 * @property int $id
 * @property int $tenant_id
 * @property int $subject_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $mobile
 * @property string $company
 * @property string $position
 * @property string $notes
 * @property string $created_at
 * @property string $updated_at
 */
class Contact extends CrmRecord
{
    use HasTenantRecordTrait;
    use HasSubjectRecordTrait;

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return trim(($this->first_name ?? '') . ' ' . ($this->last_name ?? ''));
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->getFullName();
    }
}
