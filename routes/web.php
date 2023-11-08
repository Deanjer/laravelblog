<?php

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('posts', function () {
//     dd("test");
//     return view('posts');
// });
// Route::get('/', function () {
//     dd("hallo");
//     return view('index');
// });
// Route::get('post/{post}', function ($id) {
//     $post = Post::find($id);
//     return view('post', ["post"=>$post]);
    // return view('post', [
    //     'post' => Post::find($slug)
    // ]);
// });
// Route::get('post/{post}', function ($id) {
//     return view('post', [
//         'post' => Post::find($id)
//     ]);
// });
Route::get('post/{post}', function ($id) {
    $post = Post::find($id);

    $comments = Comment::where('post_id', $id)->get();
    // dd($comments);
    
    return view('post', ['item' => $post, 'comment_item' => $comments]);
});


// Route::get('index', function () {
//     return view('posts',[
//         'index' => Post::paginate(1)
//     ]);
// });
// Route::get('index', function () {
//     return view('posts', [
//         'posts' => Post::paginate(10); // Adjust the number of posts per page as needed
//     ]);
// });


Route::get('/', function () {
 return view('index',['items' => Post::all()]);
});

