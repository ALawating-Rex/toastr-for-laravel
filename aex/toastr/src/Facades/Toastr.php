<?php
namespace Aex\Toastr\Facades;

use Illuminate\Support\Facades\Facade;

class Toastr extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'toastr';
    }
}