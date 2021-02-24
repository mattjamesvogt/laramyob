<?php

namespace Mattjamesvogt\Laramyob;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mattjamesvogt\Laramyob\Skeleton\SkeletonClass
 */
class LaramyobFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laramyob';
    }
}
