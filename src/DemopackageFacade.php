<?php
namespace Mikewazovzky\Demopackage;

use Illuminate\Support\Facades\Facade;

class DemoFacade extends Facade
{
    protected static function getFacadeAccessor() { 
        return 'mikewazovzky-demo';
    }
}