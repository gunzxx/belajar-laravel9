<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Posts;
use App\Models\Categories;
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
        User::factory(5)->create();

        // User::create([
        //     'name' => 'Gunzxx',
        //     'email' => 'gunzxx@gmail.com',
        //     'password'=>bcrypt('123')
        // ]);

        // User::create([
        //     'name' => 'Sukma',
        //     'email' => 'suka@gmail.com',
        //     'password'=>bcrypt('123')
        // ]);
        
        Categories::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming'
        ]);
        
        Categories::create([
            'name'=>'Web Design',
            'slug'=>'web-design'
        ]);
        
        Categories::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);

        Posts::factory(20)->create();
        
        // Posts::create([
        //     'title'=>'Postingan Pertama',
        //     'categories_id'=>1,
        //     'user_id'=>1,
        //     'slug'=>'post-pertama',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil optio esse obcaecati,',
        //     'content'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil optio esse obcaecati, dicta nulla est beatae delectus vitae, facilis error eaque ab, in accusantium magnam eligendi provident deleniti! Ducimus illo quis, odit eveniet nihil dolores facilis rem veritatis earum! Dolorem atque saepe doloremque laboriosam sequi voluptate quisquam eligendi ipsum et assumenda. Saepe tenetur provident cum ipsum, fugit deleniti suscipit voluptates aliquam voluptate, magnam dolore neque aspernatur molestiae vitae maxime, ullam esse commodi cupiditate odio dolorum deserunt molestias repellat sunt. Voluptatem corporis rerum beatae sit labore dolorum possimus quas quidem ex facere, eum doloribus illo, perferendis hic dignissimos minus, incidunt magni repellat pariatur eaque consectetur? Ipsam odio repellendus, neque eum perspiciatis nesciunt debitis, sint beatae, ad dicta ex velit harum? Mollitia placeat ab hic dolorum corrupti, beatae dolore, consequuntur omnis tempora a necessitatibus ipsa exercitationem aliquam facilis totam voluptates inventore saepe explicabo qui nobis animi eligendi asperiores? Esse reprehenderit rem unde!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus nulla accusamus architecto aliquam harum excepturi temporibus molestias? Illum cum eius, tempora deserunt quam porro voluptatem maiores labore esse maxime accusantium cupiditate autem odio ipsa quae, hic natus! Unde, quae veniam! Laboriosam explicabo atque esse? Aliquam molestias numquam facere consequatur dicta blanditiis autem adipisci? Magnam, magni excepturi. Aut consectetur quidem aspernatur, unde numquam voluptas in, enim quae assumenda repellendus perspiciatis quo dicta obcaecati, a officiis distinctio adipisci? Dolor nostrum neque explicabo accusantium, dolorem alias eligendi, nobis perspiciatis maiores assumenda molestias obcaecati voluptatem distinctio libero pariatur? Corrupti, aliquam inventore, in dignissimos saepe corporis odit labore hic ullam repellendus debitis quos sunt? Officia praesentium doloribus dolore ipsum provident. Eaque excepturi placeat optio voluptate aliquam rerum consectetur molestias officia, unde maiores nobis asperiores iure in ex tenetur odit eius delectus et possimus veniam similique harum omnis dolorem. Aliquam, error vel. Reiciendis odit quasi aspernatur?</p>'
        // ]);
        
        // Posts::create([
        //     'title'=>'Postingan Kedua',
        //     'categories_id'=>2,
        //     'user_id'=>1,
        //     'slug'=>'post-kedua',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil optio esse obcaecati,',
        //     'content'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil optio esse obcaecati, dicta nulla est beatae delectus vitae, facilis error eaque ab, in accusantium magnam eligendi provident deleniti! Ducimus illo quis, odit eveniet nihil dolores facilis rem veritatis earum! Dolorem atque saepe doloremque laboriosam sequi voluptate quisquam eligendi ipsum et assumenda. Saepe tenetur provident cum ipsum, fugit deleniti suscipit voluptates aliquam voluptate, magnam dolore neque aspernatur molestiae vitae maxime, ullam esse commodi cupiditate odio dolorum deserunt molestias repellat sunt. Voluptatem corporis rerum beatae sit labore dolorum possimus quas quidem ex facere, eum doloribus illo, perferendis hic dignissimos minus, incidunt magni repellat pariatur eaque consectetur? Ipsam odio repellendus, neque eum perspiciatis nesciunt debitis, sint beatae, ad dicta ex velit harum? Mollitia placeat ab hic dolorum corrupti, beatae dolore, consequuntur omnis tempora a necessitatibus ipsa exercitationem aliquam facilis totam voluptates inventore saepe explicabo qui nobis animi eligendi asperiores? Esse reprehenderit rem unde!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus nulla accusamus architecto aliquam harum excepturi temporibus molestias? Illum cum eius, tempora deserunt quam porro voluptatem maiores labore esse maxime accusantium cupiditate autem odio ipsa quae, hic natus! Unde, quae veniam! Laboriosam explicabo atque esse? Aliquam molestias numquam facere consequatur dicta blanditiis autem adipisci? Magnam, magni excepturi. Aut consectetur quidem aspernatur, unde numquam voluptas in, enim quae assumenda repellendus perspiciatis quo dicta obcaecati, a officiis distinctio adipisci? Dolor nostrum neque explicabo accusantium, dolorem alias eligendi, nobis perspiciatis maiores assumenda molestias obcaecati voluptatem distinctio libero pariatur? Corrupti, aliquam inventore, in dignissimos saepe corporis odit labore hic ullam repellendus debitis quos sunt? Officia praesentium doloribus dolore ipsum provident. Eaque excepturi placeat optio voluptate aliquam rerum consectetur molestias officia, unde maiores nobis asperiores iure in ex tenetur odit eius delectus et possimus veniam similique harum omnis dolorem. Aliquam, error vel. Reiciendis odit quasi aspernatur?</p>'
        // ]);
        
        // Posts::create([
        //     'title'=>'Postingan Ketiga',
        //     'categories_id'=>3,
        //     'user_id'=>2,
        //     'slug'=>'post-ketiga',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil optio esse obcaecati,',
        //     'content'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil optio esse obcaecati, dicta nulla est beatae delectus vitae, facilis error eaque ab, in accusantium magnam eligendi provident deleniti! Ducimus illo quis, odit eveniet nihil dolores facilis rem veritatis earum! Dolorem atque saepe doloremque laboriosam sequi voluptate quisquam eligendi ipsum et assumenda. Saepe tenetur provident cum ipsum, fugit deleniti suscipit voluptates aliquam voluptate, magnam dolore neque aspernatur molestiae vitae maxime, ullam esse commodi cupiditate odio dolorum deserunt molestias repellat sunt. Voluptatem corporis rerum beatae sit labore dolorum possimus quas quidem ex facere, eum doloribus illo, perferendis hic dignissimos minus, incidunt magni repellat pariatur eaque consectetur? Ipsam odio repellendus, neque eum perspiciatis nesciunt debitis, sint beatae, ad dicta ex velit harum? Mollitia placeat ab hic dolorum corrupti, beatae dolore, consequuntur omnis tempora a necessitatibus ipsa exercitationem aliquam facilis totam voluptates inventore saepe explicabo qui nobis animi eligendi asperiores? Esse reprehenderit rem unde!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus nulla accusamus architecto aliquam harum excepturi temporibus molestias? Illum cum eius, tempora deserunt quam porro voluptatem maiores labore esse maxime accusantium cupiditate autem odio ipsa quae, hic natus! Unde, quae veniam! Laboriosam explicabo atque esse? Aliquam molestias numquam facere consequatur dicta blanditiis autem adipisci? Magnam, magni excepturi. Aut consectetur quidem aspernatur, unde numquam voluptas in, enim quae assumenda repellendus perspiciatis quo dicta obcaecati, a officiis distinctio adipisci? Dolor nostrum neque explicabo accusantium, dolorem alias eligendi, nobis perspiciatis maiores assumenda molestias obcaecati voluptatem distinctio libero pariatur? Corrupti, aliquam inventore, in dignissimos saepe corporis odit labore hic ullam repellendus debitis quos sunt? Officia praesentium doloribus dolore ipsum provident. Eaque excepturi placeat optio voluptate aliquam rerum consectetur molestias officia, unde maiores nobis asperiores iure in ex tenetur odit eius delectus et possimus veniam similique harum omnis dolorem. Aliquam, error vel. Reiciendis odit quasi aspernatur?</p>'
        // ]);
    }
}
