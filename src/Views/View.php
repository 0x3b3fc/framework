<?php

namespace Hannwork\Views;

use Hannwork\File\File;
use Hannwork\Session\Session;
use Jenssegers\Blade\Blade;

class View
{
    /**
     * View Constructor
     * */
    private function __construct()
    {
    }

    public static function render($path, $data = [])
    {
        $errors = Session::flash('errors');
        $old = Session::flash('old');
        $data = array_merge($data, ['errors' => $errors,'old'=>$old]);
        return static::bladeRender($path, $data);
    }

    /**
     * render views using blade engine
     * @param string $path
     * @param array $data
     * @return string
     * */
    public static function bladeRender($path, $data = [])
    {
        $blade = new Blade(File::path('views'), File::path('storage/cache'));

        return $blade->make($path, $data)->render();
    }
}