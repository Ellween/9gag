<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function store(Request $request)
    {

          dd($request);
            if($post){
              $all_tags = $request('tags');
              $explode_tags = explode(',' , $all_tags);

              foreach($explode_tags as $explode_tag)
              {
                $tag = Tag::firstOrCreate(['name'=>$explode_tag]);
              }
              $post->tags()->sync($request->explode_tag, false);

            }
            

            return redirect()->back();

    }
}
