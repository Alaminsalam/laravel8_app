<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class Post
{
    private static $blog_post = [
        [
        "title" => "Judul Tulisan Pertama",
        "slug" => "judul-tulisan-pertama",
        "author" => "alamin Salam",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est eum hic in distinctio neque. Non sapiente, mollitia repellat facilis iure cum aliquam saepe ipsum excepturi reiciendis, dolore dignissimos, fugiat enim!
        "
    ],
    [
        "title" => "Judul Tulisan Kedua",
        "slug" => "judul-tulisan-kedua",
        "author" => "Alamin",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est eum hic in distinctio neque. Non sapiente, mollitia repellat facilis iure cum aliquam saepe ipsum excepturi reiciendis, dolore dignissimos, fugiat enim!"
    ]
    ];

    public static function all(){
        return collect(self::$blog_post);
    }

    public static function find($slug) {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug',$slug);
    }

}

