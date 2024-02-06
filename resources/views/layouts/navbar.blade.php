<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>H!PET</title>
  <link href="{{ asset('admin_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="{{ asset('admin_assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
  <div class="container">
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
      
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>
  
  <span class="navbar-brand">
        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/cea7fdf9-5285-4ee8-9b9c-0b332396d962/dgu20r0-1c6fe1ac-4ea7-4c92-8642-340021edd234.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2NlYTdmZGY5LTUyODUtNGVlOC05YjljLTBiMzMyMzk2ZDk2MlwvZGd1MjByMC0xYzZmZTFhYy00ZWE3LTRjOTItODY0Mi0zNDAwMjFlZGQyMzQucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.oSEuanrqyfHYMFEqqER0v1F8sy2yQw7Z_FAtKj5OC9Q" alt="Your Image">
      </span>
      
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" href="http://127.0.0.1:8000/layanan">Layanan Kami</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="http://127.0.0.1:8000/dokter">Dokter Kami</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="http://127.0.0.1:8000/kesehatan">Kesehatan Hewan</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="http://127.0.0.1:8000/kontak">Kontak Kami</a>
        </li>
  
    <div class="topbar-divider d-none d-sm-block"></div>
  
</li>
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 text-gray-600">
          {{ auth()->user()->name }}
          <br>
          <small>{{ auth()->user()->level }}</small>
        </span>
        <img class="img-profile rounded-circle" src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/img/undraw_profile.svg">
      </a>

      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="/profile">
          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
          Profil
        </a>
        <a class="dropdown-item" href="#">
          <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
          Pengaturan
        </a>
        <a class="dropdown-item" href="#">
          <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
          Riwayat Aktivitas
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ url('/login') }}">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Logout
        </a>
      </div>
    </li>
  
  </ul>
  <img class="bottom-right-image" src="https://www.pngall.com/wp-content/uploads/5/British-Shorthair-Cat.png" alt="Bottom Right Image">
</nav>