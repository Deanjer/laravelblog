<?php

use App\Models\Post;
use App\Models\Comment;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;


Route::get('post/{post}', function ($id) {
    $post = Post::find($id);

    $comments = Comment::where('post_id', $id)->get();
    // dd($comments);

    return view('post', ['item' => $post, 'comment_item' => $comments]);
});

// Route::get('post', [Controller::class, 'index']);
// Route::post('store-form', [CommentController::class, 'store']);
Route::post('post/{post}', [CommentController::class, 'store']);
// Route::post('post/{post}', function(){
//   $commentstore = CommentController::store;
// }); 




// [CommentController::class, 'store']

// Route::get('/', function () {
//  return view('index',['items' => Post::all()]);
// });

// Route::get('/', function () {
//     $posts = Post::paginate(3); // You can change the number 10 to the desired number of items per page
//     // dd(request('search'));
//     return view('index', compact('posts'));

    
//     $posts = Post::latest();
//     if(request('search')){
//         $posts->where('title', 'like', '%'.request('search').'%');
//     }

//     return view('index',[
//         'posts' =>$posts->get(),
//         'index', compact('posts')
//     ]);
// });

Route::get('/', function () {
    $posts = Post::latest();

    if (request('search')) {
        $posts->where('title', 'like', '%' . request('search') . '%')
              ->orWhere('excerpt', 'like', '%' . request('search') . '%');
    }

    $posts = $posts->paginate(3);

    return view('index', compact('posts'));
});
  
