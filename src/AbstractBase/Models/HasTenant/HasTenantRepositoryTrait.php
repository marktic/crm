<?php

declare(strict_types=1);

namespace Marktic\Crm\AbstractBase\Models\HasTenant;

/**
 * Trait HasTenantRepositoryTrait
 * @package Marktic\Crm\AbstractBase\Models\HasTenant
 */
trait HasTenantRepositoryTrait
{
    /**
     * Get the TenantRecord relation
     * 
     * @return mixed
     */
    public function tenantRecord()
    {
        return $this->morphTo('tenant');
    }
}
