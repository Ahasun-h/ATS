<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Environment\Runtime;

class UKManagementmiddleware
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
        if(!Auth::check()){

            if(!Auth::user()->role_id == 2){
                return redirect()->route('mgt.show.login');
            }elseif(!Auth::user()->role_id == 3){
                return redirect()->route('mgt.show.login');
            }
        }else{
            return $next($request);
        }
    }
}
