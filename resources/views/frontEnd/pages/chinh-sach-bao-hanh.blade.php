@extends('template.front_end')
@section('container_layout')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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


    <script src="https://kit.fontawesome.com/dd30e3c953.js" crossorigin="anonymous"></script>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Raleway:400,200,300,800);


    </style>
    <script>
        $("figure").mouseleave(
            function () {
                $(this).removeClass("hover");
            }
        );

    </script>



    <div class="container">
        <div style="margin-top: 30px">
            <div>

            </div>
            <h4>Chính sách bảo hành</h4>
            <p>
                <span style="font-weight: 650;"> I/ Những trường hợp phù hợp qui định bảo hành miễn phí của
                    ECLICKBUY:</span><br>
            <div style="margin-left: 20px;">
                <span>Bảo hành sản phẩm là: khắc phục những lỗi hỏng hóc, sự cố kỹ thuật xảy ra do lỗi của nhà sản
                    xuất<br>

                    - Sản phẩm còn trong thời hạn bảo hành được tính kể từ ngày giao hàng hoặc được ghi trên Phiếu
                    Bảo
                    hành<br>

                    - Có Phiếu bảo hành của nhà sản xuất hoặc nhà phân phối<br>

                    - Có Hóa đơn mua hàng của ECLICKBUY<br>

                    Sản phẩm bảo hành sẽ tuân theo qui định bảo hành của từng nhà sản xuất đối với các sự cố về
                    mặt
                    kỹ thuật</span>
            </div><br>
            <div style="text-align: center;">
                <p style="font-weight: 550;">Danh sách sản phẩm được phục vụ bảo hành tại nhà:</p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Ngành hàng Điện tử</th>
                            <th scope="col">Ngành hàng Điện lạnh</th>
                            <th scope="col">Ngành hàng Gia dụng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TV CRT</td>
                            <td>Máy giặt</td>
                            <td>Bếp gas âm</td>
                        </tr>
                        <tr>
                            <td>TV LCD - Plasma</td>
                            <td>Tủ lạnh</td>
                            <td>Hút khói</td>
                        </tr>
                        <tr>
                            <td>Loa / Amply</td>
                            <td>Tủ đông - tủ mát</td>
                            <td>Lò vi ba</td>
                        </tr>
                        <tr>
                            <td>Dàn máy</td>
                            <td>Máy nước nóng</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </p>
        </div>
        <div style="margin-left: 20px;">
            <p>Những sản phẩm thuộc danh sách sản phẩm được bảo hành tại nhà, tùy thuộc vào mức độ hư hỏng của sản phẩm,
                nhân viên dienmayxanh.com sẽ trực tiếp khắc phục sự cố tại nhà hoặc thay mặt Quí khách mang sản phẩm tới
                Trung Tâm Bảo Hành của Hãng hoặc thông báo với Hãng để đến bảo hành sản phẩm cho Quí khách.<br>

                Những sản phẩm không thuộc danh sách sản phẩm được bảo hành tại nhà ( nằm trong khả năng chuyên chở của
                quí khách), Quí khách vui lòng mang sản phẩm đến Trung Tâm Bảo Hành của dienmayxanh.com hoặc Trung Tâm
                Bảo Hành của Hãng để được phục vụ nhanh chóng hơn</p>
        </div>
        <div>
            <span style="font-weight: 650;">II/ Những trường hợp không được bảo hành:</span><br>
            <div style="margin-left: 20px;">
                <p>- Sản phẩm đã quá thời hạn bảo hành ghi trên phiếu Bảo hành hoặc mất Phiếu Bảo hành.<br>

                    - Những sản phẩm không thể xác định được nguồn gốc mua tại dienmayxanh.com, thì dienmayxanh.com có
                    quyền từ chối bảo hành.<br>

                    Mất hóa đơn<br>
                    Tem niêm phong bảo hành bị rách, vỡ, hoặc bị sửa đổi<br>
                    Phiếu bảo hành không ghi rõ số Serial và ngày mua hàng<br>
                    Số serial trên máy và Phiếu bảo hành không trùng khớp nhau hoặc không xác định được vì
                    bất kỳ lý do nào<br>
                    Số serial trên sản phẩm không xác định được<br>
                    - Sản phẩm bị hư hỏng do sử dụng không đúng hướng dẫn sử dụng<br>

                    - Sản phẩm bị hư hỏng do tác động cơ học làm rơi, vỡ, va đập, trầy xước, móp méo, ẩm ướt, hoen
                    rỉ, chảy nước<br>

                    - Sản phẩm có dấu hiệu hư hỏng do chuột bọ hoặc côn trùng xâm nhập hoặc do hỏa hoạn, thiên tai gây
                    nên<br>

                    - Các loại phụ kiện kèm theo như: Điều khiển từ xa, Pin điều khiển, pin CMOS, dây nguồn, dây tín
                    hiệu, nắn dòng, đèn tín hiệu, tai nghe, quạt trên thiết bị, hoặc thiết bị do quạt bị hỏng gây ra
                    cháy nổ.<br>

                    - Các phần mềm cung cấp miễn phí kèm theo máy.<br>

                    - Tự ý tháo dỡ, sửa chữa bởi các cá nhân hoặc kỹ thuật viên không được sự ủy quyền của
                    ECLICKBUY</p>
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
