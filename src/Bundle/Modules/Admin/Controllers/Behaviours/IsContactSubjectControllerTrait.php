<?php

namespace Marktic\Crm\Bundle\Modules\Admin\Controllers\Behaviours;

use Marktic\Crm\Contacts\Actions\Find\FindCrmContacts;

trait IsContactSubjectControllerTrait
{
    protected function payloadSetContacts($subject, $tenant = null)
    {
        $contacts = FindCrmContacts::for($subject)->withTenant($tenant)->fetch();
        $this->payload()->set('crm_contacts', $contacts);
    }
}