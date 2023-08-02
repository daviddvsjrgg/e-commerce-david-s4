<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>



    <!-- {{ asset('Template/AdminLTE/') }} -->

    <!-- Google Font: Source Sans Pro -->

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome -->

    <link rel="stylesheet" href="{{ asset('Template/AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">

    <!-- Ionicons -->

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Tempusdominus Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- iCheck -->

    <link rel="stylesheet" href="{{ asset('Template/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

    <!-- JQVMap -->

    <link rel="stylesheet" href="{{ asset('Template/AdminLTE/plugins/jqvmap/jqvmap.min.css') }}">

    <!-- Theme style -->

    <link rel="stylesheet" href="{{ asset('Template/AdminLTE/dist/css/adminlte.min.css') }}">

    <!-- overlayScrollbars -->

    <link rel="stylesheet"
        href="{{ asset('Template/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

    <!-- Daterange picker -->

    <link rel="stylesheet" href="{{ asset('Template/AdminLTE/plugins/daterangepicker/daterangepicker.css') }}">

    <!-- summernote -->

    <link rel="stylesheet" href="{{ asset('Template/AdminLTE/plugins/summernote/summernote-bs4.min.css') }}">

</head>



<body class="hold-transition sidebar-mini layout-fixed">



    <div class="wrapper">



        <!-- Preloader -->

        <div class="preloader flex-column justify-content-center align-items-center">

            <img class="animation__shake rounded circle rounded-circle" src="{{ asset('img/logo-kue.png') }}"
                alt="AdminLTELogo" height="60" width="60">

        </div>



        <!-- Navbar -->

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <!-- Left navbar links -->

            <ul class="navbar-nav">

                <li class="nav-item">

                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>

                </li>

                <li class="nav-item d-none d-sm-inline-block">

                    <a href="/" class="nav-link">QueTag Page</a>

                </li>

            </ul>



            <!-- Right navbar links -->

            <ul class="navbar-nav ml-auto">

                <!-- Navbar Search -->

                <li class="nav-item">

                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">

                        <i class="fas fa-search"></i>

                    </a>

                    <div class="navbar-search-block">

                        <form class="form-inline">

                            <div class="input-group input-group-sm">

                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">

                                <div class="input-group-append">

                                    <button class="btn btn-navbar" type="submit">

                                        <i class="fas fa-search"></i>

                                    </button>

                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">

                                        <i class="fas fa-times"></i>

                                    </button>

                                </div>

                            </div>

                        </form>

                    </div>

                </li>



        </nav>

        <!-- /.navbar -->



        <!-- Main Sidebar Container -->

        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- Brand Logo -->

            <a href="" class="brand-link">

                <img src="{{ asset('img/logo-kue.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">

                <span class="brand-text font-weight-light">QueTag</span>

            </a>



            <!-- Sidebar -->

            <div class="sidebar">

                <!-- Sidebar user panel (optional) -->

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                    <div class="image">

                        <img src="{{ asset('img/akun.png') }}" class="img-circle elevation-2" alt="User Image">

                    </div>

                    <div class="info">

                        <a href="#" class="d-block">David Dwiyanto</a>

                    </div>

                </div>

                <div class="user-panel">


                    <div class="info mb-4">
                        <a href="{{ route ('kategori.index') }}" class="d-block">Tabel Kategori</a>
                    </div>
                </div>
                <div class="user-panel">
                    <div class="info mb-4">
                        <a href="{{ route ('pelanggan.index') }}" class="d-block">Tabel Pelanggan</a>
                    </div>
                </div>
                <div class="user-panel">
                    <div class="info mb-4">
                        <a href="{{ route ('detail.index') }}" class="d-block">Detail Penjualan</a>
                    </div>
                </div>

            </div>
            <!-- /.sidebar-menu -->

    </div>

    <!-- /.sidebar -->

    </aside>



    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">



        <!-- Content -->

        @yield('content')

        <!-- End Content -->



        <!-- Control Sidebar -->

        <aside class="control-sidebar control-sidebar-dark">

            <!-- Control sidebar content goes here -->

        </aside>

        <!-- /.control-sidebar -->

    </div>

    <!-- ./wrapper -->





    <!-- jQuery -->

    <script src="{{ asset('Template/AdminLTE/plugins/jquery/jquery.min.js') }}"></script>

    <!-- jQuery UI 1.11.4 -->

    <script src="{{ asset('Template/AdminLTE/plugins/jquery-ui/jquery-ui.min.j') }}s"></script>

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <script>
        $.widget.bridge('uibutton', $.ui.button)

    </script>

    <!-- Bootstrap 4 -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


    <!-- ChartJS -->

    <script src="{{ asset('Template/AdminLTE/plugins/chart.js/Chart.min.js') }}"></script>

    <!-- Sparkline -->

    <script src="{{ asset('Template/AdminLTE/plugins/sparklines/sparkline.js') }}"></script>

    <!-- JQVMap -->

    <script src="{{ asset('Template/AdminLTE/plugins/jqvmap/jquery.vmap.min.js') }}"></script>

    <script src="{{ asset('Template/AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

    <!-- jQuery Knob Chart -->

    <script src="{{ asset('Template/AdminLTE/plugins/jquery-knob/jquery.knob.min.js') }}"></script>

    <!-- daterangepicker -->

    <script src="{{ asset('Template/AdminLTE/plugins/moment/moment.min.js') }}"></script>

    <script src="{{ asset('Template/AdminLTE/plugins/daterangepicker/daterangepicker.js') }}"></script>

    <!-- Tempusdominus Bootstrap 4 -->

    <script
        src="{{ asset('Template/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}">

    </script>

    <!-- Summernote -->

    <script src="{{ asset('Template/AdminLTE/plugins/summernote/summernote-bs4.min.js') }}"></script>

    <!-- overlayScrollbars -->

    <script src="{{ asset('Template/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}">

    </script>

    <!-- AdminLTE App -->

    <script src="{{ asset('Template/AdminLTE/dist/js/adminlte.js') }}"></script>




    <script>
        function previewImage() {

            const gambarKategori = document.querySelector('#gambarKategori');

            const imgPreview = document.querySelector('.img-preview');
            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(gambarKategori.files[0]);
            oFReader.onload = function (oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }

        }

    </script>



</body>



</html>
