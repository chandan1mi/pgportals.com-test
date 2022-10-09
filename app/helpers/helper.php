<?php 

use App\Models\Profile;
use App\Models\User;
use Collective\Html\FormFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
if (!function_exists('current_profile')) {
    function current_user(){
        if(Auth::user()->is_admin == 1 && (request()->route()->parameter('userId'))){
            $current_user=User::find(request()->route()->parameter('userId'));
        }else{
            $current_user=Auth::user();
        }
        return $current_user;
    }
}
if (!function_exists('url_builder')) {
    function url_builder(String $url){
        if(Auth::user()->is_admin == 1 && (request()->route()->parameter('userId'))){
                if(Route::has('admin.'.$url)){
                    return route('admin.'.$url,['userId'=>request()->route()->parameter('userId')]);
                }
        }else{
                if(Route::has($url)){
                    return route($url);
                }
        }
        return '#';
    }
}
if (!function_exists('formLabel')) {

        function formLabel(string $fieldShow=null,string $for,string $classes=null){
            if(!$for && $for==''){
                $for=Str::of($fieldShow)->snake();
            }
            return FormFacade::label($for,$fieldShow,['class'=>$classes]);
        }
}

?>