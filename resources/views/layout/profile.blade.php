<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>DASHBOARD - SISPENTAAN </title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('templates/') }}/assets/img/stahlogo.png" rel="icon">
    <link href="{{ asset('templates/') }}/assets/img/stahlogo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('dashboardadmin/') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dashboardadmin/') }}/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav"></ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            {{ Auth::user()->name }} <br>
                            <a>SISPENTAAN</a>
                            <br>
                            <img src="{{ asset('dashboardadmin/') }}/dist/img/stahlogo.png" class="img-circle"
                                width="100px">
                        </li>
                        <!-- Menu Body -->
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    <button id="logout-form" action="{{ route('logout') }}"
                                        method="POST">KELUAR</button>
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
            </ul>


        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/dashboard" class="brand-link">
                <span class="hidden-xs"><i>------- Hallo {{ Auth::user()->name }} -------</i></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <a href="/dashboard" class="brand-link">
                    <img src="{{ asset('dashboardadmin/') }}/dist/img/stahlogo.png" alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3" style="opacity: .8">
                    {{-- <span class="brand-text font-weight-light">
                        @if (auth()->user()->level == 1)
                            Admin UKM
                        @elseif (auth()->user()->level==2)
                            Pengunjung UKM
                        @endif
                    </span> --}}
                </a>
            </div>
            {{-- Menu Footer --}}


            @include('layout.nav')

            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            @yield('content')

        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer no-print">
            <strong>Copyright &copy; 2021 <a href="#">SISPENTAAN UKM STAH</a></strong> NEGERI MPU KUTURAN SINGARAJA
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('dashboardadmin/') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('dashboardadmin/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dashboardadmin/') }}/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dashboardadmin/') }}/dist/js/demo.js"></script>
</body>

</html>
