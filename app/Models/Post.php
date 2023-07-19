<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ahdian Mirza",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni hic, vitae eaque ducimus aperiam obcaecati eligendi minus reiciendis perspiciatis porro. Dolorum iste pariatur explicabo tempora assumenda alias architecto magni, autem, in, laboriosam ut molestias modi? Et ullam magnam culpa veritatis fugiat in nemo obcaecati esse ea modi consequuntur sed nam, blanditiis doloremque fugit sunt accusantium voluptatibus quia minus eius dolore id quos voluptate temporibus! Doloribus aliquam iure, optio, odit vel quas numquam nihil laboriosam itaque commodi cum molestias eius iusto?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Nurin Rahayu",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti dignissimos tenetur ipsum voluptates qui commodi facilis quam quia nam. Quis vel ab quae suscipit cumque at minima sint ratione magni dolor, eveniet totam porro error laudantium ipsa repellendus provident quod itaque placeat obcaecati quo rerum et asperiores. Molestiae soluta consequatur recusandae officia reprehenderit. Corrupti non fugit dicta aspernatur ad necessitatibus eius, sapiente possimus atque nisi culpa voluptas at quod, minima est deleniti assumenda, sequi quidem. Sequi nam nesciunt molestiae blanditiis ipsa, deleniti cumque? Officia quas facere officiis id. Eum modi optio cupiditate quo facere enim maxime hic voluptatibus sunt voluptatem."
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}