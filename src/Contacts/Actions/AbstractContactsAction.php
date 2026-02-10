<?php

declare(strict_types=1);

namespace Marktic\Crm\Contacts\Actions;

use Bytic\Actions\Action;
use Bytic\Actions\Behaviours\Entities\HasRepository;
use Marktic\Crm\Utility\CrmModels;
use Nip\Records\AbstractModels\RecordManager;

abstract class AbstractContactsAction extends Action
{
    use HasRepository;

    protected function generateRepository(): RecordManager
    {
        return CrmModels::contacts();
    }
}