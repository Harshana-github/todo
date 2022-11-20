<?php

namespace domain\Facades;

use domain\Services\ImagesServices;
use Illuminate\Support\Facades\Facade;


class ImagesFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ImagesServices::class;
    }
}
