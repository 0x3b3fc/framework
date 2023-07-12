<?php

/**
 * View render
 * @param string $path
 * @param array $data
 * @return mixed
 */
if (!function_exists('view')) {
    function view($path, $data = [])
    {
        return \Hannwork\Views\View::render($path, $data);
    }
}

/**
 * Request get
 * @param string $key
 * @return mixed
 */
if (!function_exists('request')) {
    function request($key)
    {
        return \Hannwork\Http\Request::value($key);
    }
}
/**
 * Redirect get
 * @param string $path
 * @return void
 */
if (!function_exists('redirect')) {
    function redirect($path)
    {
        return \Hannwork\Url\Url::redirect($path);
    }
}

/**
 * Previous get
 * @return mixed
 */
if (!function_exists('previous')) {
    function previous()
    {
        return \Hannwork\Url\Url::previous();
    }
}

/**
 * Url Path
 * @param string $path
 * @return mixed
 */
if (!function_exists('url')) {
    function url($path)
    {
        return \Hannwork\Url\Url::path($path);
    }
}

/**
 * Asset Path
 * @param string $path
 * @return mixed
 */
if (!function_exists('asset')) {
    function asset($path)
    {
        return \Hannwork\Url\Url::path($path);
    }
}

/**
 * Dump and die
 * @param string $data
 * @return void
 */
if (!function_exists('dd')) {
    function dd($data)
    {
        echo "<pre>";
        if (is_string($data)) {
            echo $data;
        } else {
            print_r($data);
        }
        echo "</pre>";
        die();
    }
}

/**
 * Get session data
 * @param string $key
 * @return string $data
 */
if (!function_exists('session')) {
    function session($key)
    {
        return \Hannwork\Session\session::get($key);
    }
}

/**
 * Get session flash data
 * @param string $key
 * @return string $data
 */
if (!function_exists('flash')) {
    function flash($key)
    {
        return \Hannwork\Session\session::flash($key);
    }
}

/**
 * show pagination links
 * @param string $current_page
 * @param string $pages
 * @return string
 */
if (!function_exists('links')) {
    function links($current_page, $pages)
    {
        return \Hannwork\Database\Database::links($current_page, $pages);
    }
}

/**
 * Table Auth
 * @param string $table
 * @return string
 */
if (!function_exists('auth')) {
    function auth($table)
    {
        $auth = \Hannwork\Session\Session::get($table) ?: \Hannwork\Cookie\Cookie::get($table);
        return \Hannwork\Database\Database::table($table)->where('id', '=', $auth)->first();
    }
}