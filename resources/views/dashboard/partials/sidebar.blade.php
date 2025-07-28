<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo text-decoration-none" href="dashboard">MARI NABUNG</a>
    <a class="sidebar-brand brand-logo-mini text-decoration-none" href="index.html">TS</a>
  </div>
  <ul class="nav">
    <li class="nav-item profile">
      <div class="profile-desc">
        <div class="profile-pic">
          <div class="count-indicator">
            <img class="img-xs rounded-circle " src={{ asset("assets/images/faces/face15.jpg") }} alt="">
            <span class="count bg-success"></span>
          </div>
          <div class="profile-name">
            <h5 class="mb-0 font-weight-normal">{{ auth()->user()->name }}</h5>
            <span>*Online*</span>
          </div>
        </div>
      </div>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">Navigation</span>
    </li>
    @if (auth()->user()->status == 'admin')
    <li class="nav-item menu-items">
      <a class="nav-link {{ Request::is('/dashboard') ? 'active' : '' }}" href="/dashboard">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="mdi mdi-currency-usd"></i>
        </span>
        <span class="menu-title">Tabungan</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link {{ Request::is('/dashboard/tabungan*') ? 'active' : '' }}"
              href="/dashboard/tabungan">Data Tabungan</a></li>
          <li class="nav-item"> <a class="nav-link {{ Request::is('/dashboard/nabung*') ? 'active' : '' }}"
              href="/dashboard/requestnabung">Request Nabung</a></li>
        </ul>
      </div>
    </li>
    @else
    {{-- user --}}
    <li class="nav-item menu-items">
      <a class="nav-link {{ Request::is('/dashboard') ? 'active' : '' }}" href="/dashboard">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link {{ Request::is('/tabungan*') ? 'active' : '' }}" href="/tabungan">
        <span class="menu-icon">
          <i class="mdi mdi-currency-usd"></i>
        </span>
        <span class="menu-title">History</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link {{ Request::is('/viewrequest*') ? 'active' : '' }}" href="/viewrequest">
        <span class="menu-icon">
          <i class="mdi mdi-currency-usd"></i>
        </span>
        <span class="menu-title">Request Nabung</span>
      </a>
    </li>
    @endif
    <li class="nav-item menu-items">
      <a class="nav-link {{ Request::is('/dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
        <span class="menu-icon">
          <i class="mdi mdi-newspaper"></i>
        </span>
        <span class="menu-title">Kelola Berita</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
        class="nav-link" type="submit">
        <span class="menu-icon">
          <i class="mdi mdi mdi-logout"></i>
        </span>
        {{-- <button type="submit" class="nav-link px-3 bg-dark border-0">Logout<span
            data-feather="log-out"></span></a></button> --}}
      <span class="menu-title">Logout</span>
      </a>
      <form id="logout-form" action="/logout" method="post" style="display: none">
        @csrf
      </form>
    </li>
  </ul>
</nav>