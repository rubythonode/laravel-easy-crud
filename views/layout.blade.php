<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Easy CRUD | powered by Gentella</title>
    
    <!-- Bootstrap -->
    <link href="/vendor/easy-crud/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/vendor/easy-crud/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/vendor/easy-crud/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/vendor/easy-crud/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="/vendor/easy-crud/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/vendor/easy-crud/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="/vendor/easy-crud/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <link href="/vendor/easy-crud/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ $url_base }}" class="site_title">
                <span>Easy CRUD!</span>
              </a>
            </div>

            <div class="clearfix"></div>
            
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  @foreach($models as $alias => $class)
                    <li class="">
                      <a>{{ $alias }} <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ $url_base }}/{{ str_replace('\\', '-', $class) }}">List</a></li>
                        <li><a href="{{ $url_base }}/{{ str_replace('\\', '-', $class) }}/create">Create</a></li>
                      </ul>
                    </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- page content -->
        <div class="right_col" role="main">
          @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <script src="/vendor/easy-crud/vendors/jquery/dist/jquery.min.js"></script>
    <script src="/vendor/easy-crud/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/vendor/easy-crud/js/custom.min.js"></script>
  </body>
</html>
