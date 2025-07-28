@extends('dashboard.layouts.main')

@section('container')
<div class="card">
  <div class="card-body">
    @if(($message = Session::get('success')))
        <div class="alert alert-success alert-block">	
          <strong>{{ $message }}</strong>
        </div>
      @endif
    <!-- tombol back -->
    <div class="container px-2 pt-2 mb-3"> <h2><a href="/profil"><i class="fa-solid fa-arrow-left"></i></a>   Detail Siswa</h2></div>
    <!-- container siswa -->
    <div class="container py-3 px-4 mx-5 mb-4">
      @foreach($user as $usr)
      <form action="/dashboard/updatesiswa/{{$usr->id}}" method="post" class=" p-4">
        @csrf
        @method('PUT')
                <input type="hidden" class="col form-control" id="id" name="id" value="{{old('id', $usr->id)}}">
        <!-- foto&nama -->
      <div class="row py-3 mb-4">
        <div class="col-1">
          @if($usr->jenis_kelamin === 'wanita')
            <div ><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" class="rounded-circle float-end" width="100px"></div>
          @elseif($usr->jenis_kelamin === 'pria')
            <div ><img src="https://cdn-icons-png.flaticon.com/512/1154/1154461.png" class="rounded-circle float-end" width="100px"></div>
          @endif
        </div>
        
        <div class="col pl-3">
          <h1>{{$usr->name}} {{$usr->nis}}</h1>
        </div>
      </div>
      <!-- end foto nama -->

      <!-- name -->
      <div class="row">
        <div class=" col-2 mb-3">
            <label for="name" class="form-label">Nama</label>
        </div>
        <div class="col-9">
            <input type="name" class="col form-control text-light" id="name" name="name" value="{{old('name', $usr->name)}}">
        </div>
      </div>
      <!-- NIS -->
      <div class="row">
        <div class=" col-2">
            {{-- <label for="nis" class="form-label">NIS</label> --}}
        </div>
        <div class="col-9">
            <input type="hidden" class="col form-control bg-dark text-light" id="nis" name="nis" value="{{old('nis', $usr->nis)}}" >
        </div>
      </div>
      <!-- tanggal lahir -->
      <div class="row">
        <div class=" col-2 mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal lahir</label>
        </div>
        <div class="col-9">
            <input type="date" class="col form-control text-light" id="tgl_lahir" name="tgl_lahir" value="{{old('tgl_lahir', $usr->tgl_lahir)}}">
        </div>
      </div>
      <!-- kelas -->
      <div class="row">
        <div class=" col-2 mb-3">
            <label for="kelas" class="form-label " value="{{$usr->kelas}}">Kelas</label>
        </div>
        <div class="col-9">
          <select class="form-select bg-dark text-light" aria-label="Default select example">
            <option selected>{{$usr->kelas}}</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="3">4</option>
            <option value="3">5</option>
            <option value="3">6</option>
          </select>
        </div>
      </div>
      <!-- alamat -->
      <div class="row">
        <div class=" col-2 mb-3">
            <label for="alamat" class="form-label">Alamat</label>
        </div>
        <div class="col-9">
            <input type="text" class="col form-control text-light" id="alamat" name="alamat" value="{{old('alamat', $usr->alamat)}}">
        </div>
      </div>
      <!-- email -->
      <div class="row">
        <div class=" col-2 mb-3">
            <label for="email" class="form-label">Email</label>
        </div>
        <div class="col-9">
            <input type="email" class="col form-control text-light" id="email" name="email" value="{{old('email', $usr->email)}}">
        </div>
      </div>
      <!-- password -->
      <div class="row">
        <div class=" col-2 mb-3">
            <label for="password" class="form-label">Password</label>
        </div>
        <div class="col-9">
            <input type="password" class="col form-control text-light" id="password" name="password" value="{{old('password', $usr->password)}}">
        </div>
      </div>
      <!-- No. Telp -->
      <div class="row">
        <div class=" col-2 mb-3">
            <label for="nomor_hp" class="form-label">No. Telp</label>
        </div>
        <div class="col-9">
            <input type="text" class="col form-control text-light" id="nomor_hp" name="nomor_hp" value="{{old('nomor_hp', $usr->nomor_hp)}}">
        </div>
      </div>
      <!-- jenis kelamin -->
      <div class="row">
        <div class=" col-2 mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
        </div>
        <div class="col-9">
            <input type="text" class="col form-control text-light" id="jenis_kelamin" name="jenis_kelamin" value="{{old('jenis_kelamin', $usr->jenis_kelamin)}}">
        </div>
      </div>
      
      <!-- tombol update -->
      <button type="submit" class="btn btn-secondary " >Perbarui</button>
      </form>
      @endforeach
  </div>
</div>
@endsection