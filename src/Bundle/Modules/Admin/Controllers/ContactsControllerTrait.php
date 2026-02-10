<?php

declare(strict_types=1);

namespace Marktic\Crm\Bundle\Modules\Admin\Controllers;

use Marktic\Crm\Bundle\Modules\Admin\Controllers\Behaviours\HasSubjectControllerTrait;
use Marktic\Crm\Bundle\Modules\Admin\Forms\Contacts\DetailsForm;
use Marktic\Crm\Utility\CrmModels;

/**
 * Trait ContactsControllerTrait
 * @package Marktic\Crm\Bundle\Modules\Admin\Controllers
 */
trait ContactsControllerTrait
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
        return CrmModels::contactsClass();
    }
}
