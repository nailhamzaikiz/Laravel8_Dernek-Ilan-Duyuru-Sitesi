<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Review;
use App\Models\Content;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Menu;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $datalist = Faq::all();
        $setting=Setting::first();
        return view('home.faq',['setting'=>$setting,'datalist'=>$datalist]);
    }

    public function contents($id){
        $data = DB::table('contents')->where('menu_id','=',$id)->get();
        $setting=Setting::first();
        return view('home.contents',['setting'=>$setting,'data'=>$data]);
    }
    public function content($id){
        $data = Content::find($id);
        $setting=Setting::first();
        $slider = DB::table('images')
            ->where('content_id', '=', $id)
            ->get();
        /*$reviews = Review::where('content_id',$id)->get();*/
        $reviews = DB::table('reviews')
            ->where('content_id', '=', $id)
            ->get();
        return view('home.content',['setting'=>$setting,'data'=>$data, 'reviews'=>$reviews, 'slider'=>$slider]);
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
    public function haber($id){
        $data = Content::find($id);
        $setting=Setting::first();
        $duyurular = Content::where('menu_id','2')->get();
        /*$reviews = Review::where('content_id',$id)->get();*/
        $reviews = DB::table('reviews')
            ->where('content_id', '=', $id)
            ->get();
        return view('home.haber',['setting'=>$setting,'data'=>$data, 'duyurular'=>$duyurular,'reviews'=>$reviews]);
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
    public function getcontent(Request $request){
        $data = Content::where('title', $request->input('search'))->first();
        if (!empty($data->id)) {
            return redirect()->route('haber', ['id' => $data->id]);
        }
        $haberler = Content::where('menu_id', '1')->get();
        $duyurular = Content::where('menu_id', '2')->get();
        $setting = Setting::first();
        return redirect('/');
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
