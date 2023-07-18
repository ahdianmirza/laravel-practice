<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Ahdian Mirza",
        "email" => "ahdianmirza@gmail.my.id",
        "image" => "farhan.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
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

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// Halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
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

    $new_post = [];

    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});