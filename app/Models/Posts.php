<?php

namespace App\Models;

use App\Models\User;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class Posts extends Model
{
    use HasFactory, Sluggable;

    // Primary Id
    protected $primaryKey = 'post_id';

    protected $fillable = ['title','slug','category_id','image','user_id','excerpt','content'];
    // protected $guarded = ['post_id'];
    
    /**
     * Eiger loading pada Model
     */
    // protected $with = ['author','category'];

    public function scopeFilter($query, array $filters)
    {
        // if(isset($filters['keyword'])?$filters['keyword'] : false){
        //     $keyword = $filters['keyword'];
        //     return $query
        //             ->where('title','like',"%".$keyword."%")
        //             ->orWhere('excerpt','like',"%".$keyword."%")
        //             ->orWhere('content','like',"%".$keyword."%");
        // }

        // Cara ringkas dengan menggunakan when collection dan Null coalescing operator(??)
        $query->when($filters['keyword'] ?? false, function($query,$keyword){
            return $query
                ->where(function($query) use($keyword){
                $query
                ->where('title','like',"%".$keyword."%")
                ->orWhere('excerpt','like',"%".$keyword."%")
                ->orWhere('content','like',"%".$keyword."%");
            });
        });

        $query->when($filters['category']??false, function($query,$category){
            return $query->whereHas('category',function($query) use($category){
                $query->where('slug',$category);
            });
        });
        
        $query->when($filters['author']??false, fn ($query,$author) =>
            $query->whereHas('author',fn ($query) =>
                $query->where('username',$author)
            )
        );
    }

    public static function cekTitle()
    {
        if(request('category')){
            $category = Categories::where('slug','=',request('category'))->limit(1)->get()->first();
            if($category != null){
                return $category->name;
            }
        }
    }

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id','category_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id','user_id');
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
