<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class Dashboard extends Controller
{
    public function index(Request $request){
        return $request->all();
        return view('berita.dashboard.index');
    }
}
