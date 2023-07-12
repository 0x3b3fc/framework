<?php

namespace Hannwork\Session;

class Session
{
    /**
     * Session constructor
     * @return void
     * */
    private function __construct()
    {
    }

    /**
     * Session start
     * @return void
     * */
    public static function start()
    {
        if (!session_id()) {
            ini_set('session.use_only_cookies', 1);
            session_start();
        }
    }

    /**
     * set new session
     * @param string $key
     * @param string $value
     * @return string $value
     * */

    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
        return $value;
    }

    /**
     * check if session has key
     * @param string $key
     * @return bool
     * */

    public static function has($key)
    {
        return isset($_SESSION[$key]);
    }

    /**
     * Get session by given key
     * @param string $key
     * @return mixed
     *
     * */
    public static function get($key)
    {
        return static::has($key) ? $_SESSION[$key] : null;
    }

    /**
     * remove session by given key
     * @param string $key
     * @return void
     *
     * */
    public static function remove($key)
    {
        unset($_SESSION[$key]);
    }

    /**
     * return all sessions
     * @return array
     * */
    public static function all()
    {
        return $_SESSION;
    }

    /**
     * Destroy all session
     * @return void
     * */

    public static function destroy()
    {
        foreach (static::all() as $key => $value) {
            static::remove($key);
        }
    }

    /**
     * Get flash session
     * @params string $key
     * @return $value
     * */
    public static function flash($key)
    {
        $value = null;
        if (static::has($key)) {
            $value = static::get($key);
            static::remove($key);
        }
        return $value;
    }
}