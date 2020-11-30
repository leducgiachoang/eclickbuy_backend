<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="{{ asset('') }}">
    <title>ECLICKBUY - @yield('title')</title>
    <link rel="shortcut icon" href="images/ovo.png">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../css/backend_css.css">
    <link rel="stylesheet" href="../css/sb-admin-2.min.css">
    <link rel="stylesheet" href="../css/style4.css">
    <script src="../js/jquery.number.min.js"></script>

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="../ckeditor/ckeditor.js"></script>

</head>
<style>
    .components{
        height: 600px; overflow: auto
    }
    .components::-webkit-scrollbar {
        width: 0px;
        background-color: #F5F5F5;
    }


</style>

<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img style="width: 200px;" src="images/logo2.png" alt="">
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="{{ route('dashboard') }}"><i class="fas fa-fw fa-tachometer-alt"></i> Thống kê</a>
                </li>
                <hr class="sidebar-divider">
                <li class="active">
                    <a href="/">
                        <i class="fas fa-home"></i>
                        Trang chủ
                    </a>
                </li>
                <li>
                    <a href="#category_product" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        Danh mục sản phẩm
                    </a>
                    <ul class="collapse list-unstyled" id="category_product">
                        <li>
                            <a href="{{ route('DanhMucSanPham_themmoi_get') }}">Thêm mới</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#sanpham" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        Sản phẩm
                    </a>
                    <ul class="collapse list-unstyled" id="sanpham">
                        <li>
                            <a href="{{ route('them_sanpham') }}">Thêm mới</a>
                        </li>
                        <li>
                            <a href="{{ route('danh_sach_product') }}">Danh sách</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#brand_product" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        Thương hiệu
                    </a>
                    <ul class="collapse list-unstyled" id="brand_product">
                        <li>
                            <a href="{{ route('add-brand-product') }}">Thêm mới</a>
                        </li>
                        <li>
                            <a href="{{ route('all-brand-product') }}">Danh Sách</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#user" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        Tài khoản
                    </a>
                    <ul class="collapse list-unstyled" id="user">
                        <li>
                            <a href="{{ route('add-user') }}">Thêm mới</a>
                        </li>
                        <li>
                            <a href="{{ route('all-user') }}">Danh Sách</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#sale" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-weight"></i>
                        Khuyến mãi
                    </a>
                    <ul class="collapse list-unstyled" id="sale">
                        <li>
                            <a href="{{ route('add-sale-product') }}">Thêm mới</a>
                        </li>
                        <li>
                            <a href="{{ route('all-sale-product') }}">Danh Sách</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#giftcode" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-gift"></i>
                        GiftCode
                    </a>
                    <ul class="collapse list-unstyled" id="giftcode">
                        <li>
                            <a href="{{ route('add-giftcode-product') }}">Thêm mới</a>
                        </li>
                        <li>
                            <a href="{{ route('all-giftcode-product') }}">Danh Sách</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('DonHangAll') }}" class="dropdown-toggle">
                        <i class="fas fa-shopping-cart"></i>
                        Đơn hàng
                    </a>
                </li>

                <li>
                    <a href="#slider" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-sliders-h"></i>
                        Slider
                    </a>
                    <ul class="collapse list-unstyled" id="slider">
                        <li>
                            <a href="{{ route('view-page-slider') }}">Thêm mới</a>
                        </li>
                        <li>
                            <a href="{{ route('list-page-slider') }}">Danh sách</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('DanhGia_list_get') }}">
                        <i class="fas fa-paper-plane"></i>
                        Đánh giá
                    </a>
                </li>


            </ul>

            <ul class="list-unstyled CTAs">
                <li>

                </li>
                <li>

                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>MENU</span>
                </button>



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
                  <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-bell fa-fw"></i>
                      <!-- Counter - Alerts -->
                      <span class="badge badge-danger badge-counter"><strong id="count_don_hang_moi"></strong>+</span>
                    </a>
                    <!-- Dropdown - Alerts -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                      <h6 class="dropdown-header">
                        ĐƠN HÀNG GẦN ĐÂY
                      </h6>
                        <div id="ThongBaoDonHang" >

                        </div>


                      <a class="dropdown-item text-center small text-gray-500" href="{{ route('DonHangGetId',['id'=>0]) }}">Xem tất cả đơn hàng</a>
                    </div>



                  </li>

                  <!-- Nav Item - Messages -->
                  <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-envelope fa-fw"></i>
                      <!-- Counter - Messages -->
                      <span class="badge badge-danger badge-counter">*</span>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                      <h6 class="dropdown-header">
                        Đánh giá gần đây
                      </h6>
                      <div id="DanhGiaGanDay">

                      </div>
                      <a class="dropdown-item text-center small text-gray-500" href="#">Xem tất cả đánh giá</a>
                    </div>
                  </li>

                  <div class="topbar-divider d-none d-sm-block"></div>

                  <!-- Nav Item - User Information -->
                  <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if (!auth()->check())
                        {{-- <span>Tài khoản</span> --}}
                        <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                        @else
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small" href="">{{ Auth::user()->ho_ten }}</span>
                        <img class="img-profile rounded-circle" src="images/user/{{ Auth::user()->anh_dai_dien }}">
                        @endif

                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                      <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                      </a>

                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="{{route('dang-xuat')}}" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                      </a>
                    </div>
                  </li>

                </ul>

              </nav>

            {{-- NỘI DUNG TRANG ĐỂ Ở ĐÂY --}}

            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            @if (session('danger'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('danger') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            @yield('container')


        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $.get('admin/ajax/don_hang_moi', function(data){
                $('#ThongBaoDonHang').html(data);
            })
            $.get('admin/ajax/so_don_hang_moi', function(data){
                $('#count_don_hang_moi').html(data);
            })

            $.get('admin/ajax/danh_gia_moi', function(data){
                $('#DanhGiaGanDay').html(data);
            })

        });
    </script>



    @yield('script')

    <script>
        CKEDITOR.replace('editor1');
        CKEDITOR.replace('editor2');

    </script>
</body>

</html>
