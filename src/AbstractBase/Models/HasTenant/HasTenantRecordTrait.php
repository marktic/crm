<?php

declare(strict_types=1);

namespace Marktic\Crm\AbstractBase\Models\HasTenant;

use Nip\Records\Record;

/**
 * Trait HasTenantRecordTrait
 * @package Marktic\Crm\AbstractBase\Models\HasTenant
 *
 * @method Record getTenant
 */
trait HasTenantRecordTrait
{
    public string|int|null $tenant_id;
    public string|null $tenant;

    /**
     * @return int|null
     */
    public function getTenantId(): ?int
    {
        return $this->tenant_id;
    }

    /**
     * @param int $tenantId
     */
    public function setTenantId(int $tenantId): void
    {
        $this->tenant_id = $tenantId;
    }

    /**
     * @param Record $record
     */
    public function populateFromTenant($record)
    {
        $this->tenant_id = $record->id;
        $this->tenant = $record->getManager()->getMorphName();
    }
}
