<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Al Kausar',
            'email' => 'alka@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'Antonio',
            'email' => 'antonio@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'tittle' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid minima quidem culpa. Voluptate, blanditiis neque, nesciunt tempore eligendi voluptates explicabo dolores debitis fugit laboriosam',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptatum omnis numquam error minima quidem? Aut, sapiente. Voluptate, odio accusantium distinctio, laborum ipsam corrupti ex officia nostrum sunt commodi molestiae magnam doloribus. Hic asperiores aperiam natus reiciendis corporis rem dolorum soluta aut! Ullam alias odit, molestias reprehenderit excepturi in dicta.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam natus possimus eum necessitatibus quaerat vel at laborum voluptatibus. Omnis officia animi labore nam harum vel doloribus aspernatur, quis eveniet nihil praesentium voluptates, earum dignissimos itaque voluptatum sed atque iusto officiis aperiam nisi autem culpa quasi. Eveniet soluta doloribus quasi maxime.</p>',
            'category_id' => 1
        ]);

        Post::create([
            'tittle' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid minima quidem culpa. Voluptate, blanditiis neque, nesciunt tempore eligendi voluptates explicabo dolores debitis fugit laboriosam',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptatum omnis numquam error minima quidem? Aut, sapiente. Voluptate, odio accusantium distinctio, laborum ipsam corrupti ex officia nostrum sunt commodi molestiae magnam doloribus. Hic asperiores aperiam natus reiciendis corporis rem dolorum soluta aut! Ullam alias odit, molestias reprehenderit excepturi in dicta.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam natus possimus eum necessitatibus quaerat vel at laborum voluptatibus. Omnis officia animi labore nam harum vel doloribus aspernatur, quis eveniet nihil praesentium voluptates, earum dignissimos itaque voluptatum sed atque iusto officiis aperiam nisi autem culpa quasi. Eveniet soluta doloribus quasi maxime.</p>',
            'category_id' => 1
        ]);

        Post::create([
            'tittle' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid minima quidem culpa. Voluptate, blanditiis neque, nesciunt tempore eligendi voluptates explicabo dolores debitis fugit laboriosam',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptatum omnis numquam error minima quidem? Aut, sapiente. Voluptate, odio accusantium distinctio, laborum ipsam corrupti ex officia nostrum sunt commodi molestiae magnam doloribus. Hic asperiores aperiam natus reiciendis corporis rem dolorum soluta aut! Ullam alias odit, molestias reprehenderit excepturi in dicta.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam natus possimus eum necessitatibus quaerat vel at laborum voluptatibus. Omnis officia animi labore nam harum vel doloribus aspernatur, quis eveniet nihil praesentium voluptates, earum dignissimos itaque voluptatum sed atque iusto officiis aperiam nisi autem culpa quasi. Eveniet soluta doloribus quasi maxime.</p>',
            'category_id' => 2
        ]);

        Post::create([
            'tittle' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid minima quidem culpa. Voluptate, blanditiis neque, nesciunt tempore eligendi voluptates explicabo dolores debitis fugit laboriosam',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptatum omnis numquam error minima quidem? Aut, sapiente. Voluptate, odio accusantium distinctio, laborum ipsam corrupti ex officia nostrum sunt commodi molestiae magnam doloribus. Hic asperiores aperiam natus reiciendis corporis rem dolorum soluta aut! Ullam alias odit, molestias reprehenderit excepturi in dicta.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam natus possimus eum necessitatibus quaerat vel at laborum voluptatibus. Omnis officia animi labore nam harum vel doloribus aspernatur, quis eveniet nihil praesentium voluptates, earum dignissimos itaque voluptatum sed atque iusto officiis aperiam nisi autem culpa quasi. Eveniet soluta doloribus quasi maxime.</p>',
            'category_id' => 2
        ]);
    }
}
