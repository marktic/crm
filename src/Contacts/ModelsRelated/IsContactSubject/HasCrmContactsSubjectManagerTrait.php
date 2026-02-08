<?php

namespace Marktic\Crm\Contacts\ModelsRelated\IsContactSubject;


use Marktic\Crm\Utility\CrmModels;

trait HasCrmContactsSubjectManagerTrait
{

    protected function initRelations(): void
    {
        parent::initRelations();
        $this->initRelationsCrm();
    }

    protected function initRelationsCrm(): void
    {
        $this->initRelationsCrmSubjectRelation();
    }

    /**
     * @inheritDoc
     */
    protected function initRelationsCrmSubjectRelation()
    {
        $this->initRelation('morphMany', 'CrmContacts', [
            'class' => CrmModels::contactsClass(),
            'morphPrefix' => 'subject',
        ]);
    }
}
