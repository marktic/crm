<?php

declare(strict_types=1);

namespace Marktic\Crm\AbstractBase\Models\HasSubject;

use Nip\Records\Record;

/**
 * Trait HasSubjectRecordTrait
 * @package Marktic\Crm\AbstractBase\Models\HasSubject
 *
 * @method Record getSubject
 */
trait HasSubjectRecordTrait
{
    public string|int|null $subject_id;
    public string|null $subject;

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
     * @param Record $record
     */
    public function populateFromSubject($record)
    {
        $this->subject_id = $record->id;
        $this->subject = $record->getManager()->getMorphName();
    }
}
