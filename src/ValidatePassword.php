<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 4/27/2022
 * Time: 5:45 AM
 */

namespace App;


class ValidatePassword
{
    const MAX_LENGTH = 20;
    const MIN_LENGTH = 6;

    public function validLength($password)
    {
        $length = strlen($password);
        return $length >= self::MIN_LENGTH && $length <= self::MIN_LENGTH;
    }
}