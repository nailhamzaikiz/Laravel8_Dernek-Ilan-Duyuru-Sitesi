<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Menu;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //

    public function getsetting(){

        return Setting::first();
    }

    public function index(){
        $haberler = Content::where('menu_id','1')->get();
        $duyurular = Content::where('menu_id','2')->get();
        $setting=Setting::first();
        return view('home.index',['setting'=>$setting,'haberler'=>$haberler, 'duyurular'=>$duyurular]);
    }
    public function aboutus(){
        $setting=Setting::first();
        return view('home.about',['setting'=>$setting]);
    }
    public function contact(){
        $setting=Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }
    public function sendmessage(Request $request){
        $data = new Message;
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->save();
        return redirect()->route('contact')->with('success','Mesajınız Kaydedilmiştir. Teşekkür Ederiz.');
    }
    public function faq(){
        return view('home.about');
    }
    public function haberler(){
        $data = Content::where('menu_id','1')->get();
        $setting=Setting::first();
        return view('home.haberler',['setting'=>$setting,'data'=>$data]);
    }
    public function duyurular(){
        $data = Content::where('menu_id','2')->get();
        $setting=Setting::first();
        return view('home.duyurular',['setting'=>$setting,'data'=>$data]);
    }
    public function haber(Content $request,$id){
        $data = Content::find($id);
        $setting=Setting::first();
        return view('home.haber',['setting'=>$setting,'data'=>$data]);
    }
    public function duyuru(Content $request,$id){
        $data = Content::find($id);
        $duyurular = Content::where('menu_id','2')->get();
        $setting=Setting::first();
        return view('home.duyuru',['setting'=>$setting,'data'=>$data, 'duyurular'=>$duyurular]);
    }
    public function references(){
        $setting=Setting::first();
        return view('home.references',['setting'=>$setting]);
    }
    public function login(){
        return view('admin.login');
    }

    public function logincheck(Request $request){
        if ($request->isMethod('post')){
            $credentials=$request->only('email','password');
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();
                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email'=>'The provided credentials do not match our records'
            ]);
        }
        else{
            return view('admin.login');
        }
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
