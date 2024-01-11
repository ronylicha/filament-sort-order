<?php

namespace flexicom\FilamentSortOrder\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \flexicom\FilamentSortOrder\FilamentSortOrder
 */
class FilamentSortOrder extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \flexicom\FilamentSortOrder\FilamentSortOrder::class;
    }
}
