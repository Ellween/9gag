<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      if(Auth::check()){
        if(Auth::user()->type != 2){
          return redirect('/fail');
        }
}        // if(Auth::user()->type == 2){
        //   return redirect('/admin/category');
        // }
        else {
          return redirect('/login');
        }

        return $next($request);



    }

}
