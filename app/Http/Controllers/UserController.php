<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\User;
Use Hash;
use App\Category;

class UserController extends Controller
{
    public function getProfile()
    {
      $categories = Category::all();
      return view('User.profile', array('user' => Auth::user()), compact('categories'));
    }

    public function getPassword()
    {
      $categories = Category::all();
      return view('User.password', array('user' => Auth::user()),compact('categories'));
    }

    public function getAccount(){
      $categories = Category::all();
      return view('User.account' ,array('user' => Auth::user()) ,compact('categories'));
    }

    public function storeProfile (Request $request)
    {
       $this->validate($request,array(
          'name' => 'required',
        ));

        $user = Auth::user();


       $user->gender = $request->gender;
       $user->name = $request->name;
       $user->countries = $request->countries;
       $user->about = $request->about;

        if($request->hasFile('avatar')){
          $image = $request->file('avatar');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          Image::make($image)->resize(300, 300)->save( public_path('/images/avatars/' . $filename ) );

          $user->avatar = $filename;
        }

        $user->save();
        return redirect()->back();

    }

    public function storePassword(Request $request){
      $this->validate($request,array(
        'old_password' => 'required|min:6',
        'new_password' => 'required|min:6'
      ));

        $user = Auth::user();

       $old_password = $request->old_password;
       $new_password = $request->new_password;

         if(Hash::check($old_password,$user->password))
            {

             $user->password =  Hash::make($request->new_password);

           }

        $user->save();

        return redirect()->back();

    }

    public function storeaccount(Request $request) {
        $this->validate($request,array(
          'input_username' => 'required',
        ));

        $user = Auth::user();

        $user->input_username = $request->input_username;

        $user->save();

        return redirect()->back();
    }
}
