<?php

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;


Route::get('post/{post}', function ($id) {
    $post = Post::find($id);

    $comments = Comment::where('post_id', $id)->get();
    // dd($comments);
    
    return view('post', ['item' => $post, 'comment_item' => $comments]);
});
Route::get('/commentpost', function ($id) {

});

// Route::get('/', function () {
//  return view('index',['items' => Post::all()]);
// });

Route::get('/', function () {
    $posts = Post::paginate(3); // You can change the number 10 to the desired number of items per page
    return view('index', compact('posts'));
    
});
