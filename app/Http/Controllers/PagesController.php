<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
class PagesController extends Controller
{
    public function getIndex()
    {
      $posts = Post::all();
      $categories = Category::all();
      return view('posts.post',compact('categories','posts'));
    }
}
