@extends('template.front_end')
@section('container_layout')
@section('title','Giới Thiệu Về Chúng Tôi')
    <style>

        .snip1573 {
            background-color: #000;
            display: inline-block;
            font-family: 'Open Sans', sans-serif;
            font-size: 25px;
            /* margin: 10px; */
            max-width: 100%;
            min-width: 230px;
            overflow: hidden;
            position: relative;
            text-align: center;
            width: 100%;
        }

        .snip1573 * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: all 0.35s ease;
            transition: all 0.35s ease;
        }

        .snip1573:before,
        .snip1573:after {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            -webkit-transition: all 0.35s ease;
            transition: all 0.35s ease;
            background-color: #000000;
            border-left: 3px solid #fff;
            border-right: 3px solid #fff;
            content: '';
            opacity: 0.9;
            z-index: 1;
        }

        .snip1573:before {
            -webkit-transform: skew(45deg) translateX(-155%);
            transform: skew(45deg) translateX(-155%);
        }

        .snip1573:after {
            -webkit-transform: skew(45deg) translateX(155%);
            transform: skew(45deg) translateX(155%);
        }

        .snip1573 img {
            backface-visibility: hidden;
            max-width: 100%;
            vertical-align: top;
        }

        .snip1573 figcaption {
            top: 50%;
            left: 50%;
            position: absolute;
            z-index: 2;
            -webkit-transform: translate(-50%, -50%) scale(0.5);
            transform: translate(-50%, -50%) scale(0.5);
            opacity: 0;
            -webkit-box-shadow: 0 0 10px #fff;
            box-shadow: 0 0 10px #000000;
        }

        .snip1573 h3 {
            background-color: #000000;
            border: 2px solid #fff;
            color: #fff;
            font-size: 1em;
            font-weight: 600;
            letter-spacing: 1px;
            margin: 0;
            padding: 5px 10px;
            text-transform: uppercase;
        }

        .snip1573 a {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 3;
        }

        .snip1573:hover>img,
        .snip1573.hover>img {
            opacity: 0.5;
        }

        .snip1573:hover:before,
        .snip1573.hover:before {
            -webkit-transform: skew(45deg) translateX(-55%);
            transform: skew(45deg) translateX(-55%);
        }

        .snip1573:hover:after,
        .snip1573.hover:after {
            -webkit-transform: skew(45deg) translateX(55%);
            transform: skew(45deg) translateX(55%);
        }

        .snip1573:hover figcaption,
        .snip1573.hover figcaption {
            -webkit-transform: translate(-50%, -50%) scale(1);
            transform: translate(-50%, -50%) scale(1);
            opacity: 1;
        }

        @import url(https://fonts.googleapis.com/css?family=Josefin+Sans);
        @import url(https://fonts.googleapis.com/css?family=Cardo);

        figure.snip1524 {
            font-family: 'Josefin Sans', sans-serif;
            position: relative;
            overflow: hidden;
            /* margin: 10px; */
            min-width: 230px;
            max-width: 100%;
            width: 100%;
            color: #ffffff;
            text-align: center;
            font-size: 16px;
            background-color: #000000;
        }

        figure.snip1524 * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: all 0.45s ease;
            transition: all 0.45s ease;
        }

        figure.snip1524 img {
            vertical-align: top;
            max-width: 100%;
            backface-visibility: hidden;
        }

        figure.snip1524 figcaption {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 1;
            padding: 30px;
            background-color: rgba(53, 52, 52, 0.685);
            border: 4px solid rgba(255, 255, 255, 0.05);
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
            -webkit-transform-origin: 0 0%;
            -ms-transform-origin: 0 0%;
            transform-origin: 0 0%;
        }

        figure.snip1524 h2,
        figure.snip1524 p {
            line-height: 1.5em;
            margin: 0;
        }

        figure.snip1524 h2 {
            font-family: 'Cardo', serif;
            display: inline-block;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        figure.snip1524 p {
            padding: 8px 0 15px;
        }

        figure.snip1524 a {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 1;
        }

        figure.snip1524:hover>img,
        figure.snip1524.hover>img {
            opacity: 0.2;
        }

        figure.snip1524:hover figcaption,
        figure.snip1524.hover figcaption {
            -webkit-transform-origin: 100% 100%;
            -ms-transform-origin: 100% 100%;
            transform-origin: 100% 100%;
            -webkit-transform: rotate(0);
            transform: rotate(0);
        }


        .snip1533 {
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
            color: #9e9e9e;
            display: inline-block;
            font-family: 'Roboto', Arial, sans-serif;
            font-size: 16px;
            margin: 10px;
            max-width: 100%;
            min-width: 250px;
            position: relative;
            text-align: center;
            width: 100%;
            background-color: #ffffff;
            border-radius: 5px;
            border-top: 5px solid #d2652d;
        }

        .snip1533 *,
        .snip1533 *:before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: all 0.1s ease-out;
            transition: all 0.1s ease-out;
        }

        .snip1533 figcaption {
            padding: 13% 10% 12%;
        }

        .snip1533 figcaption:before {
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            background-color: #fff;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.25);
            color: #d2652d;
            content: "";
            font-family: 'FontAwesome';
            font-size: 32px;
            font-style: normal;
            left: 50%;
            line-height: 60px;
            position: absolute;
            top: -30px;
            width: 60px;
        }




    </style>
    <script>
        $(".hover").mouseleave(
            function () {
                $(this).removeClass("hover");
            }
        );
        $("figure").mouseleave(
            function () {
                $(this).removeClass("hover");
            }
        );
    </script>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div>

                    <p>
                        <span style="text-align: center;"><h4 style="margin-top: 10px;">Giới Thiệu</h4></span>
                    <p style="text-align: left;font-weight: 650;font-size: 32px;">Về
                        chúng tôi</p>
                    <p style="text-align: justify; font-size: 18px;">-
                        Trong
                        những năm qua, xã hội phát triển, kinh tế tăng trưởng đồng thời là chất lượng cuộc sống
                        của người dân ngày càng được nâng cao nhiều trung tâm thương mại, nhà cao tầng, biệt thự được
                        mọc ra kèm theo đấy là nhu cầu mua sắm các thiết bị phục vụ nhu cầu cuộc sống hàng ngày như TV,
                        Tủ lạnh, Điện gia dụng....<br>

                        - Sự kiện ngày 25 tháng 09 năm 2003. Siêu thị điện máy Eco Shop chính thức tham gia vào lĩnh vực
                        kinh doanh bán lẻ điện máy, tạo ra một phong cách mua sắm hoàn toàn mới với người dân thành thị
                        , thông qua các sản phẩm và dịch vụ tới người tiêu dùng. phát huy quyền chủ động hội nhập của
                        các doanh nghiệp,được vị trí trên thị trường và tâm trí người tiêu dùng, khẳng định sự phát
                        triển ổn định.</p>
                    </p>
                </div>
            </div>
        </div>
        <div style="margin-top: 20px;" class="row">
            <div class="col-sm-6">
                <figure class="snip1524">
                    <img src="https://cdn.timviec365.vn/pictures/images/tang-truong-kinh-te-la-gi.png" alt="sample26" />
                    <figcaption>
                        <h2>Định hướng của công ty</h2>
                        <p style="text-align: justify;">Với kim chỉ nam là “ Luôn mang niềm vui tới mọi nhà ”, Siêu thị
                            điện máy đã quy tụ được Ban Lãnh đạo có bề dày kinh nghiệm trong các lĩnh vực điện máy không
                            chỉ mạnh về kinh doanh mà còn mạnh về công nghệ có nhiều tiềm năng phát triển, kết hợp với
                            đội ngũ nhân viên trẻ, năng động và chuyên nghiệp tạo nên thế mạnh nòng cốt của công ty để
                            thực hiện tốt các mục tiêu đề ra.</p>
                    </figcaption>
                    <a href="#"></a>
                </figure>
            </div>
            <div class="col-sm-6">
                <figure class="snip1533">
                    <figcaption class="">

                        <h4 style="color: black;font-weight: 600;">Những cam kết của công ty</h4>
                        <p style="text-align: justify;">Cam kết với đối tác: Trở thành đối tác chiến lược trên cơ sở "
                            Hợp tác phát triển bền vững "
                            hợp tác toàn diện lâu dài
                            Cam kết với khách hàng : Luôn luôn làm khách hàng hài lòng về các sản phẩm và dịch vụ do
                            Siêu thị điện máy cung cấp. Sự thành công hài lòng của khách hàng là thước đo uy tín hiệu
                            quả của doanh nghiệp</p>
                    </figcaption>
                </figure>
            </div>
        </div>
        <hr>
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
