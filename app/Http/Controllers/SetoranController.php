<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Facade;
use App\Models\User;
use App\Models\Setoran;
use App\Models\Tabungan;

use App\Models\Request_nabung;


class SetoranController extends Controller

{
    public function index()
    {
        $nis = auth()->user()->id;

        $users = User::where('id', $nis)->get();
        $reqnabung = Request_nabung::where('id_user', $nis)->get();
        $data_setor = DB::table('tabungans')->where('id_user', $nis)->get();
        return view('dashboard.profilsiswa.tabungan',[
            'data_setor'=>$data_setor,
            'users'=>$users,
            'reqnabung'=>$reqnabung
        ]);
    }

    public function viewrequest(){
        $nis = auth()->user()->id;

        $reqnabung = Request_nabung::where('id_user', $nis)->get();
        $history = Tabungan::join('users','tabungans.id_user','=','users.id')->get();
        $data_setor = DB::table('tabungans')->where('id_user', $nis)->get();
        $users = User::where('id', $nis)->get();



        return view('dashboard.requestnabung.viewrequest',[
            'reqnabung'=>$reqnabung,
            'history'=>$history,
            'data_setor'=>$data_setor,
            'users'=>$users
        ]);
    }

    public function requestnabung(Request $request)
    {

        $validatedData = $request->validate([
            'image' => 'mimes:png,jpg,jpeg|max:5120kb'
        ]);

        if($request->hasFile('image')){
            $fileName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('bukti_tf',   $fileName, 'public');
            $validatedData['image'] = '/storage/' . $path;
        }

        Request_nabung::create([
            'id_user'=>$request->id_user,
            'jlh_request'=>$request->jlh_request,
            'image'=>$validatedData['image'],
            'status'=>'request'
        ]);
        return back()->with('success', 'Request tabungan anda sudah terkirim.');
    }

    public function profil()
    {
        $nis = auth()->user()->id;
        // $user = User::where('id', $id)->get();
        // return view('profilsiswa.index',['user'=>$user]);
        $userr = DB::table('users')->where('id', $nis)->get();
        return view('dashboard.profilsiswa.index',['userr'=>$userr]);
    }

    public function setoranpdf()
    {
        $nis = auth()->user()->id;
        $datas = User::where('id', $nis)->get();
        $setoran = DB::table('tabungans')->where('id_user', $nis)->get();
        return view('dashboard.profilsiswa.setoranpdf',[
            'setoran'=>$setoran,
            'datas'=>$datas
        ]);
    }


    public function editprofil(){
        $nis = auth()->user()->id;

        $user = User::where('id', $nis)->get();
        return view('dashboard.profilsiswa.editprofil',[
            'user'=>$user
        ]);
    }

    public function updateprofil(Request $request){
        User::where('id', $request->id)->update([
            
            'name'=>$request->name,
            'nis'=>$request->nis,
            'tgl_lahir'=>$request->tgl_lahir,
            // 'kelas'=>$request->kelas,
            'alamat'=>$request->alamat,
            'email'=>$request->email,
            'password'=>$request->password,
            'nomor_hp'=>$request->nomor_hp,
            'jenis_kelamin'=>$request->jenis_kelamin,

        ]);
        return back();
    }

    public function insertpoto(Request $request){

        $data = Setoran::create($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('image/', $request->file('image')->getClientOriginalName());
            $data->image =  $request->file('image')->getClientOriginalName();
            $data->save();
        }
    }
}
