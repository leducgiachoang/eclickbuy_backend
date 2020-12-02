<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body{
            background-color: whitesmoke;
            padding: 0px;
            margin: 0px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: bold;
        }
        .container{
            width: 50%;
            margin: auto;
            text-align: center;
        }
        .content{
            width: 100%;
            margin: auto;
            text-align: center;
            background-color: white;
            border-top: 3px solid orangered;
            font-weight: bold;
        }
        .logo{
            text-align: left;
            width: 100%;
        }
        .logo img{
            width: 200px;
            padding: 20px 0px;
            float: left;
        }
        .logo p{
            text-align: right;padding: 50px 0px;font-size: 14px;color: rgb(156, 155, 155);
        }
        .full{
            background-color: white;
            width: 80%;
            margin: auto;
            text-align: center;
            padding-bottom: 50px;
        }
        button{
            width: 100%;
            margin-top: 50px;
            line-height: 30px;
            background-color: rgb(17, 182, 72);
            border: 0px;
            border-radius: 2px;
        }
        button span{
            color: white;
            font-size: 16px;
            font-weight: 550;
        }
        .font{
            text-align: left;
        }
        .font p{
            font-size: 17px;
            font-weight: bold;
        }
        .font a{
            text-decoration: none;
            color: cornflowerblue;
        }
        .incon{
            display: inline-block;
            list-style: none;
            float: right;
        }
        .incon li {
            display: inline-block;
            list-style: none;
        }
        .incon li a img{
            width: 15px;
        }
        @media (max-width:950px) {
            .container {
                width: 98%;
            }

            .container .content {
                width: 98%;
                margin: auto;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div style="background: antiquewhite;">

        <div class="container">
            <div class="logo">
                <img src="https://lh3.googleusercontent.com/dO4YtHNiaXddUUIpoYklC8jFMHzJDc2F34gR3IpyvlHNCK9E4fZ_YYVzTXhKHktpq_Om3bcwHUkFeUTYd8F2UyxKtI2ZxgvPrhOSX1aBrGhDrNe6GGuQNybW57NXeBG8yAXceVDUzWd7W9FTvbKVxVAfzib2fh24iT-JXVhHxm8DC_wVe5RnMeTx261_jXX8f8vv4R29nUlGWW3SMoyF63DP4MWS-qPKUnDprHlojXZs4tXB-HUJFbyKKdXS_pGPe4t5WrtrlJJLhpyip_pNjae7oN1ZbLt8H7JdB9xJOhfNOFpQjmAa_cH33oeH4ySV2-uwVkopDOBM9u6FHaSzPDyZAZ_eK0GlAdiV6DIfrEuHjRDDNhZaMU2w7YdqsWihHLTnH1IsG-5__xAnFmPtDghn_MGs6gMNxBWXkfxHYjZ2i2syx_I81toG1fre8frbJJvj1f8BXWA7hJvsuC15PTdzN-GMO4-3Rh8TWZfIVJ6uOulXyPHXCgZUSD1_xggC52qzjxnYj1xifsprWXnS8hHlWa9cNQImXRV10_2TIeX2hoKApdeGy81mOBv9VFtihhRPi3-3MnO7P7eySSNZ8Jf18Dpj-UJccUibKK9E9X3OdIvxgGBuQrlBjeDl8_SqNVM0GAhX4KX2oT1xaDmS6cRhOnQL_Kk8_L6kUkgnFa4L3Va8aOb_btKS9dHe-yw=w1920-h688-no?authuser=0" alt="">
                <p></p>
            </div>
            <div class="content">
                <div class="full">
                    <a href="{{ $link }}"><button><span>THAY ĐỔI MẬT KHẨU</span></button></a>
                    <div class="font">
                        <p> <span style="color: black;font-size: 18px;font-weight: 550;">Kính gửi (ông/bà): </span> {{ $ten }}</p>
                        <p>Bạn có yêu cầu thay đổi mật khẩu tại <strong style="color: rgb(221, 9, 9);">ECLICKBUY</strong>. Dưới đây là thông tin xác nhận từ hệ thống.</p>
                        <p style="color: rgb(14, 170, 61);font-size: 18px;font-weight: 550;">Đường dẫn thay đổi mật khẩu</p>
                        <p style="text-align: left;"><a style="font-weight: 500;">{{ $link }}</a></p>
                        <p style="text-align: center;"> TNHH Eclickbuy xin trân trọng thông báo!</p>
                        <p>---------------------------------------------<br>
                            <span>Công ty TNHH Công Nghệ ECLICKBUY</span><br>
                            Địa chỉ: 137 Nguyễn Thị Thập, Hòa Minh, Liên Chiểu, Đà Nẵng<br>
                            <span>Số điện thoại: 0369203989 | Email: eclicbuyshop@com.vn</span><br>
                            Website: <a href="https://eclickbuy.xyz/">eclickbuy.xyz</a><br>

                        </p>
                    </div>
                </div>
            </div>
            <div class="logo">
                <div style="float: left;margin-top: 40px;"><a style="text-decoration: none; color: cornflowerblue;" href="https://eclickbuy.xyz/">Website của chúng tôi</a></div>
                <ul class="incon">

                </ul>
            </div>
        </div>
    </div>
</body>
</html>
