@extends('template.front_end')
@section('container_layout')
@section('title','Chính Sách Giao Hàng')

    <script>
        $("figure").mouseleave(
            function () {
                $(this).removeClass("hover");
            }
        );

    </script>
    <title>Liên Hệ</title>
</head>

<body>
    <div class="container">
        <div style="margin: 30px 0">
        <div>
            <p style="font-weight: 650;font-size: 25px">CHÍNH SÁCH VẬN CHUYỂN HÀNG HÓA </p>
            <p style="font-weight: 550;margin-left: 10px;">1. GIAO HÀNG MIỄN PHÍ 100KM</p>
            <div style="margin: auto;text-align: center;">
                <img src="http://cdn.nhanh.vn/cdn/store/3528/artCT/14816/chinhsach1.jpg" alt="">
            </div>
            <div>
                <p>Điện Máy <span style="color: red;font-weight: 650;">ECLICKBUY</span> giao hàng miễn phí 20k - 100km với
                    đơn hàng từ 800.000 vnđ trở lên tính từ Siêu thị tới địa chỉ khách hàng yêu cầu </p>
            </div>
            <div>
                <p>- Số Km vận chuyển miễn phí được tính theo tỷ lệ thuận với giá trị đơn hàng,ví dụ : 20tr miễn phí vận
                    chuyển 20km , 30tr miễn phí vận chuyển 30km<br>
                    - Giao hàng trong ngày hoặc từ 2 – 4 tiếng cho khách hàng có địa chỉ ở các quận Nội thành Hà Nội ,
                    hoặc bán kính 50km tính từ <span style="color: red;font-weight: 650;">ECLICKBUY</span><br>
                    - Giao hàng từ 3 – 5 ngày cho khách hàng có địa chỉ ở các Tỉnh,sau khi thống nhất về phương án vận
                    chuyển đối với khách hàng<br>
                    - Phương tiện giao hàng cho khách hàng <span style="color: red;font-weight: 650;">ECLICKBUY</span> sẽ
                    chủ động sắp xếp tùy kích thước và khối
                    lượng hàng hóa<br>
                <h6>(*) Trường hợp khách hàng mua trực tiếp những sản phẩm nhỏ như: Điện thoại, Máy xay sinh tố, Nồi cơm
                    điện, Quạt điện, Bếp gas, Cây lau nhà, Laptop, Điện thoại bàn, Nồi xoong, Chảo,máy hút bụi nhỏ,lò vi
                    sóng nhỏ… thì khách hàng có thể tự vẩn chuyển hàng về nhà.</h6>
                </p>
            </div>
            <h5> (*) Đối với đơn hàng dưới 2,000,000 vnđ </h5>
            <p style="font-weight: 550;margin-left: 10px;">2. THỜI GIAN LIÊN HỆ VÀ XỬ LÝ ĐƠN HÀNG</p>
            <div>-  Trước khi đi giao hàng, các bạn nhân viên giao nhận sẽ gọi điện cho Quý khách trước để xác nhận địa
                chỉ, họ tên người nhận hàng và thời gian giao hàng chính xác.<br>
                - Trong một số chương trình khuyến mãi,ngày lễ đặc biệt việc giao hàng cho quý khách hàng có thể chậm hơn
                vì đơn đặt hàng nhiều ,số lượng khách hàng mà <span style="color: red;font-weight: 650;">ECLICKBUY</span> phục vụ tăng đột biến , vì vậy mong quý
                khách thông cảm. Tùy vào tình hình kinh doanh, siêu thị sẽ giải quyết những yêu cầu đặc biệt của quý
                khách.</div>
            <h6>Quy định thời gian xử lý đơn hàng online:</h6>
                <div>
                    <p>- Đơn đặt hàng từ: 8h00 – 21h00 thì chúng tôi sẽ liên hệ với quý khách hàng ngay trong ngày.<br>
                        - Đơn đặt hàng sau 19h00 thì chúng tôi sẽ liên hệ vào sáng hôm sau.<br>
                        - Qúy khách vui lòng đặt hàng và để ý điện thoại để các bạn bán hàng liên hệ trực tiếp </p>
                </div>

        </div>
    </div>
    </div>


@section('script')
<style>
    #menu_header_menu{
        display: none;
    }
    #box_menu_group_header:hover #menu_header_menu{
        display: block
    }
    #banner_header_menu{
        display: none;
    }
</style>
@endsection
@endsection
