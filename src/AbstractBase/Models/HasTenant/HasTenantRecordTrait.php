<?php

declare(strict_types=1);

namespace Marktic\Crm\AbstractBase\Models\HasTenant;

/**
 * Trait HasTenantRecordTrait
 * @package Marktic\Crm\AbstractBase\Models\HasTenant
 */
trait HasTenantRecordTrait
{
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
}
