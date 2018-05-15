<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use Image;

class AdminController extends Controller
{

    public function index()
    {

      $categories = Category::all();
      return view('admin.category_section',compact('categories'));

    }

    public function getCategory() {

      $categories = Category::all();
      return view('admin.category_section',compact('categories'));
    }

    public function getUsers() {

      $users = User::all();
      return view('admin.users_area',compact('users'));
    }

    public function storeCategory(Request $request)
    {
      $this->validate($request,array(
        'image' => 'sometimes',
        'category' => 'required',
      ));

      if($request->hasFile("image")){
      $category_pic = $request->file('image');
      $image_filename = time() . '.' . $category_pic->getClientOriginalExtension();
      $image_location = public_path('/images/category_images/' . $image_filename);
      Image::make($category_pic)->resize(24,24)->save($image_location);
      }


      $category = Category::create([
        'category' =>request('category'),
        'image' => $image_filename,

      ]);

      return redirect()->back();
    }
}
