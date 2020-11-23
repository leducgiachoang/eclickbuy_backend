@extends('template.backend')
@section('container')
<div class="container" style="width:100%">
    <div class="row" style="font-size: 14px">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center">
                    Liệt kê Slider
                </div><br>
                <div class="table-responsive">
                    <?php
                    $message = Session::get('message');
                    if ($message) {
                        echo $message;
                        Session::put('message', null);
                    }
                    ?>
                    <table class="table table-striped b-t b-light">
                        <thead>
                            <tr>
                                <th style="width:20px;">
                                    <label class="i-checks m-b-none">
                                        <input type="checkbox"><i></i>
                                    </label>
                                </th>
                                <th>Số TT</th>
                                <th>Hình ảnh</th>
                                <th>Mô tả</th>
                                <th>Chỉnh sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($all_slider_product as $key =>$slider)
                            <tr>
                                <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                                <td>{{$slider->id}}</td>
                                <td><img src="images/slider/{{$slider->hinh_anh}}" alt="" height="120" width="100"></td>
                                <td>{{$slider->noi_dung_hinh_anh}}</td>
                                <td>
                                    <a href="{{ route('view-edit-slider',['id'=> $slider->id]) }}" class="active" ui-toggle-class="">
                                        <i class="fas fa-edit"></i></a>
                                    <a onclick="return confirm('Bạn muốn xóa slider này hả ?')" href="{{ route('delete-slider',['id'=> $slider->id]) }}" class="active" ui-toggle-class="">
                                        <i class="fa fa-times text-danger text"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <footer class="panel-footer">
                    <div class="row">

                        <div class="col-sm-5 text-center">
                            <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                        </div>
                        <div class="col-sm-7 text-right text-center-xs">
                            <ul class="pagination pagination-sm m-t-none m-b-none">
                                <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                                <li><a href="">1</a></li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
                                <li><a href="">4</a></li>
                                <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </footer>
            </div>
    </div>
</div>
@endsection
