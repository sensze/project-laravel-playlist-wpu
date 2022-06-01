<?php

namespace App\Models;

class Posts
{
    static $blog_posts = [
        [
            "judul" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ifku Syoba",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione consectetur laboriosam, vel ex maxime ipsum vitae voluptas est minima corporis cumque ea dolorem mollitia necessitatibus nihil earum doloribus accusantium nam natus beatae fugit expedita deserunt nobis? Iusto rem tempora quia aspernatur odio, modi ratione saepe cumque similique vero eum obcaecati? Sit reiciendis corporis aspernatur nostrum blanditiis, non ea possimus enim architecto, quis consequuntur aliquid incidunt ex soluta dolor recusandae! Architecto suscipit labore rem explicabo ex temporibus quae ratione corporis nobis."
        ],
        [
            "judul" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Agus Ari",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione consectetur laboriosam, vel ex maxime ipsum vitae voluptas est minima corporis cumque ea dolorem mollitia necessitatibus nihil earum doloribus accusantium nam natus beatae fugit expedita deserunt nobis? Iusto rem tempora quia aspernatur odio, modi ratione saepe cumque similique vero eum obcaecati? Sit reiciendis corporis aspernatur nostrum blanditiis, non ea possimus enim architecto, quis consequuntur aliquid incidunt ex soluta dolor recusandae! Architecto suscipit labore rem explicabo ex temporibus quae ratione corporis nobis."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug' , $slug);
    }
}
