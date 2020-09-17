<?php

namespace Datarunes\Ivy\Facades;

use Illuminate\Support\Facades\Facade;

class Ivy extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ivy';
    }
}
