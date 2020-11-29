@extends('template.front_end')
@section('container_layout')


    <script>
        $(".hover").mouseleave(
            function () {
                $(this).removeClass("hover");
            }
        );

    </script>

    <div class="container">

        <div style="margin-top: 20px; margin-bottom: 20px" class="row">
            <div class="col-sm-4">
                <h6 style="font-size: 40px;">Liên Hệ</h6>
                <p>ECLICKBUY là một trong những điểm đến tin cậy của người tiêu dùng thông thái bắt nguồn từ diễn đàn công
                    nghệ lớn nhất Việt Nam.</p>
                <p><i class="fas fa-map-marker-alt text-danger"></i> <span style="font-weight: 650;font-size: 18px;">Địa
                        chỉ:</span> 137 Nguyễn Thị Thập, Hòa Minh, Liên Chiểu, Đà Nẵng</p>
                <p><i class="fas fa-envelope text-danger"></i> <span
                        style="font-weight: 650;font-size: 18px;">Email:</span> eclickBuy@gmail.com</p>
                <p><i class="fas fa-phone-alt text-danger"></i> <span
                        style="font-weight: 650;font-size: 18px;">Phone:</span> 0369203989</p>
            </div>
            <div class="col-sm-8">
                <h4>GỬI THÔNG TIN CHO CHÚNG TÔI!</h4>
                <p>Hãy liên hệ ngay với chúng tôi để nhận được thông tin tư vấn về sản phẩm cùng nhiều ưu đãi hấp dẫn
                    dành cho bạn!</p>

                    <div class="row">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.8025459042856!2d108.16776031468427!3d16.0757329888769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218e6e72e66f5%3A0x46619a0e2d55370a!2zMTM3IE5ndXnhu4VuIFRo4buLIFRo4bqtcCwgVGhhbmggS2jDqiBUw6J5LCBMacOqbiBDaGnhu4N1LCDEkMOgIE7hurVuZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1606381215938!5m2!1svi!2s" width="800" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
