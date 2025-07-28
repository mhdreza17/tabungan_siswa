<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tabungan;
use App\Models\Request_nabung;


class DashboardNabungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {

        $user = User::get();
        $reqnabung = Request_nabung::join('users','request_nabungs.id_user','=','users.id')->select('users.name','users.nis','request_nabungs.id','request_nabungs.created_at','request_nabungs.image','request_nabungs.jlh_request','request_nabungs.status','request_nabungs.id_user')->get();
        
        $history = Tabungan::join('users','tabungans.id_user','=','users.id')->get();
        return view('dashboard.requestnabung.index',[
            'user'=>$user,
            'history'=>$history,
            'reqnabung'=>$reqnabung
        ]);
    }

    public function verifikasi(Request $request){
        Request_nabung::where('id', $request->id)->update([
            // 'id_user'=>$request->id_user,
            'id'=>$request->id,
            'status'=>'terverfikasi'
            // $request->status
        ]);
        return back()->with('success', 'Berhasil melakukan verifikasi');
    }

    public function download(){
        $path=public_path('storage/bukti_tf/0.jpeg');
        return respone()->download($path);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
        //
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
