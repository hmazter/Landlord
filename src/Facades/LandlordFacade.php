<?php

namespace AuraIsHere\Landlord\Facades;

use Illuminate\Support\Facades\Facade;

class LandlordFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'AuraIsHere\LaravelMultiTenant\TenantScope';
    }
}