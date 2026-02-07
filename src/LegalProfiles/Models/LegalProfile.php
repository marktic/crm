<?php

declare(strict_types=1);

namespace Marktic\Crm\LegalProfiles\Models;

use Marktic\Crm\AbstractBase\Models\CrmRecord;
use Marktic\Crm\AbstractBase\Models\HasTenant\HasTenantRecordTrait;
use Marktic\Crm\AbstractBase\Models\HasSubject\HasSubjectRecordTrait;

/**
 * Class LegalProfile
 * @package Marktic\Crm\LegalProfiles\Models
 *
 * @property int $id
 * @property int $tenant_id
 * @property int $subject_id
 * @property string $fiscal_code
 * @property string $legal_representative
 * @property string $company_name
 * @property string $registration_number
 * @property string $vat_number
 * @property string $legal_form
 * @property string $notes
 * @property string $created_at
 * @property string $updated_at
 */
class LegalProfile extends CrmRecord
{
    use HasTenantRecordTrait;
    use HasSubjectRecordTrait;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->company_name ?? $this->fiscal_code ?? 'Legal Profile #' . $this->id;
    }

    /**
     * @return string|null
     */
    public function getFiscalCode(): ?string
    {
        return $this->fiscal_code;
    }

    /**
     * @return string|null
     */
    public function getLegalRepresentative(): ?string
    {
        return $this->legal_representative;
    }
}
