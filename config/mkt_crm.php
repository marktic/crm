<?php

use Marktic\Crm\Addresses\Models\Addresses;
use Marktic\Crm\Contacts\Models\Contacts;
use Marktic\Crm\Contracts\Models\Contracts;
use Marktic\Crm\Utility\CrmModels;

/*
|--------------------------------------------------------------------------
| CRM Package Configuration
|--------------------------------------------------------------------------
|
| This file contains the configuration for the CRM package.
|
*/
return [
    'models' => [
        CrmModels::CONTACTS => Contacts::class,
        CrmModels::ADDRESSES => Addresses::class,
        CrmModels::CONTRACTS => Contracts::class,
    ],

    'tables' => [
        CrmModels::CONTACTS => Contacts::TABLE,
        CrmModels::ADDRESSES => Addresses::TABLE,
        CrmModels::CONTRACTS => Contacts::TABLE,
    ],
];
