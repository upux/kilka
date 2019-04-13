<?php
use Philo\Blade\Blade;
    function view($name, $data=[]){

        $views = __DIR__ . '/../../views';
        $cache = __DIR__ . '/../../storage/framework/cache';

        $blade = new Blade($views, $cache);
       	echo $blade->view()->make($name, $data)->render();

}