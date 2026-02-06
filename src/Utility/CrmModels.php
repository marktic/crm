<?php

declare(strict_types=1);

namespace Marktic\Crm\Utility;

use Marktic\Crm\Addresses\Models\Addresses;
use Marktic\Crm\Contacts\Models\Contacts;
use Marktic\Crm\Contracts\Models\Contracts;

/**
 * Class CrmModels
 * @package Marktic\Crm\Utility
 */
class CrmModels
{
    /**
     * @return string
     */
    public static function contactsClass(): string
    {
        return Contacts::class;
    }

    /**
     * @return string
     */
    public static function addressesClass(): string
    {
        return Addresses::class;
    }

    /**
     * @return string
     */
    public static function contractsClass(): string
    {
        return Contracts::class;
    }
}
