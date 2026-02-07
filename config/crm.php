<?php

return [
    /*
    |--------------------------------------------------------------------------
    | CRM Package Configuration
    |--------------------------------------------------------------------------
    |
    | This file contains the configuration for the CRM package.
    |
    */

    'models' => [
        'contacts' => \Marktic\Crm\Contacts\Models\Contacts::class,
        'addresses' => \Marktic\Crm\Addresses\Models\Addresses::class,
        'contracts' => \Marktic\Crm\Contracts\Models\Contracts::class,
    ],

    'tables' => [
        'contacts' => 'mkt_crm_contacts',
        'addresses' => 'mkt_crm_addresses',
        'contracts' => 'mkt_crm_contracts',
    ],
];
