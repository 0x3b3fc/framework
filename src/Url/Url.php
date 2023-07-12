<?php

namespace Hannwork\Url;

use Hannwork\Http\Request;
use Hannwork\Http\Server;

class Url
{
    /**
     * Url Constructor
     *
     * */
    private function __construct()
    {
    }

    /**
     * Get path
     * @param string $path
     * @return string $path
     * */
    public static function path($path)
    {
        return Request::baseUrl() . '/' . trim($path, '/');
    }

    /**
     * previous url
     * @return string
     * */
    public static function previous()
    {
        return Server::get('HTTP_REFERER');
    }

    /**
     * redirect to page
     * @param string $path
     * @return void
     * */
    public static function redirect($path)
    {
        header('location: ' . $path);
        exit();
    }
}