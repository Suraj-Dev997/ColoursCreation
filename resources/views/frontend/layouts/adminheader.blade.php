<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">




    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ url('frontend/Adminstyle/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ url('frontend/Adminstyle/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet"
        href="{{ url('frontend/Adminstyle/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="{{ url('frontend/Adminstyle/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ url('frontend/Adminstyle/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet"
        href="{{ url('frontend/Adminstyle/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet"
        href="{{ url('frontend/Adminstyle/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('frontend/Adminstyle/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet"
        href="{{ url('frontend/Adminstyle/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet"
        href="{{ url('frontend/Adminstyle/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ url('frontend/Adminstyle/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/Adminstyle/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet"
        href="{{ url('frontend/Adminstyle/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('frontend/Adminstyle/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/Adminstyle/dist/css/style.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-navy">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>



            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-user-circle"></i>

                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="{{ url('frontend/Adminstyle/dist/img/avatar5.png') }}" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Welcome {{session('username')}}

                                    </h3>
                                    <p class="text-sm"></p>

                                </div>
                            </div>
                            <!-- Message End -->

                            <div class="dropdown-divider"></div>
                            <a href="{{ url('/logout') }}" class="dropdown-item">
                                <i class="fas fa-sign-out-alt mr-2"></i>Logout

                            </a>
                        </a>

                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->


            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="UserManagement.html" class="brand-link text-center">

                <h5>Admin Panel</h5>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->


                <!-- Sidebar Menu -->
                <nav class="mt-2 sidbr">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false" id="nav-sidebar">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item ">
                            <a href="{{ url('/admindash') }}" class="nav-link  ">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Manage Contacts
                                </p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ url('/gallerymange') }}" class="nav-link ">
                                <i class="nav-icon fas fa-image"></i>
                                <p>
                                    Manage Photo Gallery
                                </p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ url('/videomange') }}" class="nav-link ">
                                <i class="nav-icon fas fa-video"></i>
                                <p>
                                    Manage Video Gallery
                                </p>
                            </a>
                        </li>
                        {{-- <li class="nav-item has-treeview">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Report
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="DocReport.html" class="nav-link">
                                        <i class="far fa-file nav-icon"></i>
                                        <p>Doctor Report</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="SurvayReport.html" class="nav-link">
                                        <i class="far fa-file nav-icon"></i>
                                        <p>Survay Report</p>
                                    </a>
                                </li>
                            </ul>
                        </li> --}}
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>