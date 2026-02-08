<?php

namespace Marktic\Crm\Bundle\Modules\Admin\Controllers\Behaviours;

use Marktic\Crm\AbstractBase\Models\Filters\TenantFilter;
use Nip\Records\Filters\Sessions\Session;

trait HasTenantControllerTrait
{
    public function tenant()
    {
        $this->doModelsListing();
    }

    protected function getRequestFilters($session = null)
    {
        $request = $this->getRequest();
        $request->setAttribute(TenantFilter::NAME, $this->getCrmTenantFromRequest());
        /** @var Session $filter */
        return parent::getRequestFilters($session);
    }

    /**
     * @return mixed
     */
    protected function getCrmTenantFromRequest()
    {
        $tenantName = $this->getRequest()->get('tenant_type');
        return $this->checkForeignModelFromRequest($tenantName, ['tenant_id', 'id']);
    }
}
