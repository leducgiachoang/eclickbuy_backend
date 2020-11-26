@extends('template.front_end')
@section('container_layout')
<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
<div class="container">
    <div style="margin-top: 30px;margin-bottom: 20px;">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <a href="#" class="bg-danger text-white list-group-item list-group-item-action">
                      Đơn hàng của tôi
                    </a>
                    <a href="{{ route('DonHangCuaToibyid',['id'=>3]) }}" class="list-group-item list-group-item-action">Đơn hàng đổi trả</a>
                    <a href="{{ route('DonHangCuaToibyid',['id'=>2]) }}" class="list-group-item list-group-item-action">Đơn hàng đã hũy</a>
                    <a href="{{ route('KiemTraDonHang_get') }}" class="list-group-item list-group-item-action">Kiểm tra đơn hàng</a>
            </div>

            <div class="col-lg-9 col-md-9 no-padding">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" href="{{ route('DonHangCuaToi_get') }}" >Tất cả</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link"  href="{{ route('DonHangCuaToibyid',['id'=>0]) }}" role="tab" aria-controls="pills-profile" aria-selected="false">Chờ xử lý</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link"  href="{{ route('DonHangCuaToibyid',['id'=>1]) }}" role="tab" aria-controls="pills-contact" aria-selected="false">Chờ giao hàng</a>
                    </li>

                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="{{ route('DonHangCuaToibyid',['id'=>4]) }}" role="tab" aria-controls="pills-contact" aria-selected="false">Đơn hàng đã giao</a>
                      </li>
                </ul>


                  <div style="" class="tab-content" id="pills-tabContent">
                      @yield('Mydon_hang_template')
                  </div>



                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Gửi đánh giá về sản phẩm</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <form action="{{ route('GuiDanhGia_post') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                                <div class="form-group">
                                    <input value="5" class="star star-5" id="star-5" checked type="radio" name="star"/>
                                    <label class="star star-5" for="star-5"></label>
                                    <input value="4" class="star star-4" id="star-4" type="radio" name="star"/>
                                    <label class="star star-4" for="star-4"></label>
                                    <input value="3" class="star star-3" id="star-3" type="radio" name="star"/>
                                    <label class="star star-3" for="star-3"></label>
                                    <input value="2" class="star star-2" id="star-2" type="radio" name="star"/>
                                    <label class="star star-2" for="star-2"></label>
                                    <input value="1" class="star star-1" id="star-1"  type="radio" name="star"/>
                                    <label class="star star-1" for="star-1"></label>
                                </div>
                            <div style="clear: both" class="form-group">
                                <input readonly name="id_san_pham" type="hidden" id="id_sp_get" class="form-control" value="" >
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Nội dung đánh giá:</label>
                                <textarea name="noi_dung" required class="form-control" id="message-text"></textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                            <button type="submit" class="btn btn-primary">Gửi đánh giá</button>
                        </div>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@section('script')
<script>
    $(document).ready(function(){
        $('.buttom_get_id_sp_danhgia').click(function(){
            $id_sp_danhgia = $(this).find('.id_sp_danhgia').val();
            $('#id_sp_get').val($id_sp_danhgia);
        })
    })
</script>
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

    div.stars {
        width: 100%;
        display: inline-block;
      }

      input.star { display: none; }

      label.star {
        float: right;
        padding: 10px;
        font-size: 36px;
        color: #444;
        transition: all .2s;
      }

      input.star:checked ~ label.star:before {
        content: '\f005';
        color: #FD4;
        transition: all .25s;
      }

      input.star-5:checked ~ label.star:before {
        color:#FFC107;
        text-shadow: 0 0 2px rgb(184, 0, 0);
      }

      input.star-1:checked ~ label.star:before { color: #F62; }

      label.star:hover { transform: rotate(-15deg) scale(1.3); }

      label.star:before {
        content: '\f006';
        font-family: FontAwesome;
      }
</style>
@endsection

@endsection
