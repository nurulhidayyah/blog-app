<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Nurul Hidayah',
        'email' => 'nurulhidayyah45@gmail.com',
        'image' => 'Nurul_Hidayah.png'
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
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
    return view('posts', [
        'title' => 'Posts',
        'posts' => $blog_posts
    ]);
});

Route::get('/posts/{slug}', function($slug) {
    $blog_posts = [
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

    $new_posts = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_posts = $post;
        }
    }
    return view('post', [
        'title' => 'Single Post',
        'post' => $new_posts
    ]);
});
