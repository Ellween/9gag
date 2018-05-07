<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public __construct(){
      $this->middleware('admin');
    }

    public function index()
    {
      // code...
    }
}
