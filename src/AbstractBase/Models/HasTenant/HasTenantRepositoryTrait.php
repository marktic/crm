<?php

declare(strict_types=1);

namespace Marktic\Crm\AbstractBase\Models\HasTenant;

/**
 * Trait HasTenantRepositoryTrait
 * @package Marktic\Crm\AbstractBase\Models\HasTenant
 */
trait HasTenantRepositoryTrait
{
    public function initRelations()
    {
        parent::initRelations();
        $this->initRelationsCrm();
    }

    protected function initRelationsCrm(): void
    {
        $this->initRelationsCrmTenant();
    }

    protected function initRelationsCrmTenant(): void
    {
        $this->morphTo('Tenant', ['morphPrefix' => 'tenant', 'morphTypeField' => 'tenant']);
    }
}
