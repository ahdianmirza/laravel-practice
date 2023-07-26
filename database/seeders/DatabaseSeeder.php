<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::create([
        //     'name' => 'Ahdian Mirza',
        //     'email' => 'ahdianmirza@gmail.com',
        //     'password' => bcrypt(12345)
        // ]);

        // User::create([
        //     'name' => 'Nurin Rahayu',
        //     'email' => 'nurinrahayu@gmail.com',
        //     'password' => bcrypt(12345)
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Post Pertama',
        //     'slug' => 'judul-post-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit nihil iusto deserunt voluptatum reiciendis? Itaque velit unde inventore molestias voluptas fugit quod. Voluptas molestias laboriosam veritatis mollitia minus aspernatur iusto corrupti hic? Id officiis, cum sint sapiente enim sit illo recusandae, perspiciatis beatae exercitationem repellendus odio iure vitae ut.</p><p>Natus harum reprehenderit tempora praesentium, porro pariatur beatae aut deserunt aliquam doloribus neque eveniet vitae architecto iusto incidunt doloremque.</p><p>Hic dolor aspernatur ea molestiae obcaecati esse sint, quod velit nulla dolores doloremque porro blanditiis odio iste voluptas, at maiores incidunt sunt fugiat dignissimos eius nemo! Alias reiciendis nulla soluta delectus a!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Post Kedua',
        //     'slug' => 'judul-post-kedua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit nihil iusto deserunt voluptatum reiciendis?',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit nihil iusto deserunt voluptatum reiciendis? Itaque velit unde inventore molestias voluptas fugit quod. Voluptas molestias laboriosam veritatis mollitia minus aspernatur iusto corrupti hic? Id officiis, cum sint sapiente enim sit illo recusandae, perspiciatis beatae exercitationem repellendus odio iure vitae ut.</p><p>Natus harum reprehenderit tempora praesentium, porro pariatur beatae aut deserunt aliquam doloribus neque eveniet vitae architecto iusto incidunt doloremque.</p><p>Hic dolor aspernatur ea molestiae obcaecati esse sint, quod velit nulla dolores doloremque porro blanditiis odio iste voluptas, at maiores incidunt sunt fugiat dignissimos eius nemo! Alias reiciendis nulla soluta delectus a!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Post Ketiga',
        //     'slug' => 'judul-post-ketiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit nihil iusto deserunt voluptatum reiciendis? Itaque velit unde inventore molestias voluptas fugit quod.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit nihil iusto deserunt voluptatum reiciendis? Itaque velit unde inventore molestias voluptas fugit quod. Voluptas molestias laboriosam veritatis mollitia minus aspernatur iusto corrupti hic? Id officiis, cum sint sapiente enim sit illo recusandae, perspiciatis beatae exercitationem repellendus odio iure vitae ut.</p><p>Natus harum reprehenderit tempora praesentium, porro pariatur beatae aut deserunt aliquam doloribus neque eveniet vitae architecto iusto incidunt doloremque.</p><p>Hic dolor aspernatur ea molestiae obcaecati esse sint, quod velit nulla dolores doloremque porro blanditiis odio iste voluptas, at maiores incidunt sunt fugiat dignissimos eius nemo! Alias reiciendis nulla soluta delectus a!</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Post Keempat',
        //     'slug' => 'judul-post-keempat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit nihil iusto deserunt voluptatum reiciendis? Itaque velit unde inventore molestias voluptas fugit quod.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit nihil iusto deserunt voluptatum reiciendis? Itaque velit unde inventore molestias voluptas fugit quod. Voluptas molestias laboriosam veritatis mollitia minus aspernatur iusto corrupti hic? Id officiis, cum sint sapiente enim sit illo recusandae, perspiciatis beatae exercitationem repellendus odio iure vitae ut.</p><p>Natus harum reprehenderit tempora praesentium, porro pariatur beatae aut deserunt aliquam doloribus neque eveniet vitae architecto iusto incidunt doloremque.</p><p>Hic dolor aspernatur ea molestiae obcaecati esse sint, quod velit nulla dolores doloremque porro blanditiis odio iste voluptas, at maiores incidunt sunt fugiat dignissimos eius nemo! Alias reiciendis nulla soluta delectus a!</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Post Kelima',
        //     'slug' => 'judul-post-Kelima',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit nihil iusto deserunt voluptatum reiciendis? Itaque velit unde inventore molestias voluptas fugit quod.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit nihil iusto deserunt voluptatum reiciendis? Itaque velit unde inventore molestias voluptas fugit quod. Voluptas molestias laboriosam veritatis mollitia minus aspernatur iusto corrupti hic? Id officiis, cum sint sapiente enim sit illo recusandae, perspiciatis beatae exercitationem repellendus odio iure vitae ut.</p><p>Natus harum reprehenderit tempora praesentium, porro pariatur beatae aut deserunt aliquam doloribus neque eveniet vitae architecto iusto incidunt doloremque.</p><p>Hic dolor aspernatur ea molestiae obcaecati esse sint, quod velit nulla dolores doloremque porro blanditiis odio iste voluptas, at maiores incidunt sunt fugiat dignissimos eius nemo! Alias reiciendis nulla soluta delectus a!</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}