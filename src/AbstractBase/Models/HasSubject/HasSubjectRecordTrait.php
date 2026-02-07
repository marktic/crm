<?php

declare(strict_types=1);

namespace Marktic\Crm\AbstractBase\Models\HasSubject;

use Nip\Records\Record;

/**
 * Trait HasSubjectRecordTrait
 * @package Marktic\Crm\AbstractBase\Models\HasSubject
 *
 * @method Record getSubjectType
 */
trait HasSubjectRecordTrait
{
    public string|int|null $subject_id;
    public string|null $subject_type;

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
        $this->subject_type = $record->getManager()->getMorphName();
    }
}
