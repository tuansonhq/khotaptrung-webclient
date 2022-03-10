<?php

namespace App\Library;

use Html;

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 11/18/2016
 * Time: 3:14 PM
 */
class HelpersDecode
{
    public static function DecodeJson($key, $data)
    {

        $objectJson = json_decode($data);
        if (isset($objectJson->$key)) {
            return $objectJson->$key;
        } else {
            return '';
        }

    }

}
