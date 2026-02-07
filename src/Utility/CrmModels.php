<?php

declare(strict_types=1);

namespace Marktic\Crm\Utility;

use ByTIC\PackageBase\Utility\ModelFinder;
use Marktic\Crm\Activities\Models\Activities;
use Marktic\Crm\Addresses\Models\Addresses;
use Marktic\Crm\Contacts\Models\Contacts;
use Marktic\Crm\Contracts\Models\Contracts;
use Marktic\Crm\CrmServiceProvider;
use Marktic\Crm\LegalProfiles\Models\LegalProfiles;

/**
 * Class CrmModels
 * @package Marktic\Crm\Utility
 */
class CrmModels extends ModelFinder
{
    public const CONTACTS = 'contacts';
    public const ADDRESSES = 'addresses';
    public const CONTRACTS = 'contracts';
    public const ACTIVITIES = 'activities';
    public const LEGAL_PROFILES = 'legalProfiles';

    public static function contacts()
    {
        return static::getModels(self::CONTACTS, Contacts::class);
    }

    /**
     * @return string
     */
    public static function contactsClass(): string
    {
        return Contacts::class;
    }

    public static function addresses()
    {
        return static::getModels(self::ADDRESSES, Addresses::class);
    }

    /**
     * @return string
     */
    public static function addressesClass(): string
    {
        return Addresses::class;
    }

    public static function contracts()
    {
        return static::getModels(self::CONTRACTS, Contracts::class);
    }

    /**
     * @return string
     */
    public static function contractsClass(): string
    {
        return Contracts::class;
    }

    public static function activities()
    {
        return static::getModels(self::ACTIVITIES, Activities::class);
    }

    /**
     * @return string
     */
    public static function activitiesClass(): string
    {
        return Activities::class;
    }

    public static function legalProfiles()
    {
        return static::getModels(self::LEGAL_PROFILES, LegalProfiles::class);
    }

    /**
     * @return string
     */
    public static function legalProfilesClass(): string
    {
        return LegalProfiles::class;
    }

    protected static function packageName(): string
    {
        return CrmServiceProvider::NAME;
    }
}
