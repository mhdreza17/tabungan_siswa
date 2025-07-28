@extends('layouts.main')

@section('container')
<section class="py-0">
  <div class="container py-0">
    <!-- Home listing -->
    <div class="row align-items-stretch gx-lg-0">
      <div class="col-lg-6 order-2 order-lg-1 bg-full-left">
        <div class="h-100 bg-light d-flex align-items-center">
          <div class="py-5 px-4">
            <p class="text-primary font-weight-bold small text-uppercase mb-2">blog</p>
            <h3 class="h4"> <a class="text-reset" href="#">Mari Nabung!</a></h3>
            <div class="text-muted">
              <p>Perkembangan teknologi memberi pengaruh besar bagi segala aspek kehidupan khususnya aspek pendidikan.
                Hal tersebut dapat diimplementasikan di lingkungan sekolah tentang cara menabung yang efektif dan
                efisien. Sistem menabung yang selama ini kita lakukan pada masa sekolah adalah sistem manual, yaitu
                masih dicatat didalam buku. Cara seperti ini ternyata tidak efektif dikarenakan data yang ada didalam
                buku bisa hilang, rusak, ataupun tidak valid. Selain itu, terjadi penumpukan siswa diloket pembayaran
                akibat penyetoran tabungan secara manual. Berdasarkan hal tersebut, kami ingin memudahkan para siswa
                untuk menabung dengan membuat aplikasi website yang bernama tabungan sekolah. </p>
            </div>
            <ul class="list-inline small text-uppercase mb-0">
              <li class="list-inline-item align-middle"><img class="rounded-circle shadow-sm"
                  src="/blog/img/person-1.jpg" alt="" width="30" /></li>
              <li class="list-inline-item me-0 text-gray align-middle">By </li>
              <li class="list-inline-item align-middle me-0"><a class="fw-bold reset-anchor" href="#!">Kelompok 9</a>
              </li>
              <li class="list-inline-item text-gray align-middle me-0">|</li>
              <li class="list-inline-item text-gray align-middle">June, 2022</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2"><a class="d-block h-100 bg-center bg-cover" href="post.html"
          style="background: url(https://source.unsplash.com/1080x720?school)"></a></div>
    </div>
  </div>
</section>
@endsection