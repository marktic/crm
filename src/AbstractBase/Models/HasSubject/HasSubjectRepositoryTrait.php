<?php

declare(strict_types=1);

namespace Marktic\Crm\AbstractBase\Models\HasSubject;

/**
 * Trait HasSubjectRepositoryTrait
 * @package Marktic\Crm\AbstractBase\Models\HasSubject
 */
trait HasSubjectRepositoryTrait
{
    /**
     * Get the SubjectRecord relation
     * 
     * @return mixed
     */
    public function subjectRecord()
    {
        return $this->morphTo('subject');
    }
}
