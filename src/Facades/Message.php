<?php
namespace mzakyalaydrus\message\Facades;

use Illuminate\Support\Facades\Facade;

class Message extends Facade{
    protected static function getFacadeAccessor()
    {
        return 'message';
    }
}