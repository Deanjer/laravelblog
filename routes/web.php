<?php

use App\Models\Post;
use App\Models\Comment;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RegisterController;
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


Route::post('post/{post}', [CommentController::class, 'store']);


Route::get('/', function () {
    $posts = Post::latest();

    if (request('search')) {
        $posts->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('excerpt', 'like', '%' . request('search') . '%');
    }

    $posts = $posts->paginate(3);

    return view('index', compact('posts'));
});

route::get('register', [RegisterController::class, 'create'])->middleware('guest');
route::post('register', [RegisterController::class, 'userstore'])->middleware('guest');
