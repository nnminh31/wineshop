<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
    <link rel="icon" href="https://ruouthuonghieu.com/wp-content/uploads/2020/06/xLayer1-100x100.png.pagespeed.ic.6RhueP9J3j.webp" sizes="32x32">
    <link rel="icon" href="https://ruouthuonghieu.com/wp-content/uploads/2020/06/xLayer1.png.pagespeed.ic.OIk334m8Sy.webp" sizes="192x192">
    <!-- Custom fonts for this template-->
    <link href="https://startbootstrap.github.io/startbootstrap-sb-admin-2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="https://startbootstrap.github.io/startbootstrap-sb-admin-2/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.3.4/css/bootstrap.min.css"> -->

    <style>
        .dataTables_info {
            display: none;
        }

        @media only screen and (max-width: 576px) {
            .next_previous {
                width: 50% !important;
            }
        }

        .icon-next a:hover,
        .icon-prev a:hover,
        .icon-next a,
        .icon-prev a {
            float: left;
            padding: 0.375rem 0;
        }

        .icon-next a.disabled {
            color: #aaa;
        }
    </style>
    <style>
        .table-responsive::-webkit-scrollbar {
            -webkit-appearance: none;
        }

        .table-responsive::-webkit-scrollbar:vertical {
            width: 12px;
        }

        .table-responsive::-webkit-scrollbar:horizontal {
            height: 12px;
        }

        .table-responsive::-webkit-scrollbar-thumb {
            background-color: rgba(0, 0, 0, .5);
            border-radius: 10px;
            border: 2px solid #ffffff;
        }

        .table-responsive::-webkit-scrollbar-track {
            border-radius: 10px;
            background-color: #ffffff;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.users.index')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Rượu thương hiệu</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="javascript:;">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Pages
            </div>

            <!-- Nav Item - Products Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('admin.products.index')}}">
                    <i class="fas fa-solid fa-box"></i>
                    <span>Products</span>
                </a>

            </li>

            <!-- Nav Item - Orders Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('admin.orders.index')}}">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Orders</span>
                </a>
            </li>
            <!-- Nav Item - User Categories Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('admin.brands.index')}}">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Brands</span>
                </a>
            </li>
            <!-- Nav Item - User Categories Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('admin.categories.index')}}">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Categories</span>
                </a>
            </li>
            <!-- Nav Item - User Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('admin.users.index')}}">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Users</span>
                </a>
            </li>
            <!-- Nav Item - User Categories Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Roles</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->

            <!-- Divider -->
            <!-- <hr class="sidebar-divider d-none d-md-block"> -->

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <!-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components,
                    and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to
                    Pro!</a>
            </div> -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <!-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
 
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>

                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li> -->

                        <!-- Nav Item - Messages -->
                        <!-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>

                                <span class="badge badge-danger badge-counter">7</span>
                            </a>

                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/img/undraw_profile_1.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/img/undraw_profile_2.svg" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li> -->

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::guard('admin')->user()->name}}</span>
                                <img class="img-profile rounded-circle" src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <style>
                        .icon-prev a:hover {
                            color: red
                        }
                    </style>
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 next_previous">
                            <h1 class="h3 mb-2 text-gray-800">@yield('block')</h1>
                        </div>
                        @if(isset($prev) && isset($next))
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 next_previous">
                            <div class="" style="float: right">
                                <span class="icon-prev" aria-hidden="true" style="float: left; margin-right: 10px">
                                    @if($type == 'order')
                                    <a class="btn <?php if ($prev->count() != 0) {
                                                        echo '';
                                                    } else echo 'disabled';
                                                    ?>" href="<?php if ($prev->count() != 0) {
                                                                    echo $prev[0]->id;
                                                                } else echo 'javascript:void(0)';
                                                                ?>" style="<?php if ($prev->count() != 0) {
                                                                    echo "";
                                                                } else echo "cursor: default;";
                                                                ?>">
                                        <i class="fas fa-arrow-left" style="font-size: 18px;"></i>
                                    </a>
                                    @else
                                    <a class="btn <?php if ($prev->count() != 0) {
                                                        echo '';
                                                    } else echo 'disabled';
                                                    ?>" href="<?php if ($prev->count() != 0) {
                                                                    echo $prev[0]->slug;
                                                                } else echo 'javascript:void(0)';
                                                                ?>" style="<?php if ($prev->count() != 0) {
                                                                    echo "";
                                                                } else echo "cursor: default;";
                                                                ?>">
                                        <i class="fas fa-arrow-left" style="font-size: 18px;"></i>
                                    </a>
                                    @endif
                                </span>
                                <span class="icon-next" aria-hidden="true" style="float: left">
                                    @if($type == 'order')
                                    <a class="btn <?php if ($next->count() != 0) {
                                                        echo '';
                                                    } else echo 'disabled';
                                                    ?>" href="<?php if ($next->count() != 0) {
                                                                    echo $next[0]->id;
                                                                } else echo 'javascript:void(0)';
                                                                ?>" style="<?php if ($next->count() != 0) {
                                                                    echo "";
                                                                } else echo "cursor: default;";
                                                                ?>">
                                        <i class="fas fa-arrow-right" style="font-size: 18px;"></i>
                                    </a>
                                    @else
                                    <a class="btn <?php if ($next->count() != 0) {
                                                        echo '';
                                                    } else echo 'disabled';
                                                    ?>" href="<?php if ($next->count() != 0) {
                                                                    echo $next[0]->slug;
                                                                } else echo 'javascript:void(0)';
                                                                ?>" style="<?php if ($next->count() != 0) {
                                                                    echo "";
                                                                } else echo "cursor: default;";
                                                                ?>">
                                        <i class="fas fa-arrow-right" style="font-size: 18px;"></i>
                                    </a>
                                    @endif
                                </span>
                            </div>
                        </div>
                        @endif
                    </div>

                    <!-- DataTales Example -->
                    @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © Your Website 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{route('admin.logout')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/vendor/jquery/jquery.min.js"></script>
    <script src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/js/sb-admin-2.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
        var div = document.getElementById('table-responsive');

        var hasHorizontalScrollbar = div.scrollWidth > div.clientWidth;
        var hasVerticalScrollbar = div.scrollHeight > div.clientHeight;

        if (hasHorizontalScrollbar) {
            div.style.marginBottom = "15px"
        }
    </script>

</body>

</html>