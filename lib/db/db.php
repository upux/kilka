<?php

// Using Medoo namespace
use Medoo\Medoo;

function db(){

    $db = new Medoo([
        // required
        'database_type' => 'mysql',
        'database_name' => config('db')['db_database'],
        'server' => config('db')['db_host'],
        'username' => config('db')['db_user'],
        'password' => config('db')['db_password'],

        // [optional]
        'charset' => 'utf8',
        'collation' => 'utf8_general_ci'
    ]);

    return $db;
}