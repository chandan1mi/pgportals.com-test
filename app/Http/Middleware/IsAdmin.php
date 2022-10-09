<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
        
        if(Auth::user()->is_admin == 1){
            if(User::where('id','=',$request->route()->parameter('userId'))->first()){
                return $next($request);
            }else{
                return redirect('admin/'.Auth::user()->id.'/home')->withErrors(['error' => "That user do not have exist."]);
            }
        }
        return redirect('manage/home')->with('error',"You don't have admin access.");
    }
}
