<?php

namespace Hannwork\Bootstrap;

use Hannwork\Exceptions\Whoops;
use Hannwork\File\File;
use Hannwork\Http\Request;
use Hannwork\Http\Response;
use Hannwork\Router\Route;
use Hannwork\Session\Session;

class App
{
    /**
     * App constructor
     * @return void
     * */
    private function __construct()
    {
    }

    /**
     * Run the application
     * @return void
     * */
    public static function run()
    {
        // register whoops
        Whoops::handle();

        // start session
        Session::start();

        //handle the request
        Request::handle();

        //require all routes directory
        File::require_directory('routes');

        //handle the request
        $data = Route::handle();

        Response::output($data);
    }
}
