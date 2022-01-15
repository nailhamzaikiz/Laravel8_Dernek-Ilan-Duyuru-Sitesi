<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=Payment::all();
        return view('admin.payment',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userlist = User::all();
        return view('admin.payment_add',['userlist'=>$userlist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Payment;
        $data->user_id=$request->input('user_id');
        $data->year=$request->input('year');
        $data->payment=$request->input('payment');
        $data->note=$request->input('note');
        $data->status=$request->input('status');
        $data->save();
        return redirect()->route('admin_payment')->with('success','Ödeme Eklendi.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment,$id)
    {
        $data=Payment::find($id);
        return view('admin.payment_edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment,$id)
    {
        $data=Payment::find($id);
        $data->year=$request->input('year');
        $data->payment=$request->input('payment');
        $data->note=$request->input('note');
        $data->status=$request->input('status');
        $data->save();
        return redirect()->route('admin_payment')->with('success','Ödeme Güncellendi.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment,$id)
    {
        $data = Payment::find($id);
        $data->delete();
        return redirect()->route('admin_payment')->with('warning','Ödeme Silindi.');
    }
}
