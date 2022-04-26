<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 4/23/2022
 * Time: 4:05 PM
 */
namespace App;
class DataBaseFactory
{
    public static function db(DBContract $contract)
    {
        return $contract->connection();
    }

}