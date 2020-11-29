<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .content {
            background-color: rgb(255, 255, 255);
            padding: 20px;
            color: rgb(255, 255, 255);
        }

        .text {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            color: rgb(0, 0, 0);
        }

        .nut {
            text-decoration: none;
            color: white;
            background-color: rgb(248, 79, 18);
            padding: 15px 17px;
            border-radius: 7px;
            font-size: 20px;
        }
        a{
            text-decoration: none;
            font-weight: bold;
            color: blanchedalmond;
        }

    </style>
</head>

<body style="width: 100%;margin: -8px auto;border: 2px solid black;">
    <header style="background-color: rgb(255, 255, 255);padding: 15px;">
        <p style="text-align: center;"><img src="https://lh3.googleusercontent.com/NGRLoXoVCRdI5NE_lIrVtpGATZ8BCKNMaQyXB64nDbd09FoGD-EGr_8LhiINDsisk5CRT1RvjT5DuoYtfP8rXzib7BUXGrPL9aRKtAQRtZ6l9FIaGzSe7wQUxocSvwYLvFtKrOKKu1aFKY40i0CLon_u5HdqF-mWKtm0h65EsXOWerrJXdpNPIC0Dbziyop79gKmIGK3fHJuPd9KLYbBYEVgJ9IF75dYyC6qPb3STizNghbZ4EGrixxXsvYlDLAZbiQkRkMKsGqgwnHGFuwUdvYsCInMPCOOpkaev9-Nsd2mNgOPKmc22_kqzsk48I57Lh3bxgQhuHkyTZo_ooM_4RcCrINpD-_4wAcixhRuLI0ZOig1LXHAPO8_hBq5zGs2rGkcPsy7mYi5yuB4eFxJrGyt-MnAaOJwtFFnJ5QVmAFZhvpMkrhfrx9yc6i_NCyDXcxeFFuaTmt3bwXS-JtuLG1C0bwvgqoUOs8samxPUgkmuolQ-hOB0yPIogGhVFz3s5gNQmnAy2CWX4iLM-Ei2PPTZf0tjyT11ddS9BiJaGAqF2C1qQKCYw7cw7lGJHLipHavS1VvbsokV3l1Jy7w3cC9elZfcyLdHgHmeymJM9CDVbH7hHQNxt74vFPnBFXdswqPm7OFDTTlFlTmz-4_7bix4mh8H9SLryRsGZtnlifUwJfAhwKPbIwggY_yY5c=w1920-h688-no?authuser=0" alt=""></p>
    </header>
    <div class="content">

        <div class="text">
            <h2 style="text-align: center;margin: 40px;">Cám ơn bạn đã đặt hàng tại ECLICKBUY!</h2>
            <p style="font-size: 20px;">Xin chào {{ $hoten }}</p>
            <p style="font-size: 16px;">Cám ơn bạn đã tin tưởng ECLICKBUY!! <br><br>
                ECLICKBUY đã nhận được yêu cầu đặt hàng của bạn và đang xử lý nhé. Bạn sẽ nhận được thông báo tiếp theo
                khi đơn hàng đã sẵn sàng được giao.
            </p>
            <h2 style="text-align: center;margin: 40px;"><a class="nut" href="#">TÌNH TRẠNG ĐƠN HÀNG</a></h2>
            <p style="font-weight: bold;">**Một vài lưu nhỏ cho bạn:</p>
            <ul style="font-size: 16px;text-align: justify;">
                <li>Nếu đơn hàng của bạn được thực hiện theo hình thức "Mua theo nhóm", thì đơn hàng này chỉ có giá trị
                    khi tất cả các đơn đặt hàng trong nhóm của bạn đã được đặt thành công.</li>
                <li>Để đảm bảo bạn sẽ nhận đúng hàng, hãy chỉ nhận hàng khi đơn hàng được cập nhật trạng thái là Đang
                    giao hàng” nhé!</li>
                <li>Để đảm bảo an toàn và thuận tiện cho bạn trong mùa dịch, ECLICKBUY thực hiện giao hàng không tiếp xúc
                    bằng cách đặt kiện hàng ở vị trí thuận tiện đồng thời bạn có thể ký xác nhận để nhân viên chụp lại
                    từ khoảng cách an toàn. Nếu thanh toán bằng tiền mặt, bạn vui lòng chuẩn bị tiền đúng như giá trị
                    đơn hàng và gián tiếp đưa cho nhân viên như cách bạn nhận kiện hàng.</li>
                <li>Bạn nhớ mang khẩu trang khi nhận hàng và rửa tay sạch sau khi nhận hàng để giữ an toàn!</li>
            </ul>
            <hr style="border: 7px solid rgb(201, 2, 2);background-color: rgb(201, 2, 2)">

            <p style="font-size: 30px;"><i class="fa fa-map-marker" aria-hidden="true"></i> Đơn hàng được giao đến</p>
            <table style="margin: 20px;padding: 20px;font-size: 16px;">

                <tr>
                    <th style="padding: 5px;text-align: left;">Tên: </th>
                    <td style="padding: 5px;">{{ $hoten }}</td>
                </tr>

                <tr>
                    <th style="padding: 5px;text-align: left;">Địa chỉ nhà: </th>
                    <td style="padding: 5px;">{{ $noinhan }}</td>
                </tr>
                <tr>
                    <th style="padding: 5px;text-align: left;">Số điện thoại: </th>
                    <td style="padding: 5px;">{{ $sodienthoai }}</td>
                </tr>
                <tr>
                    <th style="padding: 5px;text-align: left;">Email: </th>
                    <td style="padding: 5px;">{{ $email }}</td>
                </tr>
            </table>

            <hr style="border: 7px solid rgb(201, 2, 2);background-color: rgb(201, 2, 2)">

            <table style="margin: 20px auto;border: 1px solid white;padding: 20px;border-radius: 7px;">
                <p style="font-size: 30px;"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Kiện hàng</p>
                @foreach ($products as $i)
                <tr>
                    <td style="padding: 5px;">
                    <img width="160px" src="../images/producs/{{ $i->options->avatar }}" alt="">
                    </td>
                    <td style="padding: 5px;">
                        <p>{{ $i->name }}<br>
                            <strong style="color: red;">VND {{ number_format($i->price,0,',','.') }}</strong> <br>
                            Số lượng: {{ $i->qty }}
                        </p>
                    </td>
                </tr>
               @endforeach
            </table>

            <hr style="border: 7px solid rgb(201, 2, 2);background-color: rgb(201, 2, 2)">

            <table style="width: 100%;">
                <tr>
                    <th style="text-align: left;">Hình thức thanh toán:</th>
                    <th style="text-align: right;">Thanh toán khi nhận hàng</th>
                </tr>

                <tr>
                    <th style="text-align: left;">Tạm tính:</th>
                    <th style="text-align: right;">{{ $tamtinh }}</th>
                </tr>

                <tr>
                    <th style="text-align: left;">Mã giảm giá:</th>
                    <th style="text-align: right;">{{ $codegift }}</th>
                </tr>

                <tr>
                    <th style="text-align: left;">Phí vận chuyển:</th>
                    <th style="text-align: right;">30.000đ</th>
                </tr>

                <tr>
                    <th style="text-align: left;">Tổng cộng:</th>

                    <th style="text-align: right;">{{ $tonggia }}</th>
                </tr>
            </table>
        </div>
    </div>
    <header style="color: white;padding: 20px ;background-color: rgb(0, 0, 0);text-align: center;font-family: sans-serif;text-decoration: none;font-size: 16px;">
        <p>
            <strong>
                <a href="">Trung tâm hỗ trợ</a> |
                <a href="">Liên hệ</a>
            </strong> <br> <br>
            Công ty TNHH ECLICKBUY - Điện Bàn, Quảng Nam <br><br>
            <img src="" alt=""> <br><br>
            Đây là thư tự động được tạo từ danh sách đăng ký của chúng tôi. Do đó, xin đừng trả lời thư này.

        </p>
    </header>
</body>

</html>


