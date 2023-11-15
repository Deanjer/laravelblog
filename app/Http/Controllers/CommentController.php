<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Comment;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CommentController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('post');
    }


    public function store(Request $request, $id)
    {
        // $user = Comment::create($request->all());
        // return redirect()->route('post');
        // dd($request);
        $c = new Comment;
        $c->name = $request->name;
        $c->comment = $request->comment;
        $c->post_id = $request->post_id;
        $c->save();
        return redirect('post/'.$id);
        // return redirect()->back();
    }
}
