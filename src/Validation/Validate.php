<?php

namespace Hannwork\Validation;

use Hannwork\Http\Request;
use Hannwork\Session\Session;
use Hannwork\Url\Url;
use Rakit\Validation\Validator;

class Validate
{

    /**
     * Validation Constructor
     */
    private function __construct()
    {
    }

    /**
     * Validate Request
     * @param array $rules
     * @param bool $json
     * @return mixed
     */
    public static function validate($rules, $json)
    {
        $validator = new Validator;

        $validation = $validator->validate($_POST + $_FILES, $rules);

        // handling errors
        $errors = $validation->errors();
        if ($json) {
            return ['errors' => $errors->firstOfAll()];
        } else {
            Session::set('errors', $errors);
            Session::set('old', Request::all());
            return Url::redirect(Url::previous());
        }
    }

}