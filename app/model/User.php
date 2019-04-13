<?php
/**
 * Created by PhpStorm.
 * User: ashkanfekri
 * Date: 01/04/2019
 * Time: 03:08 PM
 */


class User extends auth
{
    protected $fillable = [
        'name', 'email', 'password',
    ];
}