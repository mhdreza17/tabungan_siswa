@extends('dashboard.layouts.main')

@section('container')

<div class="col-lg-12 grid-margin stretch-card">
<div class="card">
    <div class="card-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h2 class="box-title">Request Nabung</h2>
                        {{-- <table class="table table-bordered">
                            <thead>
                                <th> Tanggal</th>
                                <th> Setoran</th>
                                <th> Total </th>
                            </thead>
                            @foreach ($data_setor as $ds)
                                <tbody>
                                    <td>{{$ds->created_at}}</td>
                                    @if($ds->kredit==NULL)
                                        <td>+Rp{{$ds->debit}}</td>
                                    @elseif($ds->debit==NULL)
                                    <td>-Rp{{$ds->kredit}}</td>
                                    @endif
                                    <td>Rp{{$ds->saldo_akhir}}</td>
                                </tbody>
                            @endforeach
                        </table>
                        <div>
                        <br>
                            <a href="/setoranpdf" target="_blank"><button type="button" class="btn btn-success"  colspan="2">Cetak <i class="fas fa-print"></i></button></a>
                        </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        @if(($message = Session::get('success')))
        <div class="alert alert-success alert-block">	
          <strong>{{ $message }}</strong>
        </div>
      @endif
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">Kirim Bukti</h3>
                    <div>
                        <form action="/requestnabung" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="row mb-3">
                            <div class="col-2 mt-1">Jumlah Setoran</div>
                            <div class="col-6"><input class="form-control text-light" type="number" id="jlh_request" name="jlh_request" placeholder="mis:10000" required></div>
                        </div>
                        <div class="row">
                            <div class="col-2 mt-4">Input Gambar</div>
                            <div class="col-6"><img class="img-preview img-fluid mb-3 col-sm-5">
                                <input class="form-control @error('image') is-invalid @enderror text-light" type="file" id="image" name="image" onchange="previewImage()"required>
                                @error('image')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                                @enderror
                            </div>
                        </div>
                        @foreach($users as $user)
                        <input class="form-control" type="hidden" value="{{$user->id}}" id="id_user" name="id_user">
                        @endforeach
                        <button type="submit" class="btn btn-success my-2"  colspan="2">Kirim</button>
                        <br>
                        </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Sedang Verifikasi</h3>
                        <div>
                            <table class="table table-bordered">
                                <thead>
                                    <th> Tanggal</th>
                                    <th> Jumlah</th>
                                </thead>
                                @foreach ($reqnabung as $ds)
                                     @if($ds->status==='request')
                                    <tbody>
                                        <td>{{$ds->created_at}}</td>
                                        <td>{{$ds->jlh_request}}</td>
                                    </tbody>
                                    @endif
                                @endforeach
                            </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="white-box">
                                <h3 class="box-title">Sudah Verifikasi</h3>
                            <div>
                                <table class="table table-bordered">
                                    <thead>
                                        <th> Tanggal</th>
                                        <th> Jumlah</th>
                                    </thead>
                                    @foreach ($reqnabung as $ds)
                                        @if($ds->status ==='terverfikasi')
                                        <tbody>
                                            <td>{{$ds->created_at}}</td>
                                            <td>{{$ds->jlh_request}}</td>
                                        </tbody>
                                        @endif
                                    @endforeach
                                </table>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>



</div>
    
<script>
function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>


@endsection