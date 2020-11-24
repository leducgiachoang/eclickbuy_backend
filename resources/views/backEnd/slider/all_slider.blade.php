@extends('template.backend')
@section('container')
<div class="card">
    <div class="card-header">
        Liệt kê Slider
    </div>
    <div class="card-body">
        <?php
        $message = Session::get('message');
        if ($message) {
            echo $message;
            Session::put('message', null);
        }
        ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Số TT</th>
                    <th>Hình ảnh</th>
                    <th>Mô tả</th>
                    <th>Chỉnh sửa</th>
                </tr>
            </thead>
            <tbody>
                @foreach($all_slider_product as $key =>$slider)
                <tr>
                    <td>{{$slider->id}}</td>
                    <td><img src="images/slider/{{$slider->hinh_anh}}" alt="" height="120" width="100"></td>
                    <td>{{$slider->noi_dung_hinh_anh}}</td>
                    <td>
                        <a class="btn btn-outline-success" href="{{ route('view-edit-slider',['id'=> $slider->id]) }}"><i class="fas fa-edit"></i></a>
                        <a class="btn btn-warning" onclick="return confirm('Bạn muốn xóa Slider này hả ?')" href="{{ route('delete-slider',['id'=> $slider->id]) }}"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{-- {{ $brand_pro->links() }} --}}
    </div>
</div>
@endsection
