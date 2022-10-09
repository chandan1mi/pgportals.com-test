<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Matcher\Any;

// use Illuminate\Support\Facades\Validator;

class ProfilesController extends AppController
{
       function index(Request $request, $userId = null)
       {
              $profile = ($userId) ? Profile::findOrFail($userId) : Profile::findOrFail(Auth::user()->id);
              return view('Profiles.index')->with(compact('profile'));
       }

       protected function create(Request $request)
       {
              if(!isset(Auth::user()->profile) && ($request->input())){
                     $validated = $request->validate([
                            'first_name' => ['required', 'string','max:255'],
                            'last_name'  =>['required', 'string','max:255'],
                            'phone'      =>['required', 'string','max:255'],
                            'address'    =>['required', 'string','max:255'],
                            'state'      =>['required', 'string','max:255'],
                            'city'       =>['required', 'string','max:255'],
                     ]);
                     $data=$request->input();
                     $profile=Profile::create([
                            'user_id' => Auth::user()->id,
                            'first_name' => $data['first_name'],
                            'last_name' => $data['last_name'],
                            'phone' => $data['phone'],
                            'address' => $data['address'],
                            'state' => $data['state'],
                            'city' => $data['city'],
                     ]);
              }
              return redirect(url_builder('home',$request));
       }
}
