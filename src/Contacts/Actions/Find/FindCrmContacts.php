<?php

declare(strict_types=1);

namespace Marktic\Crm\Contacts\Actions\Find;

use Bytic\Actions\Behaviours\Entities\FindRecords;
use Bytic\Actions\Behaviours\HasSubject\HasSubject;
use Marktic\Crm\Contacts\Actions\AbstractContactsAction;

/**
 */
class FindCrmContacts extends AbstractContactsAction
{
    use HasSubject;
    use FindRecords;

    protected $tenant = null;

    public function withTenant($tenant): self
    {
        $this->tenant = $tenant;
        return $this;
    }

    protected function findParams(): array
    {
        $subject = $this->getSubject();
        $params = [];
        if ($this->tenant) {
            $params['where'][] = ['tenant_id = ?', $this->tenant->id];
            $params['where'][] = ['tenant_type = ?', $this->tenant->getManager()->getMorphName()];
        }
        $params['where'][] = ['subject_id = ?', $subject->id];
        $params['where'][] = ['subject_type = ?', $subject->getManager()->getMorphName()];
        return $params;
    }
}
