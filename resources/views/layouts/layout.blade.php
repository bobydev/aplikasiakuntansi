<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CV MAKMUR GROUP</title>

    <!-- Scripts -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js" type="text/javascript" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/sb-admin-2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/sb-admin-2.min.css') }}">
    <link type="text/css" href="{{ asset('asset/vendor/datatables/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <link type="text/css" href="{{ asset('asset/vendor/datatables/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{ asset('asset/vendor/datatables/css/select.bootstrap4.css')}}" rel="stylesheet"> 
    <link href="{{ asset('asset/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">  

</head>
<body>
   
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <div class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
          <img src="{{ asset('asset/mg_logo.png')}}" width="70">
        </div>
        <div class="sidebar-brand-text">MAKMUR GROUP™</div>
      </div>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="fas fa-fw fa-folder"></i>
          <span>Menu Penjualan</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('barang') }}">Data Produk</a>
            <a class="collapse-item" href="{{ route('baranglaku') }}">Data Penjualan</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-folder"></i>
          <span>Menu Master</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('user') }}">Data Pengguna</a>
            <a class="collapse-item" href="{{ route('akun') }}">Data Akun Rekening</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-folder"></i>
          <span>Menu Transaksi</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('kasmasuk') }}">Transaksi Kas Masuk</a>
            <a class="collapse-item" href="{{ route('kaskeluar') }}">Transaksi Kas Keluar</a>
            <a class="collapse-item" href="{{ route('bukubesar') }}">Buku Besar</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="{{route('laporan')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Laporan</span></a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          <span>Keluar</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block my-3">

      <span class="fas fa-sm d-flex align-items-center justify-content-center text-white">DIBUAT OLEH KELOMPOK 3</span>
      <span class="fas fa-sm d-flex align-items-center justify-content-center text-white">ANGGOTA KELOMPOK:</span>

      <hr class="d-none d-md-block my-1">

      <span class="fas fa-sm d-flex align-items-center justify-content-center text-white">ANNISA ADELIA</span>
      <span class="fas fa-sm d-flex align-items-center justify-content-center text-white">BOBY APRESPA</span>
      <span class="fas fa-sm d-flex align-items-center justify-content-center text-white">FARROH MAULIDA Z.</span>
      <span class="fas fa-sm d-flex align-items-center justify-content-center text-white">HASTI FITRIA UTAMI</span>
      <span class="fas fa-sm d-flex align-items-center justify-content-center text-white">VERA NURAENI<br></span>

      <hr class="sidebar-divider my-3">

      <span class="fas fa-sm d-flex align-items-center justify-content-center text-white">COPYRIGHT ©2020</span>
    </ul>
    <!-- End of Sidebar -->


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-info topbar mb-4 static-top shadow">

          <div class="topbar-divider"></div>

          <h5>Sistem Informasi Penjualan Elektronik</h5>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">            

            <!-- Nav Item - User Information -->
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link text-white" href="{{ route('home') }}" role="button">
                <span class="mr-2 d-none d-lg-inline text-white-600 small">{{ Auth::user()->name }}</span>
                <img class="img-profile rounded-circle" src="{{ asset('asset/avatar.png')}}">
              </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
    <main class="py-4">
            @yield('content')
    </main>
    </div>
   <!-- Bootstrap core JavaScript--> 
   <script src="{{ asset('asset/vendor/jquery/jquery.js')}}"></script> 
   <script src="{{ asset('asset/vendor/jquery/jquery.min.js')}}"></script> 
   <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script> 
   <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script> 
   <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.min.js')}}"></script> 

   <!-- Core plugin JavaScript--> 
   <script src="{{ asset('asset/vendor/jquery-easing/jquery.easing.min.js')}}"></script> 

   <!-- Custom scripts for all pages--> 
   <script src="{{ asset('asset/js/sb-admin-2.js')}}"></script> 
   <script src="{{ asset('asset/js/sb-admin-2.min.js')}}"></script> 

   <!-- Page level plugins --> 
   <script src="{{ asset('asset/vendor/chart.js/Chart.min.js')}}"></script>
   <script src="{{ asset('asset/vendor/datatables/jquery.dataTables.js')}}"></script>  
   <script src="{{ asset('asset/vendor/datatables/jquery.dataTables.min.js')}}"></script> 
   <script src="{{ asset('asset/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
   <script src="{{ asset('asset/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script> 

   <!-- Page level custom scripts --> 
   <script src="{{ asset('asset/js/demo/chart-area-demo.js')}}"></script> 
   <script src="{{ asset('asset/js/demo/chart-pie-demo.js')}}"></script> 
   <script src="{{ asset('asset/js/demo/datatables-demo.js')}}"></script>
</body>
</html>
