<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Quantri
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->idgroup == 1){
            return $next($request);
        }else{     
        return redirect('home')->with('loi','Bạn không có quyền admin');
        }
    }
}
