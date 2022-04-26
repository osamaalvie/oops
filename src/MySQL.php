<?php

namespace App;
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 4/23/2022
 * Time: 4:07 PM
 */

class MySQL implements DBContract
{
    public function connection()
    {
        return 'MySQL Connection';
    }
}