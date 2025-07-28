<header class="header">
  <!-- Top bar -->
  <div class="py-2 bg-dark text-white">
    <div class="container py-1">
      <div class="row align-items-center">
        <div class="col-lg-4">
          <ul class="list-inline mb-0 text-sm">
            <li class="list-inline-item"><a class="reset-anchor" href="/">MARI NABUNG</a></li>
          </ul>
        </div>
        <div class="col-lg-4 d-none d-lg-block text-center">
          <ul class="list-inline mb-0 small">
            <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-youtube"></i></a></li>
            <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-vimeo-v"></i></a></li>
          </ul>
        </div>
        @auth
        <div class="col-lg-4 d-none d-lg-block text-end">
          <div class="dropdown text-sm"><a class="reset-anchor dropdown-toggle" id="destinations" href="#"
              data-bs-toggle="dropdown" data-bs-display="static" aria-haspopup="true" aria-expanded="false"><i
                class="fas fa-globe-americas me-2"></i>Option</a>
            <div class="dropdown-menu dropdown-menu-end mt-3" aria-labelledby="destinations">
              <a class="dropdown-item text-sm" href="/dashboard">Back to Dashboard</a>
              <a class="dropdown-item text-sm" href="#!">Logout</a>
            </div>
          </div>
        </div>
        @else
        <div class="col-lg-4 d-none d-lg-block text-end">
          <div class="text-sm"><a class="reset-anchor" id="destinations" href="/login" data-bs-display="static"
              aria-haspopup="true" aria-expanded="false"><i class="fas fa-globe-americas me-2"></i>Login</a>
          </div>
        </div>
        @endauth
      </div>
    </div>
  </div>
</header>