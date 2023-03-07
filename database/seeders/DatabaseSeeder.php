<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Nurul Hidayah',
        //     'email' => 'nurulhidayyah45@gmail.com',
        //     'password' => Hash::make('12345')
        // ]);
        // User::create([
        //     'name' => 'Paik Hidayah',
        //     'email' => 'paikhidayah@gmail.com',
        //     'password' => Hash::make('12345')
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis architecto totam eum',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis architecto totam eum. Blanditiis dolor atque molestiae ipsum harum expedita officia praesentium id. Officia cumque illum iste dolor minima laborum, veniam esse commodi nemo cupiditate, praesentium aut fuga perspiciatis atque delectus nisi consequuntur sequi incidunt, voluptatibus beatae sapiente sit.</p><p>Officia odit ipsam sapiente totam reiciendis? Eveniet quis labore ducimus numquam sit debitis, fugiat quidem. Distinctio architecto incidunt voluptatum accusamus, velit voluptate rerum tempore consequatur repudiandae, dignissimos earum impedit, numquam rem ipsa. Qui nisi eum odio aperiam. Ut rem, maxime veniam facilis repudiandae sed ea repellendus sint ipsam ratione fuga optio nobis accusamus porro ab laborum, impedit dolor consectetur fugiat? Ipsum veniam accusantium sit at nam velit enim dolorem excepturi laboriosam.</p><p>Dicta odio libero eaque ut exercitationem sunt quae, modi rerum est, ab, aperiam explicabo nulla nostrum quos veniam quia doloribus. Voluptates, error! Harum dicta porro doloribus sed modi voluptatibus earum, hic ullam facilis magni autem! Tenetur eligendi sunt impedit consectetur numquam obcaecati ad facilis culpa vitae ut sequi quas, accusantium dicta. Corrupti tempora aut iusto fugit? Nesciunt mollitia aliquid maxime id omnis quis cupiditate vitae, repudiandae vel quod quasi ipsa in, aspernatur molestiae. Placeat deleniti doloremque et ea nemo libero sunt.</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis architecto totam eum. Blanditiis dolor atque molestiae ipsum harum expedita officia praesentium id.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis architecto totam eum. Blanditiis dolor atque molestiae ipsum harum expedita officia praesentium id. Officia cumque illum iste dolor minima laborum, veniam esse commodi nemo cupiditate, praesentium aut fuga perspiciatis atque delectus nisi consequuntur sequi incidunt, voluptatibus beatae sapiente sit.</p><p>Officia odit ipsam sapiente totam reiciendis? Eveniet quis labore ducimus numquam sit debitis, fugiat quidem. Distinctio architecto incidunt voluptatum accusamus, velit voluptate rerum tempore consequatur repudiandae, dignissimos earum impedit, numquam rem ipsa. Qui nisi eum odio aperiam. Ut rem, maxime veniam facilis repudiandae sed ea repellendus sint ipsam ratione fuga optio nobis accusamus porro ab laborum, impedit dolor consectetur fugiat? Ipsum veniam accusantium sit at nam velit enim dolorem excepturi laboriosam.</p><p>Dicta odio libero eaque ut exercitationem sunt quae, modi rerum est, ab, aperiam explicabo nulla nostrum quos veniam quia doloribus. Voluptates, error! Harum dicta porro doloribus sed modi voluptatibus earum, hic ullam facilis magni autem! Tenetur eligendi sunt impedit consectetur numquam obcaecati ad facilis culpa vitae ut sequi quas, accusantium dicta. Corrupti tempora aut iusto fugit? Nesciunt mollitia aliquid maxime id omnis quis cupiditate vitae, repudiandae vel quod quasi ipsa in, aspernatur molestiae. Placeat deleniti doloremque et ea nemo libero sunt.</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'category_id' => 3,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis architecto totam eum.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis architecto totam eum. Blanditiis dolor atque molestiae ipsum harum expedita officia praesentium id. Officia cumque illum iste dolor minima laborum, veniam esse commodi nemo cupiditate, praesentium aut fuga perspiciatis atque delectus nisi consequuntur sequi incidunt, voluptatibus beatae sapiente sit.</p><p>Officia odit ipsam sapiente totam reiciendis? Eveniet quis labore ducimus numquam sit debitis, fugiat quidem. Distinctio architecto incidunt voluptatum accusamus, velit voluptate rerum tempore consequatur repudiandae, dignissimos earum impedit, numquam rem ipsa. Qui nisi eum odio aperiam. Ut rem, maxime veniam facilis repudiandae sed ea repellendus sint ipsam ratione fuga optio nobis accusamus porro ab laborum, impedit dolor consectetur fugiat? Ipsum veniam accusantium sit at nam velit enim dolorem excepturi laboriosam.</p><p>Dicta odio libero eaque ut exercitationem sunt quae, modi rerum est, ab, aperiam explicabo nulla nostrum quos veniam quia doloribus. Voluptates, error! Harum dicta porro doloribus sed modi voluptatibus earum, hic ullam facilis magni autem! Tenetur eligendi sunt impedit consectetur numquam obcaecati ad facilis culpa vitae ut sequi quas, accusantium dicta. Corrupti tempora aut iusto fugit? Nesciunt mollitia aliquid maxime id omnis quis cupiditate vitae, repudiandae vel quod quasi ipsa in, aspernatur molestiae. Placeat deleniti doloremque et ea nemo libero sunt.</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'category_id' => 3,
        //     'user_id' => 2,
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis architecto totam eum.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis architecto totam eum. Blanditiis dolor atque molestiae ipsum harum expedita officia praesentium id. Officia cumque illum iste dolor minima laborum, veniam esse commodi nemo cupiditate, praesentium aut fuga perspiciatis atque delectus nisi consequuntur sequi incidunt, voluptatibus beatae sapiente sit.</p><p>Officia odit ipsam sapiente totam reiciendis? Eveniet quis labore ducimus numquam sit debitis, fugiat quidem. Distinctio architecto incidunt voluptatum accusamus, velit voluptate rerum tempore consequatur repudiandae, dignissimos earum impedit, numquam rem ipsa. Qui nisi eum odio aperiam. Ut rem, maxime veniam facilis repudiandae sed ea repellendus sint ipsam ratione fuga optio nobis accusamus porro ab laborum, impedit dolor consectetur fugiat? Ipsum veniam accusantium sit at nam velit enim dolorem excepturi laboriosam.</p><p>Dicta odio libero eaque ut exercitationem sunt quae, modi rerum est, ab, aperiam explicabo nulla nostrum quos veniam quia doloribus. Voluptates, error! Harum dicta porro doloribus sed modi voluptatibus earum, hic ullam facilis magni autem! Tenetur eligendi sunt impedit consectetur numquam obcaecati ad facilis culpa vitae ut sequi quas, accusantium dicta. Corrupti tempora aut iusto fugit? Nesciunt mollitia aliquid maxime id omnis quis cupiditate vitae, repudiandae vel quod quasi ipsa in, aspernatur molestiae. Placeat deleniti doloremque et ea nemo libero sunt.</p>'
        // ]);
        User::factory(3)->create();

        Post::factory(20)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
    }
}
