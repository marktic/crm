<?php

namespace Marktic\Crm\Bundle\Modules\Admin\Controllers\Behaviours;

use Marktic\Crm\AbstractBase\Models\Filters\TenantFilter;
use Marktic\Crm\Contacts\Models\Contact;
use Nip\Records\Filters\Sessions\Session;

trait HasSubjectControllerTrait
{

    public function addNewModel()
    {
        /** @var Contact $record */
        $record = parent::addNewModel();

        $subject = $this->getCrmSubjectFromRequest();
        $record->populateFromSubject($subject);

        if (method_exists($this, 'getCrmTenant')) {
            $tenant = $this->getCrmTenant();
            $record->populateFromTenant($tenant);
        }

        return $record;
    }

    /**
     * @return mixed
     */
    protected function getCrmSubjectFromRequest()
    {
        $subjectName = $this->getRequest()->get('subject_type');
        return $this->checkForeignModelFromRequest($subjectName, ['subject_id', 'id']);
    }
}
