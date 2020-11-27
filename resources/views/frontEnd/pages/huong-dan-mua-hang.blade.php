@extends('template.front_end')
@section('container_layout')

     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/dd30e3c953.js" crossorigin="anonymous"></script>

    <script>
        $("figure").mouseleave(
            function () {
                $(this).removeClass("hover");
            }
        );

    </script>

</head>

<body>
    <div class="container">
        <div style="margin: 30px 0">
        <h5 style="font-size: 40px">Liên Hệ</h5>
        <div>
            <p style="font-weight: 650;">Bước 1:</p>
            <div style="margin-left: 20px;">
                <p> - Truy cập website của ECLICKBUY. Tìm kiếm tới danh mục và sản phẩm cần
                    mua
                    (qua thanh tìm kiếm hoặc danh mục sản phẩm)
                    <br>
                    - Ở góc phải phía dưới luôn có một cửa sổ chat ngay với nhân viên tư vấn khi quý khách cần giải đáp
                    thắc
                    mắc</p>
            </div>
        </div>
        <div>
            <p style="font-weight: 650;">Bước 2:</p>
            <div style="margin-left: 20px;">
                <p> - Giỏ hàng của quý khách sẽ hiện ra<br>

                    - Bấm nút Tiến hành thanh toán nếu quý khách muốn thanh toán luôn<br>

                    - Bấm nút Tiếp tục mua sắm nếu quý khách muốn chọn thêm sản phẩm khác<br>
                    <br>

                </p>
            </div>
        </div>
        <div>
            <p style="font-weight: 650;">Bước 3:</p>
            <div style="margin-left: 20px;">
                <p> - Truy cập website của ECLICKBUY. Tìm kiếm tới danh mục và sản phẩm cần
                    mua
                    (qua thanh tìm kiếm hoặc danh mục sản phẩm)
                    <br>
                    - Ở góc phải phía dưới luôn có một cửa sổ chat ngay với nhân viên tư vấn khi quý khách cần giải đáp
                    thắc
                    mắc</p>
                - Sau khi chọn tiếp tục mua sắm, trang chủ ban đầu sẽ hiện ra, quý khách tìm kiếm và chọn sản phẩm
                muốn mua theo các bước cũ.<br>

                - Sau khi chọn xong, danh sách các sản phẩm đã chọn sẽ hiện trong giỏ hàng<br>

                - Quý khách kiểm tra lại sản phẩm, số lượng và tổng tiền rồi bấm nút Tiến hành thanh toán<br>
            </div>
        </div>
        <div>
            <p style="font-weight: 650;">Bước 4:</p>
            <div style="margin-left: 20px;">
                <p> - Trang thông tin đơn hàng sẽ hiện ra, quý khách kiểm tra lại tổng giá trị đơn hàng.<br>

                   - Sau đó điền đầy đủ thông tin bao gồm: Họ và tên, Số điện thoại, Địa chỉ cụ thể nơi nhận hàng

                    Điền mã giảm giá riêng (nếu có)<br>

                    - Kiểm tra lại thông tin nhận hàng và bấm nút Tiến hành thanh toán để hoàn thành đặt hàng<br>
                    - Sau khi hoàn thành việc đặt hàng trang báo Thanh toán hàng thành công hiện ra xác nhận việc đặt hàng là hoàn tất
                </p>
            </div>
        </div>
        <div>
            <h6>Chúc quý khách có được trải nghiệm mua hàng tốt nhất tại ECLICKBUY, trong quá trình mua hàng còn băn khoăn điều gì hãy nhắn ngay cho nhân viên tư vấn qua ô chat góc phải bên dưới màn hình để được hỗ trợ nhanh nhất.

                Cảm ơn khách hàng đã ghé thăm và mua hàng tại ECLICKBUY</h6>
        </div>
    </div>
</div>
</body>

</html>

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
