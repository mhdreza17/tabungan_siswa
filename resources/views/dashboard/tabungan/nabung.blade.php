@extends('dashboard.layouts.main')

@include('dashboard.components.modalnabung')
@include('dashboard.components.modaltarik')

@section('container')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      @if(($message = Session::get('errors')))
        <div class="alert alert-danger alert-block">	
		      <strong>{{ $message }}</strong>
	      </div>
      @elseif(($message = Session::get('success')))
        <div class="alert alert-success alert-block">	
          <strong>{{ $message }}</strong>
        </div>
      @endif
      <div class="table-responsive">        
          <div class=" pt-2 mb-3"> <h2><a href="/dashboard/tabungan"><i class="fa-solid fa-arrow-left"></i></a>   Data Tabungan</h2></div>
          @foreach($user as $usr)
            <div class="px-2">
            <h1 >{{$usr->name}}</h1>
            <div class="row">
              
              <div class="col-1"><button type="submit" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addnabung"><h4>Setor</h4></button></div>
              {{-- </form> --}}
              <div class="col"><button type="submit" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addtarik"><h4>Tarik</h4> </button></div>
            </div>
            <div class="mt-5">
              <table class="table table-bordered">
                <thead>
                  <tr class="text-center">
                    <th> # </th>
                    <th> Tanggal Transaksi </th>
                    <th>Jumlah Transaksi</th>
                    <th>Total Tabungan</th>
                    <th colspan="2">Bukti Transaksi</th>
                  </tr>
                </thead>
                <tbody>
                  {{-- {{dd($users)}} --}}
                  {{-- @foreach ($user as $usr) --}}
                  @foreach($tabungan as $tbgn)
                  <tr class="text-center">
                    
                    <td>{{$loop->iteration}}</td>
                    <td>{{$tbgn->created_at}}</td>
                    @if($tbgn->kredit==NULL)
                        <td>+Rp{{$tbgn->debit}}</td>
                    @elseif($tbgn->debit==NULL)
                        <td>-Rp{{$tbgn->kredit}}</td>
                    @endif
                    <td>Rp{{$tbgn->saldo_akhir}}</td>
                    @if($tbgn->image==NULL)
                        <td>-</td>
                    @elseif($tbgn->image)
                        <td>bukti.jpg <button type="button" class="btn btn-info">download</td>
                    @endif
                    
                    {{-- <td><button type="button" class="btn btn-info">download</button></td> --}}
                    @endforeach
                    {{-- <td>{{ $loop->iteration }}</td>
                    <td>{{$usr->name }}</td>
                    <td>{{$usr->nis }}</td> --}}
      
                    </td>
                  </tr>
                  {{-- @endforeach --}}
                </tbody>
              </table>
            </div>
            <div class="my-3">
              <a href="/dashboard/cetakpdfuser/{{$usr->id}}" target="_blank">
              <button type="button" class="btn btn-info">download data</button></a>
            </div>
            @endforeach
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection