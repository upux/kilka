<?php

$router = new Buki\Router();


$router->get('/', function (){
        controller('post', 'index');
    });

$router->get('/blog/post/{*}', function ($slug){
        controller('post', 'show', $slug);
    });

    //admin

$router->group('admin', function ($admin){

    $admin->get('/', function (){
        controller('admin','index');
    });

    $admin->get('/post/create', function (){
        controller('post', 'create');
    });

    $admin->post('/post', function (){
        controller('post', 'store');
    });

});


