@extends('berita.layouts.main')

@section('container')
<div class="float-sm-start mx-4 mt-5 col-sm-3" id="main" style="background-color: #ffffff">
  <div class="row" id="kotak">
    <div class="float-sm-start" id="isi">
      <img style="width: 100%" src="img/kepala.jpg" alt="">
    </div>
  </div>
  
    <div class="container  justify-content-center pt-4 mt-5  px-0" >
      <div class="col-sm-3" style="background-color: rgba(196, 196, 196, 0.17);" id="bawah">
        <h2></h2>
      </div>
    </div>
  <div class="container  justify-content-center pt-1 mt-2  px-0" >
    <div class="col-sm-3" style="background-color: rgba(196, 196, 196, 0.17);" id="bawah">
      <h2>Berita Terpopuler</h2>
    </div>
  </div>
  <div class="row-sm mx-1 mt-3 pt-5">
    <div class="container ">
      <div class="card mb-2 border-0 mt-zz" style="max-width: 540px;" id="populer">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="img/contoh1.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
              </div>
            </div>
          </div>
        </div>
      <div class="card mb-2 border-0 pt-2 mt-5" style="max-width: 540px;" style="border-top: 1px solid black;" id="populer">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img/contoh1.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container  justify-content-center pt-4 mt-5  px-0" >
    <div class="col-sm-3" style="background-color: rgba(196, 196, 196, 0.17);" id="bawah">
      <h2>Link Terkait</h2>
    </div>
  </div>
  <div class="row-sm mx-1">
    <div class="col">
      <div class="d-flex justify-content-evenly pb-5" id="terkait">
        <ul class="list-group">
          <li> <img src="img/contoh1.jpg" class=" float-start" alt="..." style="height: 60px" style="width: 50px"></li>
          <li> <img src="img/contoh1.jpg" class=" float-start" alt="..." style="height: 60px" style="width: 50px"></li>
        </ul>
        <ul class="list-group">
          <li> <img src="img/contoh1.jpg" class=" float-start" alt="..." style="height: 60px" style="width: 50px"></li>
          <li> <img src="img/contoh1.jpg" class=" float-start" alt="..." style="height: 60px" style="width: 50px"></li>
        </ul>
        <ul class="list-group">
          <li> <img src="img/contoh1.jpg" class=" float-start" alt="..." style="height: 60px" style="width: 50px"></li>
          <li> <img src="img/contoh1.jpg" class=" float-start" alt="..." style="height: 60px" style="width: 50px"></li>
        </ul>
        
      </div>
    </div>
  </div>
</div>

<!-- bagian tengah -->
<div class="row justify-content-center mt-5 pt-3  mx-0 px-5  d-inline-block w-auto" style="background-color: #ffffff" id="tengah">
  <div class="container justify-content-center " style="background-color: rgba(196, 196, 196, 0.17);" id="blog">
    <h2>Berita Terkini</h2>
  </div>
  <div class="container pt-5 ">
    <div class="card mb-3 border-0 pb-5" style="max-width: 600px;" class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="img/contoh1.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text" style="border-top: 2px solid #000000">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="col-md-4">
          <img src="img/contoh1.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text" style="border-top: 2px solid #000000">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="col-md-4">
          <img src="img/contoh1.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text" style="border-top: 2px solid #000000">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="col-md-4">
          <img src="img/contoh1.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text" style="border-top: 2px solid #000000">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div><div class="col-md-4">
          <img src="img/contoh1.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text" style="border-top: 2px solid #000000">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="col-md-4">
          <img src="img/contoh1.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text" style="border-top: 2px solid #000000">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection