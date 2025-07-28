@extends('dashboard.layouts.main')

@section('container')
<div class="card">
  <div class="card-body">
    <!-- tombol back -->
    <div class="container px-2 pt-2 mb-3"> <h2><a href="/dashboard/tabungan"><i class="fa-solid fa-arrow-left"></i></a>   Create Siswa</h2></div>
    <!-- container siswa -->
    <div class="container py-3 px-4 mx-5 mb-4">
      {{-- @foreach($user as $usr) --}}
      <form class="form-floating" action="/dashboard/addsiswa" method="POST">
        @csrf
      <!-- name -->
      <div class="row">
        <div class=" col-2 mb-3">
            <label for="name" class="form-label">Nama</label>
        </div>
        <div class="col-9">
            <input type="name" class="col form-control text-light" id="name" name="name" required>
        </div>
      </div>
      <!-- NIS -->
      <div class="row">
        <div class=" col-2 mb-3">
            <label for="name" class="form-label">NIS</label>
        </div>
        <div class="col-9">
            <input type="number" class="col form-control text-light" id="nis" name="nis" required>
        </div>
      </div>
      <!-- tanggal lahir -->
      <div class="row">
        <div class=" col-2 mb-3">
            <label for="name" class="form-label">Tanggal lahir</label>
        </div>
        <div class="col-9">
            <input type="date" class="col form-control text-light" id="tgl_lahir" name="tgl_lahir" required>
        </div>
      </div>
      <!-- kelas -->
      <div class="row">
        <div class=" col-2 mb-3">
            <label for="name" class="form-label" >Kelas</label>
        </div>
        <div class="col-9">
          <select class="form-select" aria-label="Default select example" name="kelas" required>
            <option selected>Kelas</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
          </select>
        </div>
      </div>
      <!-- alamat -->
      <div class="row">
        <div class=" col-2 mb-3">
            <label for="name" class="form-label">Alamat</label>
        </div>
        <div class="col-9">
            <input type="name" class="col form-control text-light" id="alamat" name="alamat" required>
        </div>
      </div>
      <!-- username -->
      <div class="row">
        <div class=" col-2 mb-3">
            <label for="name" class="form-label">Username</label>
        </div>
        <div class="col-9">
            <input type="name" class="col form-control text-light" id="username" name="username" required>
        </div>
      </div>
      <!-- email -->
      <div class="row">
        <div class=" col-2 mb-3">
            <label for="name" class="form-label">Email</label>
        </div>
        <div class="col-9">
            <input type="name" class="col form-control text-light" id="email" name="email" required>
        </div>
      </div>
      <!-- password -->
      <div class="row">
        <div class=" col-2 mb-3">
            <label for="name" class="form-label">Password</label>
        </div>
        <div class="col-9">
            <input type="name" class="col form-control text-light" id="password" name="password" required>
        </div>
      </div>
      <!-- No. Telp -->
      <div class="row">
        <div class=" col-2 mb-3">
            <label for="name" class="form-label">No. Telp</label>
        </div>
        <div class="col-9">
            <input type="name" class="col form-control text-light" id="nomor_hp" name="nomor_hp" required>
        </div>
      </div>
      <!-- jenis kelamin -->
      <div class="row">
        <div class=" col-2 mb-3">
            <label for="name" class="form-label">Jenis Kelamin</label>
        </div>
        <div class="col-9">
          <select class="form-select" aria-label="Default select example" name="jenis_kelamin" required>
            <option selected>Jenis Kelamin</option>
            <option value="pria">pria</option>
            <option value="wanita">wanita</option>
          </select>
        </div>
      </div>
      {{-- @endforeach --}}
      <!-- tombol update -->
      <button type="submit" class="btn btn-secondary " >Create</button>
      </form>
  </div>
</div>
@endsection