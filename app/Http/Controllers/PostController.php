<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use Image;

class PostController extends Controller
{

  public function store(Request $request)
  {
      $this->validate($request, array(
          'title' => 'required|max:255',
          'picture' => 'required',
      ));


       if($request->hasFile('picture')){

       $post_pic = $request->file('picture');
       $pic_filename = time() . '.' . $post_pic->getClientOriginalExtension();
       $pic_location = public_path('/images/Pictures/' . $pic_filename);
       Image::make($post_pic)->save($pic_location);
     }


        $post =  Post::create([
        'title' => request('title') ,
        'picture' => $pic_filename,
        ]);








      if($post){
        $all_tags = $request->get('tags');
        $tagid = [];
        $explode_tags = explode(' ' , implode($all_tags));

        foreach($explode_tags as $explode_tag)
        {
          $tag = Tag::firstOrCreate(['name'=>$explode_tag]);
          if($tag){
            $tagid[]= $tag->id;
          }


        }

        $post->tags()->sync($tagid);



      }

        return redirect('/');



  }

}
