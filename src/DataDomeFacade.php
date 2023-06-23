<?php

namespace Astrogoat\DataDome;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\DataDome\DataDome
 */
class DataDomeFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'data-dome';
    }
}
