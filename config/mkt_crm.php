<?php

use Marktic\Crm\Addresses\Models\Addresses;
use Marktic\Crm\Contacts\Models\Contacts;
use Marktic\Crm\Contracts\Models\Contracts;

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
        'contacts' => Contacts::class,
        'addresses' => Addresses::class,
        'contracts' => Contracts::class,
    ],

    'tables' => [
        'contacts' => 'mkt_crm_contacts',
        'addresses' => 'mkt_crm_addresses',
        'contracts' => 'mkt_crm_contracts',
    ],
];
