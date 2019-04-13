<?php
/**
 * Created by PhpStorm.
 * User: ashkanfekri
 * Date: 01/04/2019
 * Time: 08:49 AM
 */

class admin
{
    public static function index(){
        $count_post = db()->count('posts');
        $count_category = db()->count('categorys');
        $count_user = db()->count('Users');

        return view('admin.index', [
            'count_post' => $count_post,
            'count_user' => $count_user,
            'count_category' => $count_category
        ]);
    }
}