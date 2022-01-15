<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Review;
use App\Models\Content;
use App\Models\User;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\all;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting=Setting::first();
        return view('home.user_profile',['setting'=>$setting]);
    }
    public function myreviews(){
        /*$datalist = Review::where('user_id','=',Auth::user()->id)->get();*/
        $setting=Setting::first();
        $datalist = DB::table('reviews')
            ->where('user_id', '=', Auth::user()->id)
            ->get();
        return view('home.user_reviews',['setting'=>$setting,'datalist'=>$datalist]);
    }
    public function mypayments(){
        /*$datalist = Review::where('user_id','=',Auth::user()->id)->get();*/
        $setting=Setting::first();
        $datalist = DB::table('payments')
            ->where('user_id', '=', Auth::user()->id)
            ->get();
        return view('home.user_payments',['setting'=>$setting,'datalist'=>$datalist]);
    }
    public function destroymyreviews(Review $review,$id){
        $data = Review::find($id);
        $data->delete();
        return redirect()->back()->with('success','Yorum Silindi.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
