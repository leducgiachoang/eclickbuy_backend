@extends('template.front_end')
@section('container_layout')
@section('title','Thanh toán đơn hàng')



<div style="background-image: url('https://c.wallhere.com/images/d0/d0/3c9203dca6873e85879197389228-1520111.jpg!d');
            background-repeat: no-repeat;background-size: 100% 100%;
            background-attachment: fixed;margin: 0px auto;padding: 40px 0">
                  <div style="width: 800px;
                       padding: 90px 60px;
                       background: #ffffffbf;
                       margin: 30px auto;
                       border-radius: 10px;">
                      <div style="text-align: center">
                          <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                          <h1 style="font-size: 40px;font-family: sans-serif;">
                              BẠN ĐÃ ĐẶT HÀNG THÀNH CÔNG
                          </h1>
                          <p style="font-size: 16px;
                             font-family: sans-serif;">Cảm ơn Quý khách đã mua sắm tại <strong>ECLICKBUY</strong>. Đơn hàng của Quý khách đang được xử lý. Mã số đơn hàng của Quý khách là:</p>
                          <div style="background: #c80066;color: white;padding: 18px;width: 510px;text-align: center; margin: 10px auto;font-size: 35px;font-weight: bold;font-family: sans-serif;">
                             {{ $id_hoa_don }}
                          </div>
                          <p style="font-size: 16px;font-family: sans-serif;">
                              Nhân viên của chúng tôi sẽ liên hệ với Quý khách trong thời gian sớm nhất.<br>
                              Nếu Quý khách có thắc mắc, xin vui lòng liên hệ với chúng tôi qua số hotline <strong style="color: #cc0000">0369.203.989</strong>
                          </p>
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
