<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Tabungan;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $nis = auth()->user()->id;

        
        $jumlah = Tabungan::latest();
        $posts = Post::all();
        $users = User::all();
        $user = User::where('id', $nis)->get();
        return view('dashboard.index',[
            'posts' => $posts,
            'users' => $users,
            'jumlah'=>$jumlah,
            'user'=>$user
        ]);
    }
}
