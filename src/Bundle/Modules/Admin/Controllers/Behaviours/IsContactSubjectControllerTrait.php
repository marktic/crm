<?php

namespace Marktic\Crm\Bundle\Modules\Admin\Controllers\Behaviours;

use Marktic\Crm\Bundle\Modules\Admin\Controllers\AbstractCrmControllerTrait;
use Marktic\Crm\Contacts\Actions\Find\FindCrmContacts;

trait IsContactSubjectControllerTrait
{
    use AbstractCrmControllerTrait;

    protected function payloadSetContacts($subject, $tenant = null)
    {
        $tenant = $tenant ?? $this->getCrmTenant();
        $contacts = FindCrmContacts::for($subject)->withTenant($tenant)->fetch();
        $this->payload()->set('crm_contacts', $contacts);
    }
}