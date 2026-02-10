<?php

declare(strict_types=1);

namespace Marktic\Crm\Activities\Actions\Find;

use Marktic\Crm\AbstractBase\Actions\Find\SubjectTenantFindRecords;
use Marktic\Crm\Activities\Actions\AbstractActivitiesAction;

/**
 */
class FindCrmActivities extends AbstractActivitiesAction
{
    use SubjectTenantFindRecords;
}
