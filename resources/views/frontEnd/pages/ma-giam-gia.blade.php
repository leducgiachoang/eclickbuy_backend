@extends('template.front_end')
@section('container_layout')
@section('title','Săn Mã Giảm Giá')
    <script src="../js/jquery.lazy.min.js"></script>
    <script src="../js/jquery.lazy.plugins.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
    <script>
        new ClipboardJS('.btn');
        $(document).ready(function(){
            $('.lazy').Lazy({
                placeholder: "https://giphy.com/gifs/xT9DPldJHzZKtOnEn6/html5"
            });

        });
    </script>
    <br>
    <div class="container">
        <div class="row">
            @foreach ($dbGiftCodes as $dbGiftCode)

            <div style="position: relative;border: 3px dotted coral; background: rgb(253, 255, 119); margin-bottom: 5px;" class="lazy col-sm-6">
                <button data-clipboard-target="#{{ $dbGiftCode->code }}" style="float: right;margin-top: 60px;" type="button" class="btn btn-danger">Thu nhập</button>
                <div>
                    <img src="../images/12code.png"
                        style="float: left;height: 100px;width: 120px;margin-right: 20px;"
                        alt="">
                    <p style="font-size: 20px;" class="text-danger"><span
                            style="font-size: 35px;font-weight: 650;">{{ $dbGiftCode->gia_tri }}%</span>
                        Giảm</p>
                    <p  style="font-size: 20px;font-weight: 550" class="text-danger">
                        <input style="
                        width: 55%;
                        border: navajowhite;
                        padding: 0;
                        margin: 0px;
                        position: relative;
                        top: -15px;
                        font-weight: 800;background: rgb(253, 255, 119)
                    " id="{{ $dbGiftCode->code }}" type="text" value="{{ $dbGiftCode->code }}">
                        </p>
                </div>
                <p class="col-12 " style="font-size: 18px; font-weight: 550;">Cho toàn gian hàng Áp dụng: <span
                        class="text-danger">Từ {{ date("d".'.'."m". '.'."Y", strtotime($dbGiftCode->ngay_bat_dau)) }} <strong style="color: black">đến</strong> {{ date("d".'.'."m". '.'."Y", strtotime($dbGiftCode->ngay_ket_thuc)) }}</span></p>
            </div>
            @endforeach

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
