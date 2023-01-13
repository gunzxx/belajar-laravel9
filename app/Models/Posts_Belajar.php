<?php

namespace App\Models;

class Posts
{
    private static $blog_posts =
    [
        [
            'title'=>'Post pertama',
            'slug'=>'post-pertama',
            'author'=>'Gunzxx',
            'content'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos commodi nisi dolorum doloribus repudiandae ipsa. Laudantium perferendis fuga eius vel dolore quis voluptate reiciendis unde est in commodi, optio, iusto nobis natus labore? Natus, vitae! Consequatur distinctio aliquam labore optio numquam fuga eveniet provident, ducimus reprehenderit praesentium dolorum? Ad officiis, deserunt, magni quasi alias aperiam obcaecati similique vero harum repellat sit necessitatibus quam facilis provident id natus eius in hic quae cumque quaerat saepe nihil laudantium! Dolores recusandae itaque repellat.'
        ],
        [
            'title'=>'Post kedua',
            'slug'=>'post-kedua',
            'author'=>'Bima',
            'content'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, exercitationem possimus cumque optio perspiciatis vel error nihil! Itaque neque ipsa dolores illum unde obcaecati mollitia possimus nam omnis quibusdam eius, id voluptatem dicta veritatis! Dolorem cupiditate, distinctio perspiciatis impedit quos natus tempora! Similique modi architecto repellendus itaque excepturi pariatur deserunt cum fugiat, nulla labore! Provident unde, eligendi doloribus ipsam quas aspernatur distinctio voluptatem numquam earum qui quae maiores consequuntur! Expedita temporibus ullam ut. Nobis, nostrum minima illum quos nam eius harum officiis asperiores debitis tempore aliquam voluptas placeat! Itaque expedita atque harum repellendus inventore vero dolorum commodi ipsam! Dolores, dicta!'
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function single($slug)
    {
        // $new_post=[];
        // foreach($blog_posts as $post){
        //     if($post['slug']===$slug){
        //         $new_post = $post;
        //     }
        // }
        
        // $index = array_search($slug, array_column(self::$blog_posts,'slug'));
        // return self::$blog_posts[$index];
        
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }
}
