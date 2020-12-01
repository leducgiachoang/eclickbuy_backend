<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: rgb(221, 221, 221);
            margin: auto;
            text-align: center;
            padding-bottom: 50px;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 72px;
        }

        .logo img {
            width: 200px;
            padding-top: 20px;
            margin: auto;
            text-align: center;
        }
        .li_flext{
            width: 100%;
        }
        .li_flext:last-child{
            width: 40%;
            float: right;
        }
        .li_flext:first-child{
            width: 50%;
            float: left;
        }


        .container {
            width: 60%;
            background-color: white;
            margin: auto;
            text-align: center;
        }

        .content {
            width: 80%;
            margin: auto;
            text-align: center;
        }

        .number {
            text-align: left;
        }

        .print {
            text-align: left;
        }

        ul {
            display: inline-block;
            list-style: none;
            width: 100%;
            margin: 0px;
            padding: 0px;
        }

        ul li {
            display: block;
            list-style: none;
            width: 100%;
        }

        button {
            text-align: center;
            margin: auto;
            width: 100%;
            line-height: 40px;
            margin: 20px 0px;
            background-color: teal;
            border: 0px;
            color: white;
            font-size: 20px;
        }

        .footer {
            margin: auto;
            text-align: center;
            padding-bottom: 20px;
        }

        .hello {
            font-size: 20px;
            font-weight: 700;
            padding: 20px;
        }

        h2 {
            font-size: 72px;
            font-size: 35px;
            color: blueviolet;
        }

        .it {
            color: rgb(141, 141, 141);
            font-size: 20px;
            font-weight: 520;
        }

        .it .user {
            background-color: white;
            font-weight: 550;
            color: rgb(94, 94, 94);
            padding-left: 10px;
        }

        .here {
            color: rgb(94, 94, 94);
            font-weight: 550;
            font-size: 14px;
        }

        .here1 {
            color: rgb(94, 94, 94);
            font-weight: 500;
            font-size: 20px;
        }

        .incon {
            display: inline-block;
            list-style: none;
            margin: 0px;
            padding: 0px;
        }

        .incon li {
            display: inline-block;
            list-style: none;
            height: 30px;
            width: 30px;
            border-radius: 50% 50%;
            margin: 0px 5px;
        }

        .incon li a {
            text-decoration: none;
            line-height: 30px;
        }

        .thuonghieu {
            color: black;
            font-weight: 550;
        }

        @media (max-width:680px) {
            .container {
                width: 95%;
            }

            .container .content {
                width: 95%;
                margin: auto;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <div style="background: rgb(210,0,0);
    background: linear-gradient(4deg, rgba(210,0,0,1) 0%, rgba(255,255,255,0.8410714627647934) 100%, rgba(255,0,0,1) 100%);">
        <div style="text-align: center" class="logo"><img style="text-align: center" src="https://lh3.googleusercontent.com/7aZxJO5qkXcjqYpQQ8TBjmTu2S16Q-TtTevmZwWb8faxIeuzK_B84VPmJuSv5G_068WjdXxznbbLAbsdPXDh7Sb4OwxB1Tt8gsmyRDcch3kHN03i3KlrdTn2rPjxoJ1tVNGzOwqAQ2PjfyuFlC73yb74QbjoApAkdRnAKA2SXPP9SACPUHyzxnrM3i2YtNh3FDzkwU2pBnnwBJps5ZSMemTCUHIa9gvtTL33Oz-FnJGDIkdhwz5a2twtTKKvVqYU1SaX_ASPYejFL22OOeozmKtcKm8Hr-bLpXgSLOom5svbQbnWo0PmZyDzqXNF56Cso8E-Rx9Dz8RA0BbCrDHhZ74MnhLw4f_25nLO1t0ib0HpCKj_dnL-Ee7qA2lLQ8X56J1Ssb8A1DSrbwl_k8XEgnEj30W9n1JJtroHCD6pqZw-STOcKavwq2T8Eg1HMibkwpZwA4PtYOqJ-TjAB3CHvZcwO7igh9yF8xKUQea1JCx5kQSa2yd9U2v4Kiu6mWImJCZMyTxyIQ134ixHNNBJJ5Nj6MSuTzo-BuYrFoc1WegSE7dC1SGNWfTNmnqFKB-VGwHeH_dt2-RRxhgQkPbgRv9HrB54LE4LZhISlXdmQmcd3tA_KZEJUFLSSDfjJOzxW_M4IV3jYyxTLY70ODTitUPib1goPYc6lAXxe5R1qRREYvTNn5uy9d3l2z5FwCs=w1920-h688-no?authuser=0" alt=""></div>
        <div class="container">
            <div class="content">
                <p class="hello">Xin Chào {{ $hoten }}!</p>
                <h2>Cảm ơn bạn.</h2>
                <p class="it">
                    Quản lý đơn đặt hàng của bạn. Hãy xem bên dưới để biết tất cả
                    chi<br>
                    tiết xác nhận bạn sẽ cần</p>
                <hr style="width:100%;border:none;  border-top-style:dashed; clear:both;color: rgb(138, 138, 138);">
                <div class="number">
                    <p class="it">Nhận bởi: <span class="user">Công Ty TNHH<span class="thuonghieu">Eclickbuy</span></p>
                    <p class="it">Địa chỉ: <span class="user">137 Nguyễn Thị Thập, Hòa Minh,Liên Chiểu, Đà Nẵng</p>
                </div>
                <hr style="width:100%;border:none;  border-top-style:dashed; clear:both;color: rgb(138, 138, 138);">
                <div class="print">
                    <p class="here1">Đây là những gì bạn đã đặt hàng:</p>
                    <table style="width: 100%;">
                        @foreach ($products as $product)
                        <tr class="li_flext">
                            <th style="margin: 0px;padding: 0px;color: rgb(141, 141, 141);font-size: 20px;font-weight: 550;">
                                <span style="color: rgb(39, 39, 39);">{{ $product->qty }}</span> {{ $product->name }}</th>
                            <th class="here1" style="text-align: right;">{{ number_format($product->price,0,",",".") }} VNĐ</th>
                        </tr>
                        @endforeach
                        <hr style="width:100%;border:none;  border-top-style:dashed; clear:both;color: rgb(138, 138, 138);">
                        <tr class="li_flext">
                            <th class="here1" style="margin-top: -25px;padding: 0px;">Tổng tiền tạm Tính</th>
                            <th class="here1" style="text-align: right;">{{ $tamtinh }}</th>

                        </tr>
                        <tr class="li_flext">
                            <th class="here1" style="margin-top: -25px;padding: 0px;">Khuyến Mãi</th>
                            <th class="here1" style="text-align: right;">{{ $khuyen_mai }} {{ $valuKM }}</th>

                        </tr>
                        <tr class="li_flext">
                            <th class="here1" style="margin-top: -25px;padding: 0px;">Phí vận chuyển</th>
                            <th class="here1" style="text-align: right;">30.000 VNĐ</th>

                        </tr>
                        <tr class="li_flext">
                            <th class="here1" style="margin: 0px;padding: 0px;">Tổng giá</th>
                            <th class="here1" style="text-align: right;">{{ $tonggia }}</th>

                        </tr>
                    </table>
                    <p class="here1">Địa chỉ giao hàng của bạn:<br>
                        <span style="font-size: 18px;font-weight: 500;">{{ $noinhan }}</span>
                    </p>
                    <ul>
                        <li class="li_flext">
                            <p class="here1" style="margin: 0px;padding: 0px;">Hình thức thanh toán: <br/><i style="font-size: 15px;">Thanh toán khi nhận Hàng</i></p>
                            <p class="here1" style="text-align: right;font-size: 16px;">
                                {{ date("d".' \T\h\á\n\g'." m". ' \N\ă\m'." Y", strtotime($ngaydat)) }}</p>

                        </li>
                    </ul>
                    <hr style="width:100%;border:none;  border-top-style:dashed; clear:both;color: rgb(138, 138, 138);">

                    <p class="here1">Nếu bạn muốn theo dõi đơn đặt hàng của mình, bạn có thể
                        kiểm tra trạng thái của nó hoặc <span style="color: teal;font-weight: 550;">sắp xếp lại</span>
                        bất cứ lúc nào <span style="color: teal;font-weight: 550;">Tài khoản của bạn.</span></p>
                    <a href="{{ $chitietdonhang }}"><button><span>Quản lý đơn đặt hàng của bạn</span></button></a>
                    <hr style="width:100%;border:none;  border-top-style:dashed; clear:both;color: rgb(138, 138, 138);">



                </div>
                <div class="footer">
                    <p class="here" style="font-weight: 500;color: rgb(202, 202, 202);">@ Xin chào, đây là tin nhắn tự động từ <span
                            class="thuonghieu">Eclickbuy</span>.<br>
                        <span> 137 Nguyễn Thị Thập, Hòa Minh,Liên Chiểu, Đà Nẵng.<br>
                            Chúng tôi đã đăng ký tại Anh, Số công ty: 5121723</span>
                    </p>
                    <p class="here" style="color: teal;"><a href="{{ $chinhsachgiaohang }}">Chính sách giao hàng</a> |
                        <a href="{{ $chinhsachbaohanh }}">Chính sách bảo hành</a></p>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
