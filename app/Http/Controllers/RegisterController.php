<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'min:5', 'max:255'],
            'nis' => ['required', 'min:12', 'max:255'],
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'kelas' => 'required',
            'alamat' => 'required|max:255',
            'nomor_hp' => 'required|min:8|max:10',
            'password' => 'required|min:8|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        
        // $request->session()->flash('success', 'Account created Successfully!');

        return redirect('/login')->with('success', 'Account created Successfully!');
    }
}
