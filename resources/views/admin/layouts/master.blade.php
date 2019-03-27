<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tpl@ Cooking - @yield('title')</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{ asset('bower/bootstrap/dist/css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('bower/font-awesome/css/font-awesome.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{ asset('bower/Ionicons/css/ionicons.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('bower/admin-lte/dist/css/AdminLTE.min.css') }}">

        <link rel="stylesheet" href="{{ asset('bower/admin-lte/dist/css/skins/skin-blue.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/admin/custom.css') }}">
        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        @yield('custom_css')
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            @section('sidebar')
                <header class="main-header">
                    <!-- Logo -->
                    <a href="index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>T</b>PL</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Admin</b>TPL Cooking</span>
                    </a>

                    <!-- Header Navbar -->
                    <nav class="navbar navbar-static-top" role="navigation">
                        <!-- Sidebar toggle button-->
                        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                            <span class="sr-only">Toggle navigation</span>
                        </a>
                    <!-- Navbar Right Menu -->
                        <div class="navbar-custom-menu">
                            <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="./images/avatar.png" class="user-image">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">{{ Auth::user()->name }}</span>
                                </a>
                                <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="./images/avatar.png" class="img-circle">

                                    <p>
                                    Admin- Tpl@
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                                </ul>
                            </li>
                            <!-- /.messages-menu -->
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li>
                            </ul>
                        </div>
                    </nav>
                </header>

                <aside class="main-sidebar">

                    <!-- sidebar: style can be found in sidebar.less -->
                    <section class="sidebar">

                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel">
                        <div class="pull-left image">
                        <img src="./images/avatar.png" class="img-circle">
                        </div>
                        <div class="pull-left info">
                        <p>{{  Auth::user()->name }}</p>
                        <!-- Status -->
                        </div>
                    </div>

                    <!-- search form (Optional) -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                            </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->

                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="header">HEADER</li>
                        <!-- Optionally, you can add icons to the links -->
                        <li class="treeview">
                        <a href="#"><i class="fa fa-link"></i> <span>Quản lý Công thức</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('recipes.index')}}">Danh sách công thức</a></li>
                        </ul>
                        </li>
                        <li class="active">
                        <a href="{{ route('users.index') }}"><i class="fa fa-link"></i> <span>Quản lý người dùng</span>
                        </a>
                        </li>
                    </ul>
                    <!-- /.sidebar-menu -->
                    </section>
                    <!-- /.sidebar -->
                </aside>
            @show

            @yield('content')

            @section('footer')
                <!-- Main Footer -->
                <footer class="main-footer">
                    <!-- To the right -->
                    <div class="pull-right hidden-xs">
                    Anything you want
                    </div>
                    <!-- Default to the left -->
                    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
                </footer>
            @show
        </div>
        @section('script')
            <!-- jQuery 3 -->
            <script src="{{ asset('bower/jquery/dist/jquery.min.js') }} "></script>
            <!-- Bootstrap 3.3.7 -->
            <script src="{{ asset('bower/bootstrap/dist/js/bootstrap.min.js') }}"></script>
            <!-- AdminLTE App -->
            <script src="{{ asset('bower/admin-lte/dist/js/adminlte.min.js') }}"></script>

        @show
    </body>
</html>