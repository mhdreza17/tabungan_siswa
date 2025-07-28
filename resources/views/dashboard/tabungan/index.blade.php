@extends('dashboard.layouts.main')

@section('container')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    
    <div class="card-body">
      @if(($message = Session::get('success')))
        <div class="alert alert-success alert-block">	
          <strong>{{ $message }}</strong>
        </div>
      @endif
      <div class="row px-2">
        <div class="col">
          <div class="container px-1  mb-3"><h2>Data Siswa</h2></div>
        </div>
        <div style="justify-content: end;" class="col-2 ">
          <a href="/dashboard/createsiswa"><button type="button" class="btn btn-info"><i class="fa-solid fa-plus"></i>Siswa</button></a>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th> # </th>
              <th> Nama </th>
              <th> NIS </th>
              <th> Kelas </th>
              <th colspan="2" class="text-center"> Action </th>
            </tr>
          </thead>
          <tbody>
            {{-- {{dd($users)}} --}}
            @foreach ($user as $usr)
            <tr>
              {{-- @if(($usr->status==='siswa')) --}}
              <td>{{ $loop->iteration }}</td>
              <td>{{$usr->name }}</td>
              <td>{{$usr->nis }}</td>
              <td>{{$usr->kelas }}</td>
              <td width="10%">
                <a href="/dashboard/detailsiswa/{{$usr->id}}"><button type="button" class="btn btn-primary badge"  colspan="2"><i class="fa-solid fa-user-pen"></i></button></a>
                <a href="/dashboard/adminnabung/{{$usr->id}}"><button type="button" class="btn btn-info badge"><i class="fa-solid fa-dollar-sign"></i></button></a>
                <form class="d-inline" action="/dashboard/deletesiswa/{{$usr->id}}" method="POST">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-danger badge bg-danger" onclick="return confirm('Yakin Ingin Menghapus?')"><i class="fa-solid fa-trash-can"></i></button>
                  {{-- <button class="badge bg-danger border-0" onclick="return confirm('Yakin Ingin Menghapus?')"><span class="mdi mdi-close-circle"></span></button> --}}

                </form>
              </td>
              </td>
              {{-- @endif --}}
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection