<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Menu;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting=Setting::first();
        $datalist=Content::where('user_id',Auth::id())->get();
        return view('home.user_content',['setting'=>$setting,'datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setting=Setting::first();
        $datalist = Menu::all();
        return view('home.user_content_add',['setting'=>$setting,'datalist'=>$datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Content;
        $data->title=$request->input('title');
        $data->keywords=$request->input('keywords');
        $data->description=$request->input('description');
        $data->image=Storage::putFile('images',$request->file('image'));
        $data->menu_id=$request->input('menu_id');
        $data->user_id=Auth::id();
        $data->detail=$request->input('detail');
        $data->type=$request->input('type');
        $data->status=$request->input('status');
        $data->save();
        return redirect()->route('user_contents')->with('success','Başarı ile Kayıt Edildi');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content, $id)
    {
        $setting=Setting::first();
        $data=Content::find($id);
        $datalist= Content::all();
        return view('home.user_content_edit',['setting'=>$setting, 'data'=>$data],['datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content,$id)
    {
        $data = Content::find($id);
        $data->title=$request->input('title');
        $data->keywords=$request->input('keywords');
        $data->description=$request->input('description');
        $data->image=Storage::putFile('images',$request->file('image'));
        $data->menu_id=$request->input('menu_id');
        $data->user_id=Auth::id();
        $data->detail=$request->input('detail');
        $data->type=$request->input('type');
        $data->status=$request->input('status');
        $data->save();
        return redirect()->route('user_contents')->with('success','Başarı ile Güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content,$id)
    {
        //DB::table('contents')->where('id','=',$id)->delete();
        $data = Content::find($id);
        $data->delete();
        return redirect()->route('user_contents')->with('warning','Başarı ile Silinci');
    }
}
