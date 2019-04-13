<?php
/**
 * Created by PhpStorm.
 * User: ashkanfekri
 * Date: 28/03/2019
 * Time: 02:41 AM
 */

class post
{
    public static function index(){
        $posts = db()->select('posts', '*', ["ORDER" => ["posts.id" => "DESC"],] );
        return view('blog.index', ['posts'=>$posts]);
    }

    public static function show($slug){
        $post = db()->get('posts','*',['slug[=]'=>$slug]);
        return view('blog.show', ['post'=>$post]);
    }

    public static function create(){
        return view('admin.post.create');
    }

    public static function store(){
        $title = $_POST['title'];
        $slug = slug($title);
        $body = $_POST['body'];


        $file = $_FILES[ "image" ];

        $destination = __DIR__ . '/../../public/img/';
        $filename = basename( $file['name'] );
        move_uploaded_file( $file[ 'tmp_name' ], $destination . $filename );




        $file = $_FILES[ "image" ];

        $destination = __DIR__ . '/../../public/img/';
        $filename = basename( $file[ 'name' ] );
        move_uploaded_file( $file[ 'tmp_name' ], $destination . $filename );

        $image =  $filename;



        $date = date("Y-m-d H:i:s");


        db()->insert('posts',[
            'userid' => 1,
           'title' => $title,
           'slug' => $slug,
           'image' => $image,
           'body' => $body,
            'create_date'=> $date
        ]);
    }
}