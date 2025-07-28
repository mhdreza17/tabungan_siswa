@extends('register.layouts.main')

@section('container')
<div class="row justify-content-center container-fluid" id="content-wrap">
  <div class="col-lg-5">
    
    <main class="form-registration">
      <h1 class="h3 mb-3 fw-normal text-center">Register Now</h1>
        <form action="/register" method="post">
          @csrf
          <div class="form-floating">
            <input type="text" name="name" class="form-control rounded-top @error('name')is-invalid @enderror" id="name" placeholder="name" required value="{{ old('name')}}">
            <label for="name">Name</label>
            @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="text" name="nis" class="form-control rounded-top @error('nis')is-invalid @enderror" id="nis" placeholder="123456789000" required value="{{ old('nis')}}">
            <label for="nis">NIS</label>
            @error('nis')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
            <label for="username">Username</label>
            @error('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
            <label for="email">Email address</label>
            @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="row">
            <div class="col">
            <input type="date" class="form-control @error('tgl_lahir')is-invalid @enderror" placeholder="Tanggal Lahir" aria-label="" name="tgl_lahir">
            @error('tgl_lahir')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
          </div>
          <div>
            <select class="form-select" aria-label="Default select example" id="jenis_kelamin" name="jenis_kelamin">
              <option value="Pria">Pria</option>
              <option value="Wanita">Wanita</option>
            </select>
          </div>
          <div>
            <select class="form-select" aria-label="Default select example" id="kelas" name="kelas">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
            </select>
          </div>
          <div class="form-floating">
            <input type="text" name="alamat" class="form-control rounded-top @error('alamat')is-invalid @enderror" id="alamat" placeholder="123456789000" required value="{{ old('alamat')}}">
            <label for="alamat">Alamat</label>
            @error('alamat')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="text" name="nomor_hp" class="form-control rounded-top @error('nomor_hp')is-invalid @enderror" id="nomor_hp" placeholder="123456789000" required value="{{ old('nomor_hp')}}">
            <label for="nomor_hp">Nomor HP</label>
            @error('nomor_hp')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control rounded-bottom @error('password')is-invalid @enderror" id="password" placeholder="Password" required>
            <label for="password">Password</label>
            @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
      
          <div class="checkbox mb-3 mt-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary " type="submit">Register</button>
        </form>
        <small class="d-block text-center mt-3">Login <a href="/login">here!</a></small>
      </main>
  </div>
</div>

@endsection