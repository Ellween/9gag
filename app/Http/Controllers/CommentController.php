<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Comment;
use App\Post;
use App\Category;
use App\User;
use Auth;


class CommentController extends Controller
{

  public function getSingle($id)
  {
    $categories = Category::all();
    // $comment = Comment::find($id);
    // $users = User::all();
    // $article = Post::with('comments')->find($id);
    $post = Post::find($id);
    // $comments = $post->comments()->with('user')->latest()->get();
    return view('posts.single',compact('post','categories','comments','users'));

  }


    public function store(Request $request, $post)
    {
     //  $this->validate($request,array(
     //    'comment' => 'required',
     //    'meme' => 'sometiems',
     // ));


      //
      // if($request->hasFile('meme')){
      //
      //   $meme = $request->file('meme');
      //   $meme_filename = time() . ' ' . $meme->getClientOriginalExtension();
      //   $meme_location = public_path('/images/memes/' . $meme_filename);
      //   Image::make($meme)->save($meme_location);
      // }

      $comment = Comment::create([
        'comment' => $request->comment,
        // 'meme' => isset($meme_filename) ? $meme_filename : " ",
        'post_id' => $post,
        'user_id' => Auth::id(),
      ]);


      return view('templates.templates',compact('comment'))->render();

    }
    //
    // public function uploadpic(Request $request, $id)
    // {
    //     return response()->json($request);
    //
    //
    //   if($request->hasFile('meme')){
    //
    //     $meme = $request->file('meme');
    //     $meme_filename = time() . ' ' . $meme->getClientOriginalExtension();
    //     $meme_location = public_path('/images/memes/' . $meme_filename);
    //     Image::make($meme)->save($meme_location);
    //
    //     $comment_id->meme = $meme_filename;
    //   }
    //
    //   $comment_id->save();
    //
    //   return view('templates.templates',compact('comment_id'))->render();
    //
    // }



}
