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
              <a class="dropdown-item text-sm" href="/logout"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                type="submit">Logout</a>
              <form id="logout-form" action="/logout" method="post" style="display: none">
                @csrf
              </form>
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
  <!-- Navbar 1 -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white py-4">
    <div class="container text-center"><a class="navbar-brand mx-auto" href="#"><img src="/blog/img/nabungwak.png" alt=""
          width="400">

      </a></div>
  </nav>
  <!-- Navbar 2 -->
  <nav class="navbar navbar-expand-lg navbar-light border-gray py-2 bg-light">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right mx-auto border-0" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item px-1">
            <!-- Link--><a class="nav-link {{ Request::is('index') ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item px-1">
            <!-- Link--><a class="nav-link {{ Request::is('posts') ? 'active' : '' }}" href="/posts">Post</a>
          </li>
          <li class="nav-item px-1">
            <!-- Link--><a class="nav-link {{ Request::is('categories') ? 'active' : '' }}"
              href="/categories">Category</a>
          </li>
          <li class="nav-item px-1 dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" href="#"
              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
            <div class="dropdown-menu text-center text-lg-start shadow-sm" aria-labelledby="navbarDropdownMenuLink"><a
                class="dropdown-item" href="/">Home</a><a class="dropdown-item" href="/posts">Post</a><a
                class="dropdown-item" href="/categories">Category</a></div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>