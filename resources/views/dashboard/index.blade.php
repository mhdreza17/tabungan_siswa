@extends('dashboard.layouts.main')

@section('container')
<div class="mb-5">
  <h1 class="text-light">Halo {{ auth()->user()->name }}!</h1>
</div>

@if(auth()->user()->status ==='admin')
<div class="row">
  <div class="col-sm-6 grid-margin">
    <div class="card">
      <div class="card-body">
        <h5>Jumlah Siswa</h5>
        <div class="row">
          <div class="col-8 col-sm-12 col-xl-8 my-auto">
            <div class="d-flex d-sm-block d-md-flex align-items-center">
              <h2 class="mb-0">{{ $users->count() }}</h2>
            </div>
            <h6 class="text-muted font-weight-normal">Jumlah User Terdaftar</h6>
          </div>
          <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
            <i class="icon-lg mdi mdi-account text-primary ms-auto"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 grid-margin">
    <div class="card">
      <div class="card-body">
        <h5>Jumlah Postingan</h5>
        <div class="row">
          <div class="col-8 col-sm-12 col-xl-8 my-auto">
            <div class="d-flex d-sm-block d-md-flex align-items-center">
              <h2 class="mb-0">{{ $posts->count() }}</h2>
            </div>
            <h6 class="text-muted font-weight-normal">Jumlah Postingan yang Terpublish</h6>
          </div>
          <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
            <i class="icon-lg mdi mdi-blogger text-danger ms-auto"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@elseif(auth()->user()->status === 'siswa')
<div class="card">
  <div class="card-body">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="white-box">
            <h2 class="box-title">Profile</h2>
            {{-- <p class="text-muted">Add class <code>.table</code></p> --}}
            <div class="card-body">
              @foreach($user as $user)
              <div class="row">
                <div class="col-md-8">

                  <div class="row">
                    <div class="col">
                      <h3>Nama </h3>
                    </div>
                    <div class="col">
                      <h3>{{$user->name}}</h3>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <h3>Kelas </h3>
                    </div>
                    <div class="col">
                      <h3>{{$user->kelas}}</h3>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <h3>NIS </h3>
                    </div>
                    <div class="col">
                      <h3>{{$user->nis}}</h3>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <h3>Tanggal Lahir </h3>
                    </div>
                    <div class="col">
                      <h3>{{$user->tgl_lahir}}</h3>
                    </div>
                  </div>


                </div>
                <div class="col-md-2">
                  @if($user->jenis_kelamin === 'wanita')
                  <div><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" class="rounded-circle float-end"
                      width="150px"></div>
                  @elseif($user->jenis_kelamin === 'pria')
                  <div><img src="https://cdn-icons-png.flaticon.com/512/1154/1154461.png"
                      class="rounded-circle float-end" width="150px"></div>
                  @endif
                </div>
                <div>
                  <a href="/editprofil"><button type="button" class="btn btn-primary" colspan="2">Edit
                      Profil</button></a>
                </div>
              </div>
              @endforeach
              {{-- {!! $userr->links() !!} --}}
            </div>
            <div class="card-footer"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endif
@endsection