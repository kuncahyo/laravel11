<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['title'=>'Home Page']);
});

Route::get('/about', function () {
    return view('about',['nama'=>'Kuncahyo','contact'=>'0857########','title'=>'About']);
});

Route::get('/posts', function () {
    return view('posts',['title'=> 'Blog','posts'=>[
        [
            'title'=>'judul artikel 1',
            'authot'=>'Kuncahyo Adi P',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque expedita suscipit soluta vitae eveniet harum aliquam exercitationem iure consectetur necessitatibus, fugiat ab quis repellendus illum aut. Cupiditate placeat tenetur maiores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus sapiente similique repellendus perspiciatis, non, modi ipsum veritatis, ut dolorem atque blanditiis nesciunt libero nostrum dicta harum alias sit maiores sequi.'
        ],
        [
            'title'=>'judul artikel 2',
            'authot'=>'Kuncahyo Adi P',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad similique reiciendis eligendi, expedita praesentium fuga maxime blanditiis impedit consequatur velit, excepturi, vitae libero sapiente. Recusandae nulla eos incidunt facilis nostrum.'
        ]
    ]]);
});
Route::get('/contact', function () {
    return view('contact',['title'=>'Contact']);
});