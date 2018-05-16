<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Comment;
use App\Post;

class CommentController extends Controller
{

    public function store(Request $request, $post)
    {
      $this->validate($request,array(
        'comment' => 'required',
        'meme' => 'sometimes',
      ));

      if($request->hasFile('meme')){
        $meme = $request->file('meme');
        $meme_filename = time() . ' ' . $meme->getClientOriginalExtension();
        $meme_location = public_path('/images/memes/' . $meme_filename);
        Image::make($meme)->save($meme_location);
      }



      $comments = Comment::create([
        'comment' => request('comment'),
        'meme' => $meme_filename,
        'post_id' => $post,
      ]);




      return redirect()->back();

    }

}
