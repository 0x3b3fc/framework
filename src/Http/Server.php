<?php

namespace Hannwork\Http;
class Server
{
    /**
     * Server Constructor
     * */
    public function __construct()
    {
    }

    /**
     * check that server has key
     * @return bool
     * */
    public static function has($key)
    {
        return isset($_SERVER[$key]);
    }

    /**
     * Get value by given key
     * @param string $key
     * @return string $value
     */
    public static function get(string $key)
    {
        return static::has($key) ? $_SERVER[$key] : null;
    }

    /**
     * Get path info for path
     * @param string $path
     * @return array
     */
    public static function path_info(string $path)
    {
        return pathinfo($path);
    }

    /**
     * Get all server data
     * @return array
     */
    public static function all()
    {
        return $_SERVER;
    }
}