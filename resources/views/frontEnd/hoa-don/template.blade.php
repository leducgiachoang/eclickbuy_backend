@extends('template.front_end')
@section('container_layout')

<div class="container">
    <div style="margin-top: 30px;margin-bottom: 20px">
        <div  class="row">
            <div style="z-index: -9" class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="list-group">
                    <a href="#" class="bg-danger text-white list-group-item list-group-item-action active">
                      Đơn hàng của tôi
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">Đơn hàng đổi trả</a>
                    <a href="#" class="list-group-item list-group-item-action">Đơn hàng đã hũy</a>
                </div>
            </div>

            <div class="col-lg-9 col-md-9 no-padding">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" data-toggle="pill" href="" role="tab" aria-controls="pills-home" aria-selected="true">Tất cả <span class="badge bg-danger text-white badge-pill">14</span></a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link"  data-toggle="pill" href="" role="tab" aria-controls="pills-profile" aria-selected="false">Chờ thanh toán</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" data-toggle="pill" href="" role="tab" aria-controls="pills-contact" aria-selected="false">Chờ Vận chuyển</a>
                    </li>

                    <li class="nav-item" role="presentation">
                        <a class="nav-link"  data-toggle="pill" href="" role="tab" aria-controls="pills-contact" aria-selected="false">Chờ giao hàng</a>
                      </li>
                  </ul>


                  <div style="" class="tab-content" id="pills-tabContent">
                      @yield('Mydon_hang_template')
                  </div>

                

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Recipient:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Send message</button>
                        </div>
                        </div>
                    </div>
                </div>
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
