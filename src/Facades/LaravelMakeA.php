<?php

namespace UseTheFork\LaravelMakeA\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \UseTheFork\LaravelMakeA\LaravelMakeA
 */
class LaravelMakeA extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \UseTheFork\LaravelMakeA\LaravelMakeA::class;
    }
}
