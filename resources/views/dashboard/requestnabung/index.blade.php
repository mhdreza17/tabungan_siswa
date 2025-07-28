@extends('dashboard.layouts.main')

@include('dashboard.components.modalfoto')


@section('container')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    @if(($message = Session::get('success')))
        <div class="alert alert-success alert-block">	
          <strong>{{ $message }}</strong>
        </div>
      @endif
    <div class="card-body">
      <div class="container px-2  mb-3"><h2>Request Nabung</h2></div>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr class="text-center">
              <th> # </th>
              <th> Nama </th>
              <th> NIS </th>
              <th> Tanggal</th>
              <th> Jumlah</th>
              <th> Bukti </th>
              <th> Action</th>
            </tr>
          </thead>
          <tbody>
            {{-- {{dd($users)}} --}}
            @foreach ($reqnabung as $req)
            @if($req->status==='request')
            <tr class="text-center">
              <td>{{ $loop->iteration }}</td>
              <td>{{$req->name }}</td>
              <td>{{$req->nis }}</td>
              <td>{{$req->created_at}}</td>
              <td>Rp{{$req->jlh_request}}</td>
              <td width="10%">
              <div style="max-height: 350px; overflow:hidden">
                  <img src="{{ asset('storage/' . $req->image) }}" alt="" class="img-fluid mt-3">
              </div>
              <button type="submit" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#foto"><i class="fa-solid fa-eye"></i></button>
             
              </td>
              </td>
              <td width="16%">
                <div class="row">
                  <div class="col">
                  
                <a href="/dashboard/adminnabung/{{$req->id_user}}">
                  <button type="button" class="btn btn-info"><i class="fa-solid fa-dollar-sign"></i></button>
                </a>
              </div>
                <div class="col">
                <form method="post" action="/dashboard/verifikasi">
                  @csrf
                  @method('PUT')
                  {{-- <a href="/dashboard/verifikasi"> --}}
                    <input  type="hidden" class="form-control" id="id" name="id" value="{{$req->id}}">
                    {{-- <input type="text" class="form-control" id="status" name="status"> --}}

                    <button type="submit" class="btn btn-info"><i class="fa-solid fa-check"></i></button>
                  {{-- </a> --}}
                </form>
                </div>
                </div>
              </td>
            </tr>
            @endif
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="container px-2  mb-3"><h2>Terverifikasi Nabung</h2></div>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr class="text-center">
              <th> # </th>
              <th> Nama </th>
              <th> NIS </th>
              <th> Tanggal</th>
              <th> Jumlah</th>
              <th> Bukti </th>
              <th> Action</th>
            </tr>
          </thead>
          <tbody>
            {{-- {{dd($users)}} --}}
            @foreach ($reqnabung as $req)
            @if($req->status==='terverfikasi')

            <tr class="text-center">
              <td>{{ $loop->iteration }}</td>
              <td>{{$req->name }}</td>
              <td>{{$req->nis }}</td>
              <td>{{$req->created_at}}</td>
              <td>Rp{{$req->jlh_request}}</td>
              <td width="10%">{{$req->image}}
                <button type="submit" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#foto"><i class="fa-solid fa-eye"></i></button></td>
              </td>
              <td width="10%"><a href="/dashboard/adminnabung/{{$req->id_user}}"><button type="button" class="btn btn-info"><i class="fa-solid fa-dollar-sign"></i></button></a>
                </td>
            </tr>
            @endif
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="container px-2  mb-3"><h2>History Nabung</h2></div>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr class="text-center">
              <th> # </th>
              <th> Nama </th>
              <th> NIS </th>
              <th> Tanggal</th>
              <th> Jumlah</th>
              <th> Action</th>
            </tr>
          </thead>
          <tbody>
            {{-- {{dd($users)}} --}}
            @foreach ($history as $history)
            @if($history->debit==!NULL)
            <tr class="text-center">
              <td>{{ $loop->iteration }}</td>
              <td>{{$history->name }}</td>
              <td>{{$history->nis }}</td>
              <td>{{$history->created_at}}</td>
              <td>+{{$history->debit}}</td>
              <td width="10%"><a href="/dashboard/adminnabung/{{$history->id_user}}"><button type="button" class="btn btn-info"><i class="fa-solid fa-dollar-sign"></i></button></a></td>
            </tr>
            @elseif($history->kredit)
            @endif
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection