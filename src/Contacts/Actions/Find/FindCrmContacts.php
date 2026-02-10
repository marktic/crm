<?php

declare(strict_types=1);

namespace Marktic\Crm\Contacts\Actions\Find;

use Marktic\Crm\AbstractBase\Actions\Find\SubjectTenantFindRecords;
use Marktic\Crm\Contacts\Actions\AbstractContactsAction;

/**
 */
class FindCrmContacts extends AbstractContactsAction
{
    use SubjectTenantFindRecords;
}
