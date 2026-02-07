<?php

declare(strict_types=1);

namespace Marktic\Crm\Addresses\Models;

use Marktic\Crm\AbstractBase\Models\CrmRecord;
use Marktic\Crm\AbstractBase\Models\HasTenant\HasTenantRecordTrait;
use Marktic\Crm\AbstractBase\Models\HasSubject\HasSubjectRecordTrait;

/**
 * Class Address
 * @package Marktic\Crm\Addresses\Models
 *
 * @property int $id
 * @property int $tenant_id
 * @property int $subject_id
 * @property string $type
 * @property string $address_line1
 * @property string $address_line2
 * @property string $city
 * @property string $state
 * @property string $postal_code
 * @property string $country
 * @property bool $is_primary
 * @property string $created_at
 * @property string $updated_at
 */
class Address extends CrmRecord
{
    use HasTenantRecordTrait;
    use HasSubjectRecordTrait;

    /**
     * @return string
     */
    public function getFullAddress(): string
    {
        $parts = array_filter([
            $this->address_line1,
            $this->address_line2,
            $this->city,
            $this->state,
            $this->postal_code,
            $this->country,
        ], fn($v) => $v !== null && $v !== '');

        return implode(', ', $parts);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->getFullAddress();
    }
}
