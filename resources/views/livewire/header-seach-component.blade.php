<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Admin Page</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('asset/plugins/images/favicon.png')}}">
    <!-- Custom CSS -->
    <link href="{{ asset('asset/plugins/bower_components/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css')}}">
    <!-- Custom CSS -->
    <link href="{{ asset('asset/css/style.min.css')}}" rel="stylesheet">
    <link href="{{ asset('asset/css/styleOrderDetail.css')}}" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="{{ asset('asset/plugins/images/logo-icon.png')}}" alt="homepage" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="{{ asset('asset/plugins/images/logo-text.png')}}" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                   
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <!-- <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li> -->
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="{{ asset('asset/plugins/images/users/redpanda.jpg')}}" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium">Admin</span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.html"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.html"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Quản lý người dùng</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="basic-table.html"
                                aria-expanded="false">
                                <i class="fab fa-product-hunt" aria-hidden="true"></i>
                                <span class="hide-menu">Tất cả sản phẩm</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="fontawesome.html"
                                aria-expanded="false">
                                <i class="fas fa-list-alt" aria-hidden="true"></i>
                                <span class="hide-menu">Danh mục sản phẩm</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="map-google.html"
                                aria-expanded="false">
                                <i class="fas fa-clipboard-list" aria-hidden="true"></i>
                                <span class="hide-menu">Đơn hàng</span>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <!-- <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Dashboard</a></li>
                            </ol>
                        </div>
                    </div> -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Three charts -->
                <!-- ============================================================== -->
                <class class="row justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Tổng doanh thu</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    
                                </li>
                                <li class="ms-auto"><span class="counter text-success">659</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Tổng số đơn hàng đã bán</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <i class="fa-solid fa-receipt"></i>
                                </li>
                                <li class="ms-auto"><span class="counter text-purple">869</span></li>
                            </ul>
                        </div>
                    </div>
                    
                </class>
                <!-- ============================================================== -->
                <!-- PRODUCTS YEARLY SALES -->
                <!-- ============================================================== -->
                <!-- <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Products Yearly Sales</h3>
                            <div class="d-md-flex">
                                <ul class="list-inline d-flex ms-auto">
                                    <li class="ps-3">
                                        <h5><i class="fa fa-circle me-1 text-info"></i>Mac</h5>
                                    </li>
                                    <li class="ps-3">
                                        <h5><i class="fa fa-circle me-1 text-inverse"></i>Windows</h5>
                                    </li>
                                </ul>
                            </div>
                            <div id="ct-visits" style="height: 405px;">
                                <div class="chartist-tooltip" style="top: -17px; left: -12px;"><span
                                        class="chartist-tooltip-value">6</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- ============================================================== -->
                <!-- RECENT SALES -->
                <!-- ============================================================== -->
                <!-- </class> -->
            
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <div class="col-md-6" >
                                    <h3 class="box-title mb-0">Danh mục sản phẩm</h3>
                                </div>
                                <div class="col-md-6" style="text-align: right;">
                                    <a href="#" style="background-color: #f7941e;border-color: #f7941e; border-radius: 6px;" class="btn btn-success pull-right">Thêm mới danh mục</a>
                                </div>
                                <!-- <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                                    <select class="form-select shadow-none row border-top">
                                        <option>March 2021</option>
                                        <option>April 2021</option>
                                        <option>May 2021</option>
                                        <option>June 2021</option>
                                        <option>July 2021</option>
                                    </select>
                                </div> -->
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Tên danh mục</th>
                                            <!-- <th class="border-top-0">Trạng thái</th> -->
                                            <th class="border-top-0">Slug</th>
                                            <th class="border-top-0">Chỉnh sửa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="txt-oflo">Điện thoại</td>
                                            <!-- <td>SALE</td> -->
                                            <td class="txt-oflo">phone</td>
                                            <td>
                                                <a href="#"><i class="fa fa-edit fa-2x" style="font-size: 1.2rem;"></i></a>
                                                <a href="#" style="margin-left:10px; "><i class="fa fa-times fa-2x text-danger" style="font-size: 1.2rem;"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="txt-oflo">Laptop</td>
                                            <!-- <td>SALE</td> -->
                                            <td class="txt-oflo">laptop</td>
                                            <td>
                                                <a href="#"><i class="fa fa-edit fa-2x" style="font-size: 1.2rem;"></i></a>
                                                <a href="#" style="margin-left:10px; "><i class="fa fa-times fa-2x text-danger" style="font-size: 1.2rem;"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td class="txt-oflo">Phụ kiện điện thoại</td>
                                            <!-- <td>SALE</td> -->
                                            <td class="txt-oflo">phone-accessories</td>
                                            <td>
                                                <a href="#"><i class="fa fa-edit fa-2x" style="font-size: 1.2rem;"></i></a>
                                                <a href="#" style="margin-left:10px; "><i class="fa fa-times fa-2x text-danger" style="font-size: 1.2rem;"></i></a>
                                            </td>
                                        </tr>
                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <div class="col-md-6" >
                                    <h3 class="box-title mb-0">Tất cả sản phẩm</h3>
                                </div>
                                <div class="col-md-6" style="text-align: right;">
                                    <a href="#" style="background-color: #f7941e;border-color: #f7941e; border-radius: 6px;" class="btn btn-success pull-right">Thêm mới sản phẩm</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Hình ảnh</th>
                                            <th class="border-top-0">Tên sản phẩm</th>
                                            <th class="border-top-0">Trạng thái</th>
                                            <th class="border-top-0">Giá</th>
                                            <th class="border-top-0">Danh mục</th>
                                            <th class="border-top-0">Số lượng</th>
                                            <th class="border-top-0">Chỉnh sửa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><img src="{{ asset('asset/plugins/images/users/digital_01.jpg')}}" width="60" /></td>
                                            <td class="txt-oflo">Oppo Neo7</td>
                                            <td>SALE</td>
                                            <td class="txt-oflo">128.00</td>
                                            <td class="txt-oflo">Điện thoại</td>
                                            <td class="txt-oflo">20</td>
                                            <td>
                                                <a href="#"><i class="fa fa-edit fa-2x" style="font-size: 1.2rem;"></i></a>
                                                <a href="#" style="margin-left:10px; "><i class="fa fa-times fa-2x text-danger" style="font-size: 1.2rem;"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><img src="{{ asset('asset/plugins/images/users/digital_04.jpg')}}" width="60" /></td>
                                            <td class="txt-oflo">Oppo A33</td>
                                            <td>SALE</td>
                                            <td class="txt-oflo">128.00</td>
                                            <td class="txt-oflo">Điện thoại</td>
                                            <td class="txt-oflo">20</td>
                                            <td>
                                                <a href="#"><i class="fa fa-edit fa-2x" style="font-size: 1.2rem;"></i></a>
                                                <a href="#" style="margin-left:10px; "><i class="fa fa-times fa-2x text-danger" style="font-size: 1.2rem;"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><img src="{{ asset('asset/plugins/images/users/digital_02.jpg')}}" width="60" /></td>
                                            <td class="txt-oflo">Samsung</td>
                                            <td>SALE</td>
                                            <td class="txt-oflo">128.00</td>
                                            <td class="txt-oflo">Điện thoại</td>
                                            <td class="txt-oflo">20</td>
                                            <td>
                                                <a href="#"><i class="fa fa-edit fa-2x" style="font-size: 1.2rem;"></i></a>
                                                <a href="#" style="margin-left:10px; "><i class="fa fa-times fa-2x text-danger" style="font-size: 1.2rem;"></i></a>
                                            </td>
                                        </tr>
                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <div class="col-md-6" >
                                    <h3 class="box-title mb-0">Thêm mới sản phẩm</h3>
                                </div>
                                <div class="col-md-6" style="text-align: right;">
                                    <a href="#" style="background-color: #f7941e;border-color: #f7941e; border-radius: 6px;" class="btn btn-success pull-right">Tất cả sản phẩm</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <form class="form-horizontal form-material">
                                        <div class="form-group mb-4 d-md-flex">
                                            <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                                <label class="col-md-12 p-0" >Tên sản phẩm</label>
                                            </div> 
                                            <div class="col-md-6 ">
                                                <input type="text" placeholder="Tên sản phẩm" class="form-control" style="padding: 12px;"> 
                                            </div>
                                        </div>
                                        <div class="form-group mb-4 d-md-flex">
                                            <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                                <label class="col-md-12 p-0" >Slug</label>
                                            </div> 
                                            <div class="col-md-6 ">
                                                <input type="text" placeholder="slug" class="form-control" style="padding: 12px;"> 
                                            </div>
                                        </div>
                                        <div class="form-group mb-4 d-md-flex">
                                            <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                                <label class="col-md-12 p-0" >Mô tả ngắn</label>
                                            </div> 
                                            <div class="col-md-6 ">
                                                <textarea type="text" placeholder="Mô tả ngắn" class="form-control" style="padding: 12px;"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4 d-md-flex">
                                            <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                                <label class="col-md-12 p-0" >Mô tả</label>
                                            </div> 
                                            <div class="col-md-6 ">
                                                <textarea type="text" placeholder="Mô tả" class="form-control" style="padding: 12px;"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4 d-md-flex">
                                            <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                                <label class="col-md-12 p-0" >Giá</label>
                                            </div> 
                                            <div class="col-md-6 ">
                                                <input type="text" placeholder="Giá" class="form-control" style="padding: 12px;"> 
                                            </div>
                                        </div>
                                        <div class="form-group mb-4 d-md-flex">
                                            <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                                <label class="col-md-12 p-0" >SKU</label>
                                            </div> 
                                            <div class="col-md-6 ">
                                                <input type="text" placeholder="SKU" class="form-control" style="padding: 12px;"> 
                                            </div>
                                        </div>
                                        <div class="form-group mb-4 d-md-flex">
                                            <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                                <label class="col-md-12 p-0" >Trạng thái</label>
                                            </div> 
                                            <div class="col-md-6 ">
                                                <select class="form-control" style="padding-left: 12px;">
                                                    <option value="instock">InStock</option>     
                                                    <option value="outofstock">Out Of Stock</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4 d-md-flex">
                                            <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                                <label class="col-md-12 p-0" >Số lượng</label>
                                            </div> 
                                            <div class="col-md-6 ">
                                                <input type="text" placeholder="Số lượng" class="form-control" style="padding: 12px;"> 
                                            </div>
                                        </div>
                                        <div class="form-group mb-4 d-md-flex">
                                            <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                                <label class="col-md-12 p-0" >Hình ảnh</label>
                                            </div> 
                                            <div class="col-md-6 ">
                                                <input type="file" accept="image/*" onchange="loadFile(event)">
                                                <img id="output" style="height: auto; width: 160px; margin-top: 20px;"/>
                                            </div> 
                                        </div>
                                        <div class="form-group mb-4 d-md-flex">
                                            <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                                <label class="col-md-12 p-0" >Danh mục</label>
                                            </div> 
                                            <div class="col-md-6 ">
                                                <select class="form-control" style="padding-left: 12px;">
                                                    <option value="instock">Điện thoại</option>     
                                                    <option value="outofstock">Out Of Stock</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4 d-md-flex">
                                            <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                                <label class="col-md-12 p-0" ></label>
                                            </div> 
                                            <div class="col-md-6 ">
                                                <button type="submit" class="btn btn-primary" style="width:110px">Thêm</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <div class="col-md-6" >
                                    <h3 class="box-title mb-0">Đơn hàng</h3>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Tổng tiền hàng</th>
                                            <th class="border-top-0">Giảm giá</th>
                                            <th class="border-top-0">Thành tiền</th>
                                            <th class="border-top-0">Người đặt hàng</th>
                                            <th class="border-top-0">Số điện thoại</th>
                                            <th class="border-top-0">Ngày đặt hàng</th>
                                            <th class="border-top-0">Trạng thái</th>
                                            <th class="border-top-0"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>1280</td>
                                            <td class="txt-oflo">0</td>
                                            <td class="txt-oflo">1408</td>
                                            <td class="txt-oflo">nong duong</td>
                                            <td class="txt-oflo">0123456789</td>
                                            <td class="txt-oflo">15/01/2022</td>
                                            <td class="txt-oflo">đang chờ xử lý</td>
                                            <td>
                                                <button class="btn btn-success" style="background-color: #f7941e;border-color: #f7941e; border-radius: 6px;">Xem chi tiết</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>1280</td>
                                            <td class="txt-oflo">0</td>
                                            <td class="txt-oflo">1408</td>
                                            <td class="txt-oflo">nong duong</td>
                                            <td class="txt-oflo">0123456789</td>
                                            <td class="txt-oflo">15/01/2022</td>
                                            <td class="txt-oflo">đang chờ xử lý</td>
                                            <td>
                                                <button class="btn btn-success" style="background-color: #f7941e;border-color: #f7941e; border-radius: 6px;">Xem chi tiết</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>1280</td>
                                            <td class="txt-oflo">0</td>
                                            <td class="txt-oflo">1408</td>
                                            <td class="txt-oflo">nong duong</td>
                                            <td class="txt-oflo">0123456789</td>
                                            <td class="txt-oflo">15/01/2022</td>
                                            <td class="txt-oflo">đang chờ xử lý</td>
                                            <td>
                                                <button class="btn btn-success" style="background-color: #f7941e;border-color: #f7941e; border-radius: 6px;">Xem chi tiết</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>1280</td>
                                            <td class="txt-oflo">0</td>
                                            <td class="txt-oflo">1408</td>
                                            <td class="txt-oflo">nong duong</td>
                                            <td class="txt-oflo">0123456789</td>
                                            <td class="txt-oflo">15/01/2022</td>
                                            <td class="txt-oflo">đang chờ xử lý</td>
                                            <td>
                                                <button class="btn btn-success" style="background-color: #f7941e;border-color: #f7941e; border-radius: 6px;">Xem chi tiết</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <div class="col-md-6" >
                                    <h3 class="box-title mb-0">Chi tiết đơn hàng</h3>
                                </div>
                                <div class="col-md-6" style="text-align: right;">
                                    <a href="#" style="background-color: #f7941e;border-color: #f7941e; border-radius: 6px;" class="btn btn-success pull-right">Tất cả đơn hàng</a>
                                </div>
                            </div>
                            <div class=" main-content-area">
                                <div class="wrap-iten-in-cart">
                                    <ul class="products-cart">
                                        <li class="pr-cart-item">
                                            <div class="product-image">
                                                <figure><img src="{{ asset('asset/plugins/images/users/digital_01.jpg')}}" alt="">samsung</figure>
                                            </div>
                                            <div class="product-name">
                                                <a class="link-to-product" href="#" title="">samsung</a>
                                            </div>
                                            <div class="price-field produtc-price"><p class="price">12800</p></div>
                                            <div class="quantity">
                                                <div class="quantity-input" style="border:none">
                                                    <input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" style="text-align:center; border: 1px soild #58595b; margin-left:10px">	</input>								
                                                </div>
                                            </div>
                                            <div class="price-field sub-total"><p class="price">12800</p></div>
                                            
                                        </li>												
                                    </ul>
                                </div>
                                <div class="summary">
                                    <div class="order-summary">
                                        <h4 class="title-box">Thông tin đơn hàng</h4>
                                        <p class="summary-info"><span class="title">Tổng tiền hàng</span><b class="index">1280</b></p>
                                        <p class="summary-info"><span class="title">VAT</span><b class="index">128</b></p>
                                        <p class="summary-info"><span class="title">Phí vận chuyển</span><b class="index">1408</b></p>
                                        <p class="summary-info total-info "><span class="title">Thành tiền</span><b class="index">128.00</b></p>
                                    </div>
                                    <div class="checkout-info">
                                        <a style=" width: 20%;float: right; border-radius: 20px;"class="btn btn-checkout" href="checkout.html">Check out</a>
                                    </div>
                                </div>
                        </div>
                        <div class="d-md-flex mb-3" style="width: 100%; padding: 12px; background: #f7941e;">
                            <div class="col-md-6" >
                                <h3 class="box-title mb-0">Giao dịch</h3>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table no-wrap">
                                <tbody>
                                    <tr>
                                        <th class="border-top-0">Hình thức thanh toán</th>
                                        <td>COD</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Trạng thái</th>
                                        <td>Đang chờ xử lý</td>
                                    </tr>
                                    <tr>    
                                        <th class="border-top-0">Ngày đặt hàng</th>
                                        <td class="txt-oflo">12/12/2021</td>
                                    </tr>
                                    <tr>    
                                        <th class="border-top-0">Ghi chú</th>
                                        <td class="txt-oflo"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-md-flex mb-3" style="width: 100%; padding: 12px; background: #f7941e;">
                            <div class="col-md-6" >
                                <h3 class="box-title mb-0">Thông tin khách hàng</h3>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table no-wrap">
                                <tbody>
                                    <tr>
                                        <th class="border-top-0">Họ Tên</th>
                                        <td>nong duong</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Số điện thoại</th>
                                        <td>0123456789</td>
                                    </tr>
                                    <tr>    
                                        <th class="border-top-0">Địa chỉ</th>
                                        <td class="txt-oflo">Hai Ba Trung - HN</td>
                                    </tr>
                                    <tr>    
                                        <th class="border-top-0">Email</th>
                                        <td class="txt-oflo">duong@gmail.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Recent Comments -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- .col -->
                    <div class="col-md-12 col-lg-8 col-sm-12">
                        <div class="card white-box p-0">
                            <div class="card-body">
                                <h3 class="box-title mb-0">Recent Comments</h3>
                            </div>
                            <div class="comment-widgets">
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row p-3 mt-0">
                                    <div class="p-2"><img src="{{ asset('asset/plugins/images/users/varun.jpg')}}" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text ps-2 ps-md-3 w-100">
                                        <h5 class="font-medium">James Anderson</h5>
                                        <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry.It has survived not only five centuries. </span>
                                        <div class="comment-footer d-md-flex align-items-center">
                                             <span class="badge bg-primary rounded">Pending</span>
                                             
                                            <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">April 14, 2021</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row p-3">
                                    <div class="p-2"><img src="{{ asset('asset/plugins/images/users/genu.jpg')}}" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text ps-2 ps-md-3 active w-100">
                                        <h5 class="font-medium">Michael Jorden</h5>
                                        <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry.It has survived not only five centuries. </span>
                                        <div class="comment-footer d-md-flex align-items-center">

                                            <span class="badge bg-success rounded">Approved</span>
                                            
                                            <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">April 14, 2021</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row p-3">
                                    <div class="p-2"><img src="{{ asset('asset/plugins/images/users/ritesh.jpg')}}" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text ps-2 ps-md-3 w-100">
                                        <h5 class="font-medium">Johnathan Doeting</h5>
                                        <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry.It has survived not only five centuries. </span>
                                        <div class="comment-footer d-md-flex align-items-center">

                                            <span class="badge rounded bg-danger">Rejected</span>
                                            
                                            <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">April 14, 2021</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card white-box p-0">
                            <div class="card-heading">
                                <h3 class="box-title mb-0">Chat Listing</h3>
                            </div>
                            <div class="card-body">
                                <ul class="chatonline">
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success text-white btn-circle btn" type="button">
                                                <i class="fas fa-phone"></i>
                                            </button>
                                            <button class="btn btn-info btn-circle btn" type="button">
                                                <i class="far fa-comments text-white"></i>
                                            </button>
                                        </div>
                                        <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                                src="{{ asset('asset/plugins/images/users/varun.jpg')}}" alt="user-img" class="img-circle">
                                            <div class="ms-2">
                                                <span class="text-dark">Varun Dhavan <small
                                                        class="d-block text-success d-block">online</small></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success text-white btn-circle btn" type="button">
                                                <i class="fas fa-phone"></i>
                                            </button>
                                            <button class="btn btn-info btn-circle btn" type="button">
                                                <i class="far fa-comments text-white"></i>
                                            </button>
                                        </div>
                                        <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                                src="{{ asset('asset/plugins/images/users/genu.jpg')}}" alt="user-img" class="img-circle">
                                            <div class="ms-2">
                                                <span class="text-dark">Genelia
                                                    Deshmukh <small class="d-block text-warning">Away</small></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success text-white btn-circle btn" type="button">
                                                <i class="fas fa-phone"></i>
                                            </button>
                                            <button class="btn btn-info btn-circle btn" type="button">
                                                <i class="far fa-comments text-white"></i>
                                            </button>
                                        </div>
                                        <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                                src="plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle">
                                            <div class="ms-2">
                                                <span class="text-dark">Ritesh
                                                    Deshmukh <small class="d-block text-danger">Busy</small></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success text-white btn-circle btn" type="button">
                                                <i class="fas fa-phone"></i>
                                            </button>
                                            <button class="btn btn-info btn-circle btn" type="button">
                                                <i class="far fa-comments text-white"></i>
                                            </button>
                                        </div>
                                        <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                                src="plugins/images/users/arijit.jpg" alt="user-img" class="img-circle">
                                            <div class="ms-2">
                                                <span class="text-dark">Arijit
                                                    Sinh <small class="d-block text-muted">Offline</small></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success text-white btn-circle btn" type="button">
                                                <i class="fas fa-phone"></i>
                                            </button>
                                            <button class="btn btn-info btn-circle btn" type="button">
                                                <i class="far fa-comments text-white"></i>
                                            </button>
                                        </div>
                                        <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                                src="plugins/images/users/govinda.jpg" alt="user-img"
                                                class="img-circle">
                                            <div class="ms-2">
                                                <span class="text-dark">Govinda
                                                    Star <small class="d-block text-success">online</small></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success text-white btn-circle btn" type="button">
                                                <i class="fas fa-phone"></i>
                                            </button>
                                            <button class="btn btn-info btn-circle btn" type="button">
                                                <i class="far fa-comments text-white"></i>
                                            </button>
                                        </div>
                                        <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                                src="plugins/images/users/hritik.jpg" alt="user-img" class="img-circle">
                                            <div class="ms-2">
                                                <span class="text-dark">John
                                                    Abraham<small class="d-block text-success">online</small></span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2021 © Admin<a
                    href="https://www.wrappixel.com/">wrappixel.com</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('asset/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('asset/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('asset/js/app-style-switcher.js')}}"></script>
    <script src="{{ asset('asset/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('asset/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('asset/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('asset/js/custom.js')}}"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{ asset('asset/plugins/bower_components/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{ asset('asset/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{ asset('asset/js/pages/dashboards/dashboard1.js')}}"></script>
    <script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
        }
    };
    </script>
</body>

</html>

<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
</div>
