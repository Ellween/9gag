<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Comment;

class PagesController extends Controller
{
    public function getIndex()
    {
      $posts = Post::all();
      $categories = Category::all();
      return view('posts.post',compact('categories','posts'));
    }

    public function getSingle($id)
    {
      $categories = Category::all();
      $post = Post::find($id);
      return view('posts.single',compact('post','categories'));

    }
}
