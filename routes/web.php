<?php

use App\Models\Post;
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
Route::get('post/{post}', function ($slug) {
    return view('post', [
        'post' => Post::find($slug)
    ]);
})->where('post','[A-z_\-]+');

Route::get('post', function () {
    return view('posts',[
        'posts' => Post::all()
    ]);
});

Route::get('/', function () {
    // dd("hallo routes");
    $files =  File::files(resource_path("posts/"));

    $posts = collect($files)
    ->map(function ($file){
        $document = YamlFrontMatter::parseFile($file);

        return new Post(
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body(),
            $document->slug,
            $document->info
        );
    });

    return view('index',[
        'items' => $posts
    ]);
});