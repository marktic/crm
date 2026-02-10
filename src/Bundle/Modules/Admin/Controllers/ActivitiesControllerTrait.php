<?php

declare(strict_types=1);

namespace Marktic\Crm\Bundle\Modules\Admin\Controllers;

use Marktic\Crm\Bundle\Modules\Admin\Controllers\Behaviours\HasSubjectControllerTrait;
use Marktic\Crm\Bundle\Modules\Admin\Forms\Activities\DetailsForm;
use Marktic\Crm\Utility\CrmModels;

/**
 * Trait ActivitiesControllerTrait
 * @package Marktic\Crm\Bundle\Modules\Admin\Controllers
 */
trait ActivitiesControllerTrait
{
    use AbstractCrmControllerTrait;
    use HasSubjectControllerTrait;

    protected function afterActionRedirect($type, $item)
    {
        $subject = $item->getSubject();
        $this->setAfterUrlFlash(
            $subject->getURL(),
            $subject->getManager()->getController(),
            ['after-' . $type]
        );
        parent::afterActionRedirect($type, $item);
    }

    protected function getModelFormClass($model, $action = null): string
    {
        return DetailsForm::class;
    }

    protected function generateModelName(): string
    {
        return CrmModels::activitiesClass();
    }
}
