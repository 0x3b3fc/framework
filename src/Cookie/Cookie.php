<?php

namespace Hannwork\Cookie;

class Cookie
{
    /**
     * Cookie constructor
     * @return void
     * */
    private function __construct()
    {
    }

    /**
     * set new Cookie
     * @param string $key
     * @param string $value
     * @return string $value
     * */

    public static function set($key, $value)
    {
        $expired = time() + (1 * 365 * 24 * 60 * 60);
        setcookie($key, $value, $expired, '/', '', false, true);
        return $value;
    }

    /**
     * check if cookie has key
     * @param string $key
     * @return bool
     * */

    public static function has($key)
    {
        return isset($_COOKIE[$key]);
    }

    /**
     * Get cookie by given key
     * @param string $key
     * @return mixed
     *
     * */
    public static function get($key)
    {
        return static::has($key) ? $_COOKIE[$key] : null;
    }

    /**
     * remove cookie by given key
     * @param string $key
     * @return void
     *
     * */
    public static function remove($key)
    {
        unset($_COOKIE[$key]);
        setcookie($key, null, '-1', '/');
    }

    /**
     * return all cookies
     * @return array
     * */
    public static function all()
    {
        return $_COOKIE;
    }

    /**
     * Destroy all cookies
     * @return void
     * */

    public static function destroy()
    {
        foreach (static::all() as $key => $value) {
            static::remove($key);
        }
    }


}