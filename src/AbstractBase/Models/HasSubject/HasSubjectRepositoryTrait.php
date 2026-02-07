<?php

declare(strict_types=1);

namespace Marktic\Crm\AbstractBase\Models\HasSubject;

/**
 * Trait HasSubjectRepositoryTrait
 * @package Marktic\Crm\AbstractBase\Models\HasSubject
 */
trait HasSubjectRepositoryTrait
{
    public function initRelations()
    {
        parent::initRelations();
        $this->initRelationsCrm();
    }

    protected function initRelationsCrm(): void
    {
        $this->initRelationsCrmSubject();
    }

    protected function initRelationsCrmSubject(): void
    {
        $this->morphTo('Subject', ['morphPrefix' => 'subject']);
    }
}
