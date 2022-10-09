<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use Illuminate\Support\Facades\Auth;

class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // echo '<pre>'; print_r($request->route()->getAction()); die(' Test');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,string $listingType)
    {
        if($listingType=='pg'){

            return view('listing.create',compact('listingType'));
        }
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|unique:listings|max:255',
            'address'=>['required', 'string','max:255'],
            'district'=>['required', 'string','max:255'],
            'state'  =>['required', 'string','max:255'],
            'country'=>['required', 'string','max:255'],
            'pincode' =>['required', 'string','max:255'],
            'neighborhood'=>['required', 'string','max:255'],
            'car_parking'=>['required', 'string','max:255'],
            'two_whealer_parking'=>['required', 'string','max:255'],
            'rooms'=>['required', 'string','max:255'],
     ]);
     $data=$request->input();
     if(1==1 && request()->route()->parameter('userId') != ''){
         $userId=request()->route()->parameter('userId');
     }else{
        $userId=Auth::user()->id;
     }
    //  echo '<pre>'; print_r($data); die(' Test');
                     $listing=Listing::create([
                            'user_id' => $userId,
                            'title' =>$data['title'],
                            'address' =>$data['address'],
                            'description'=>$data['description'],
                            'district' =>$data['district'],
                            'state' =>$data['state'],
                            'country' =>$data['country'],
                            'pincode' =>$data['pincode'],
                            'neighborhood' =>$data['neighborhood'],
                            'car_parking' =>$data['car_parking'],
                            'two_whealer_parking' =>$data['two_whealer_parking'],
                            'rooms' =>$data['rooms'],
                            'listing_coolant'=>$data['listing_coolant']
                     ]);
                     echo '<pre>'; print_r($listing); die(' Test');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request , $id)
    {
        echo '<pre>'; print_r($request->route()->getAction()); die(' Test');
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
