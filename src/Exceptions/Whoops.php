<?php

namespace Hannwork\Exceptions;

class Whoops
{
    /**
     * Whoops constructor
     * @return void
     * */
    private function __construct()
    {
    }

    /**
     * Handle Whoops Errors
     *
     * @return void
     * */
    public static function handle()
    {
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();
    }
}