<?php
/**
 * Created by PhpStorm.
 * User: ashkanfekri
 * Date: 28/03/2019
 * Time: 12:09 AM
 */


    function config($config){
        require __DIR__ . '/../../config/config.php';
        return $app[$config];

    }

