<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 4/23/2022
 * Time: 4:07 PM
 */
namespace App;

class MongoDB implements DBContract
{

    public function connection()
    {
        return 'MongoDB Connection';
    }
}