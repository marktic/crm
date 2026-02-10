<?php

namespace Marktic\Crm\Bundle\Modules\Admin\Controllers\Behaviours;

use Marktic\Crm\Activities\Actions\Find\FindCrmActivities;
use Marktic\Crm\Bundle\Modules\Admin\Controllers\AbstractCrmControllerTrait;

trait IsActivitiesSubjectControllerTrait
{
    use AbstractCrmControllerTrait;

    protected function payloadSetContacts($subject, $tenant = null)
    {
        $tenant = $tenant ?? $this->getCrmTenant();
        $contacts = FindCrmActivities::for($subject)->withTenant($tenant)->fetch();
        $this->payload()->set('crm_activities', $contacts);
    }
}