<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

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
        // User::create([
        //   'name' => 'M. Ananda Rizky Audriansyah',
        //   'email' => 'anandarizky166@gmail.com',
        //   'password' => bcrypt('1234')
        // ]);

        // User::create([
        //   'name' => 'Dewi Noviastuti',
        //   'email' => 'dewinov@gmail.com',
        //   'password' => bcrypt('1234')
        // ]);

        User::factory(4)->create();

        Category::create([
          'name' => 'Pemrograman Data',
          'slug' => 'pemrograman-data'
        ]);

        Category::create([
          'name' => 'Pemrograman Internet',
          'slug' => 'pemrograman-internet'
        ]);

        Category::create([
          'name' => 'Web Design',
          'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //   'tittle' => 'Macam-macam operator',
        //   'slug' => 'macam-macam-operator',
        //   'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium consequuntur fuga nisi at, delectus similique, sapiente repellat, ratione sequi ipsa maxime rerum esse praesentium dolores perferendis labore distinctio facere!',
        //   'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium consequuntur fuga nisi at, delectus similique, sapiente repellat, ratione sequi ipsa maxime rerum esse praesentium dolores perferendis labore distinctio facere!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium consequuntur fuga nisi at, delectus similique, sapiente repellat, ratione sequi ipsa maxime rerum esse praesentium dolores perferendis labore distinctio facere! Assumenda reiciendis perferendis magnam, ipsam cupiditate officia doloremque placeat enim molestiae id nobis earum velit rerum exercitationem, odio voluptas architecto, dolor voluptate ea dignissimos.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium consequuntur fuga nisi at, delectus similique, sapiente repellat, ratione sequi ipsa maxime rerum esse praesentium dolores perferendis labore distinctio facere! Assumenda reiciendis perferendis magnam, ipsam cupiditate officia doloremque placeat enim molestiae id nobis earum velit rerum exercitationem, odio voluptas architecto, dolor voluptate ea dignissimos.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium consequuntur fuga nisi at, delectus similique, sapiente repellat, ratione sequi ipsa maxime rerum esse praesentium dolores perferendis labore distinctio facere! Assumenda reiciendis perferendis magnam, ipsam cupiditate officia doloremque placeat enim molestiae id nobis earum velit rerum exercitationem, odio voluptas architecto, dolor voluptate ea dignissimos. Quaerat, ratione ex. Tempora, eveniet eaque animi voluptatum enim fugit! Rem, nam molestias ea, labore in asperiores omnis deleniti possimus maxime quibusdam ab, dignissimos provident harum.</p>',
        //   'category_id' => '1',
        //   'user_id' => '1'
        // ]); 13066492

        // Post::create([
        //   'tittle' => 'Dasar TCP/IP',
        //   'slug' => 'dasar-tcp-ip',
        //   'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium consequuntur fuga nisi at, delectus similique, sapiente repellat, ratione sequi ipsa maxime rerum esse praesentium dolores perferendis labore distinctio facere!',
        //   'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium consequuntur fuga nisi at, delectus similique, sapiente repellat, ratione sequi ipsa maxime rerum esse praesentium dolores perferendis labore distinctio facere!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium consequuntur fuga nisi at, delectus similique, sapiente repellat, ratione sequi ipsa maxime rerum esse praesentium dolores perferendis labore distinctio facere! Assumenda reiciendis perferendis magnam, ipsam cupiditate officia doloremque placeat enim molestiae id nobis earum velit rerum exercitationem, odio voluptas architecto, dolor voluptate ea dignissimos.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium consequuntur fuga nisi at, delectus similique, sapiente repellat, ratione sequi ipsa maxime rerum esse praesentium dolores perferendis labore distinctio facere! Assumenda reiciendis perferendis magnam, ipsam cupiditate officia doloremque placeat enim molestiae id nobis earum velit rerum exercitationem, odio voluptas architecto, dolor voluptate ea dignissimos.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium consequuntur fuga nisi at, delectus similique, sapiente repellat, ratione sequi ipsa maxime rerum esse praesentium dolores perferendis labore distinctio facere! Assumenda reiciendis perferendis magnam, ipsam cupiditate officia doloremque placeat enim molestiae id nobis earum velit rerum exercitationem, odio voluptas architecto, dolor voluptate ea dignissimos. Quaerat, ratione ex. Tempora, eveniet eaque animi voluptatum enim fugit! Rem, nam molestias ea, labore in asperiores omnis deleniti possimus maxime quibusdam ab, dignissimos provident harum.</p>',
        //   'category_id' => '2',
        //   'user_id' => '1'
        // ]);

        // Post::create([
        //   'tittle' => 'HTML dan CSS',
        //   'slug' => 'html-dan-css',
        //   'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium consequuntur fuga nisi at, delectus similique, sapiente repellat, ratione sequi ipsa maxime rerum esse praesentium dolores perferendis labore distinctio facere!',
        //   'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium consequuntur fuga nisi at, delectus similique, sapiente repellat, ratione sequi ipsa maxime rerum esse praesentium dolores perferendis labore distinctio facere!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium consequuntur fuga nisi at, delectus similique, sapiente repellat, ratione sequi ipsa maxime rerum esse praesentium dolores perferendis labore distinctio facere! Assumenda reiciendis perferendis magnam, ipsam cupiditate officia doloremque placeat enim molestiae id nobis earum velit rerum exercitationem, odio voluptas architecto, dolor voluptate ea dignissimos.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium consequuntur fuga nisi at, delectus similique, sapiente repellat, ratione sequi ipsa maxime rerum esse praesentium dolores perferendis labore distinctio facere! Assumenda reiciendis perferendis magnam, ipsam cupiditate officia doloremque placeat enim molestiae id nobis earum velit rerum exercitationem, odio voluptas architecto, dolor voluptate ea dignissimos.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium consequuntur fuga nisi at, delectus similique, sapiente repellat, ratione sequi ipsa maxime rerum esse praesentium dolores perferendis labore distinctio facere! Assumenda reiciendis perferendis magnam, ipsam cupiditate officia doloremque placeat enim molestiae id nobis earum velit rerum exercitationem, odio voluptas architecto, dolor voluptate ea dignissimos. Quaerat, ratione ex. Tempora, eveniet eaque animi voluptatum enim fugit! Rem, nam molestias ea, labore in asperiores omnis deleniti possimus maxime quibusdam ab, dignissimos provident harum.</p>',
        //   'category_id' => '3',
        //   'user_id' => '1'
        // ]);

        // Post::create([
        //   'tittle' => 'Belajar JavaScript',
        //   'slug' => 'belajar-javascript',
        //   'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium consequuntur fuga nisi at, delectus similique, sapiente repellat, ratione sequi ipsa maxime rerum esse praesentium dolores perferendis labore distinctio facere!',
        //   'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium consequuntur fuga nisi at, delectus similique, sapiente repellat, ratione sequi ipsa maxime rerum esse praesentium dolores perferendis labore distinctio facere!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium consequuntur fuga nisi at, delectus similique, sapiente repellat, ratione sequi ipsa maxime rerum esse praesentium dolores perferendis labore distinctio facere! Assumenda reiciendis perferendis magnam, ipsam cupiditate officia doloremque placeat enim molestiae id nobis earum velit rerum exercitationem, odio voluptas architecto, dolor voluptate ea dignissimos.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium consequuntur fuga nisi at, delectus similique, sapiente repellat, ratione sequi ipsa maxime rerum esse praesentium dolores perferendis labore distinctio facere! Assumenda reiciendis perferendis magnam, ipsam cupiditate officia doloremque placeat enim molestiae id nobis earum velit rerum exercitationem, odio voluptas architecto, dolor voluptate ea dignissimos.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium consequuntur fuga nisi at, delectus similique, sapiente repellat, ratione sequi ipsa maxime rerum esse praesentium dolores perferendis labore distinctio facere! Assumenda reiciendis perferendis magnam, ipsam cupiditate officia doloremque placeat enim molestiae id nobis earum velit rerum exercitationem, odio voluptas architecto, dolor voluptate ea dignissimos. Quaerat, ratione ex. Tempora, eveniet eaque animi voluptatum enim fugit! Rem, nam molestias ea, labore in asperiores omnis deleniti possimus maxime quibusdam ab, dignissimos provident harum.</p>',
        //   'category_id' => '3',
        //   'user_id' => '2'
        // ]);
    }
}
