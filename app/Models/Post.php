<?php 
namespace App\Models;

use Illuminate\Support\Arr;

class Post{
    public static function all(){
        return [
        [
            'id'=>1,
            'slug'=>'judul-artikel-1',
            'title'=>'judul artikel 1',
            'author'=>'Kuncahyo Adi P',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque expedita suscipit soluta vitae eveniet harum aliquam exercitationem iure consectetur necessitatibus, fugiat ab quis repellendus illum aut. Cupiditate placeat tenetur maiores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus sapiente similique repellendus perspiciatis, non, modi ipsum veritatis, ut dolorem atque blanditiis nesciunt libero nostrum dicta harum alias sit maiores sequi.'
        ],
        [
            'id'=>2,
            'slug'=>'judul-artikel-2',
            'title'=>'judul artikel 2',
            'author'=>'Kuncahyo Adi P',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad similique reiciendis eligendi, expedita praesentium fuga maxime blanditiis impedit consequatur velit, excepturi, vitae libero sapiente. Recusandae nulla eos incidunt facilis nostrum.'
        ]
        ];
    }

    public static function find($slug): array{
        // semua bisa mau calback maupun aerofunction di laravel
        // callback
        // return Arr::first(static::all(), function($post) use ($slug){
        //         return $post['slug']==$slug;
        //     });

        // aero function
        $post = Arr::first(static::all(), fn($post) => $post ['slug']==$slug);
        if(!$post){
            abort(404);
        }
        return $post;
    }
    
}
 ?>