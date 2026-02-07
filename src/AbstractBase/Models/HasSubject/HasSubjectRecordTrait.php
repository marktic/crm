<?php

declare(strict_types=1);

namespace Marktic\Crm\AbstractBase\Models\HasSubject;

/**
 * Trait HasSubjectRecordTrait
 * @package Marktic\Crm\AbstractBase\Models\HasSubject
 */
trait HasSubjectRecordTrait
{
    /**
     * @return int|null
     */
    public function getSubjectId(): ?int
    {
        return $this->subject_id;
    }

    /**
     * @param int $subjectId
     */
    public function setSubjectId(int $subjectId): void
    {
        $this->subject_id = $subjectId;
    }

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
