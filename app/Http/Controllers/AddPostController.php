<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Http\Requests\PostRequest;
use App\Models\Comment;

class AddPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function postView(){
        return view('add');
    }

    public function create(Request $req) 
    {       
        $path = $req->file('image')->store('uploads', 'public');
        $post = new Post();
        $user_nick = auth()->user()->name;
        $user_id = auth()->user()->id;
        $post->title = $req->input('title');
        $post->anons = $req->input('anons');
        $post->text = $req->input('text');
        $post->tags = $req->input('tags');
        $post->author = $user_nick;
        $post->author_id = $user_id;
        $post->image = $path;
        
        $post->save();
        $datePost = Post::where('title', '=', $req->input('title'))->first();                

        return redirect('/');
        
    }
    public function postInfo($id){
        $post = Post::find($id);
        $comment = new Comment();

        return view('postInfo', ['post' => $post], ['comments' => $comment->where('post_id', '=', $id)->get()]);
    }
    public function postEditForm($id){
        $post = Post::find($id);

        return view('edit', ['post' => $post]);
    }
    public function postEdit($id, Request $req) 
    {       
        $path = $req->file('image')->store('uploads', 'public');
        $post = Post::find($id);
        $user_nick = auth()->user()->name;
        $user_id = auth()->user()->id;
        if ($post->id ==  $user_id)
        {
        $post->title = $req->input('title');
        $post->anons = $req->input('anons');
        $post->text = $req->input('text');
        $post->tags = $req->input('tags');
        $post->author = $user_nick;
        $post->author_id = $user_id;
        $post->image = $path;
        
        $post->save();
        $datePost = Post::where('title', '=', $req->input('title'))->first();                

        return redirect('/');
        } else {

            return redirect('/');
        }
        
    }
    public function postDelete($id){
        $user_id = auth()->user()->id;
        $post = Post::find($id);
        if ($post->author_id == $user_id){
            $post->delete();
            return redirect('/');

        } else {
            return redirect('/');
        }
    }
    public function postComment($id, Request $req){
        $comment = new Comment();
        $comment->post_id = $id;
        $comment->author = auth()->user()->name;
        $comment->comment = $req->input('com');
        $comment->save();
        $post = Post::find($id);
        $comment = new Comment();

        return view('postInfo', ['post' => $post], ['comments' => $comment->where('post_id', '=', $id)->get()]);
    }
}
