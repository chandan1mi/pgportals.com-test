<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HavProfile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(request()->route()->getAction('as')=='welcome'){
            if(isset(Auth::user()->profile)){
                if(Auth::user()->is_admin == 1){
                    if(User::where('id','=',$request->route()->parameter('userId'))->first()){
                        return redirect('admin/'.Auth::user()->id.'/welcome');
                    }else{
                        return redirect('manage/home');
                    }
                }else{
                    return redirect('manage/home');
                }
            }else{
                return $next($request);    
            }
                
        }

        if(isset(Auth::user()->profile)){
            return $next($request);
        }else{
            if(Auth::user()->is_admin == 1){
                if(User::where('id','=',$request->route()->parameter('userId'))->first()){
                    return redirect('admin/'.Auth::user()->id.'/welcome');
                }else{
                    return redirect('manage/welcome');
                }
            }else{
                return redirect('manage/welcome');
            }
        }
    }
}
