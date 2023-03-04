<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    private static $blog_posts = [
        [
            "title" => "Judul Postingan Pertama",
            "slug" => "judul-postingan-pertama",
            "author" => "Nurul Hidayah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus aperiam error necessitatibus sed eius odit voluptatum, vitae quo aspernatur sint inventore et debitis? A facere labore laudantium rerum error? Adipisci?"
        ],
        [
            "title" => "Judul Postingan Kedua",
            "slug" => "judul-postingan-kedua",
            "author" => "Paik Hidayah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium totam voluptatum ducimus voluptates nesciunt blanditiis porro ut temporibus doloremque nihil corporis optio consectetur nulla facilis eius deserunt veritatis accusantium dolorem in, repellendus ratione omnis fugit. Repudiandae officiis quis, dolore id ullam, quia consectetur, dicta quo ad reiciendis suscipit nemo error. Sunt repudiandae labore eligendi ullam dolor quidem deleniti, ipsum molestiae! Aliquid perferendis laborum minima repellendus commodi impedit iste maxime magni vero reprehenderit, sunt repudiandae sint! Fuga quis reprehenderit unde nihil omnis nemo excepturi possimus quibusdam cupiditate sit obcaecati repudiandae fugiat voluptate consequuntur modi ratione, repellendus dolore? Nemo dolorum error facere?"
        ]
    ];

    public static function semua()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::semua();

        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
