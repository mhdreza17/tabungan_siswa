<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tabungan;


class DashboardTabunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userr = User::where('status', ['siswa'])->get();
        return view('dashboard.tabungan.index',[
            'user'=>$userr
        ]);
    }

    public function adminnabung($id)
    {
        $user = User::where('id', $id)->get();
        $tabungan = Tabungan::where('id_user', $id)->get();
        return view('dashboard.tabungan.nabung',[
            'user'=>$user,
            'tabungan'=>$tabungan
        ]);
    }


    public function detailsiswa($id){
        $user = User::where('id', $id)->get();
        return view('dashboard.tabungan.detailsiswa',[
            'user'=>$user
        ]);
    }

    public function deletesiswa($id){
        User::where('id', $id)->delete();
        return back()->with('success', 'User Berhasil dihapus');

    }

    public function createsiswa(){
        return view('dashboard.tabungan.createsiswa');
    }

    public function siswaStore(Request $request){
        User::create([
            'name'=>$request->name,
            'nis'=>$request->nis,
            'tgl_lahir'=>$request->tgl_lahir,
            // 'kelas'=>$request->kelas,
            'alamat'=>$request->alamat,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>$request->password,
            'nomor_hp'=>$request->nomor_hp,
            'jenis_kelamin'=>$request->jenis_kelamin,

        ]);
        return back();
    }

    public function siswaupdate(Request $request){
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
        return back()->with('success', 'Data berhasil diupdate');
    }
    public function nabung(Request $request){
 
        $debit = $request->input('debit');
        $saldo = $request->input('saldo');
        $saldo_akhir = $debit + $saldo;
        Tabungan::create([
            'id_user'=>$request->id_user,
            'debit'=>$request->debit,
            'saldo_akhir'=>$saldo_akhir
        ]);
        return back()->with('success', 'Setoran berhasil ditambahkan');
 
        User::where('id',$request->id)->update([
            'saldo'=>$saldo_akhir
        ]);
    }
 
    public function tarik(Request $request){


 
        $kredit = $request->input('kredit');
        $saldo = $request->input('saldo');
        if($kredit>$saldo){
            return back()->with('errors', 'Silahkan ulang! jumlah saldo tidak mencukupi untuk melakukan penarikan');
        }
        $saldo_akhir = $saldo - $kredit  ;
        Tabungan::create([
            'id_user'=>$request->id_user,
            'kredit'=>$request->kredit,
            'saldo_akhir'=>$saldo_akhir
        ]);
        return back()->with('success', 'Berhasil melakukan penarikan.');
    }

    public function cetakpdf($id)
    {
        // $nis = auth()->user()->id;
        $datas = User::where('id', $id)->get();
        $setoran = Tabungan::where('id_user', $id)->get();
        return view('dashboard.tabungan.cetakpdf',[
            'setoran'=>$setoran,
            'datas'=>$datas
        ]);
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
