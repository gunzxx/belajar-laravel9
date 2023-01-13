<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        // $post = Posts::with([
        //     'category' => function($query){
        //         $query
        //         ->limit(10);
        //     },
        //     'author' => function($query){
        //         $query
        //         ->limit(10);
        //     }
        // ])->latest()->limit(10);

        $categorytitle = '';

        $post = Posts::
            with([
                'category' => function($query){
                    $query
                    ->limit(10);
                },
                'author' => function($query){
                    $query
                    ->limit(10);
                }
                ])
            ->filter(request(['keyword','category','author']))->latest()->paginate(7)->withQueryString();
        
        $categorytitle .= Posts::cekTitle();
        $banyak = $post->count();
        // echo $banyak;
        if($banyak<=0){
            return view('blog',[
                "title"=>'Blog',
                'posts'=>[],
                'active'=>'posts',
                'banyak' => $banyak,
            ]);
        }else if($banyak>0){
            return view('blog',[
                "title"=>'Blog',
                'active'=>'posts',
                'posts'=> $post,
                'banyak' => $banyak,
                'categorytitle' => $categorytitle
            ]);
        }
    }

    public function single($slug)
    {
        $post = Posts::where('slug','=',$slug)->limit(1)->get();
        $banyak = $post->count();
        if($banyak>0){
            return view('post',[
                'title'=>'Single Post',
                'post'=>$post->first(),
                'active'=>'posts'
            ]);
        }
        else{
            return view('post',[
                'title'=>'Single Post'
            ]);
        }
    }
}
