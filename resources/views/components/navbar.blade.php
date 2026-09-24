<nav class="navbar navbar-expand-lg bg-siakad navbar-dark shadow-sm py-3">
  <div class="container">
    <a class="navbar-brand fw-bold text-white fs-5" href="{{ url('/user') }}">Data Mahasiswa</a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('user') ? 'active fw-semibold text-white' : 'text-white-50' }}" href="{{ url('/user') }}">
            List User
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('user/create') ? 'active fw-semibold text-white' : 'text-white-50' }}" href="{{ url('/user/create') }}">
            Tambah User
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>