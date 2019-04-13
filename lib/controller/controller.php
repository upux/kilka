<?php
/**
 * Created by PhpStorm.
 * User: ashkanfekri
 * Date: 28/03/2019
 * Time: 02:36 AM
 */

function controller($controller, $function, $var = null){
    require __DIR__ . '/../../app/controller/' . $controller . '.php';
    return $controller::$function($var);
}