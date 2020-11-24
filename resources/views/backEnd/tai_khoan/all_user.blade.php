@extends('template.backend')
@section('container')
<div class="card">
    <div class="card-header">
        Liệt kê người dùng
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
                    <th>Họ Và Tên</th>
                    <th>Số Điện Thoại</th>
                    <th>Email</th>
                    <th>Vai Trò</th>
                    <th>Ảnh Đại Diện</th>
                    <th>Ngày Sinh</th>
                    <th>Ngày Tạo</th>
                    <th>Tình trạng</th>
                    <th>Chỉnh sửa</th>
                </tr>
            </thead>
            <tbody>
                @foreach($all_user as $key =>$user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->ho_ten}}</td>
                    <td>{{$user->so_dien_thoai}}</td>
                    <td>{{$user->email}}</td>
                    <td><span class="text-ellipsis">
                        <?php
                        if ($user->vai_tro == 0) {
                        ?>
                            <span class="badge badge-success">Mặc Định</span>
                        <?php
                        }
                        else {
                        ?>
                            <span class="badge badge-primary">Nhân Viên</span>
                        <?php
                        }
                        ?>
                    </span></td>
                    <td><img src="images/user/{{$user->anh_dai_dien}}" alt="" height="80" width="60"></td>
                    <td>{{$user->ngay_sinh}}</td>
                    <td>{{$user->ngay_tao}}</td>
                    <td><span class="text-ellipsis">
                        <?php
                        if ($user->status == 0) {
                        ?>
                            <a href="{{ route('unactive-user',['id'=> $user->id]) }}"><span class="badge badge-success">Vô Hiệu Hóa</span></a>
                        <?php
                        } else {
                        ?>
                            <a href="{{ route('active-user',['id'=> $user->id]) }}"><span class="badge badge-primary">Hoạt Động</span></a>
                        <?php
                        }
                        ?>
                        </span></td>
                    <td>
                        <?php
                        if ($user->vai_tro == 1) {
                        ?>
                            <span class="badge badge-secondary">ADMIN</span>
                        <?php
                        } else {
                        ?>
                        <a class="btn btn-outline-success" href="{{ route('edit-user',['id'=> $user->id]) }}"><i class="fas fa-edit"></i></a>
                        <a class="btn btn-warning" onclick="return confirm('Bạn muốn xóa người dùng này hả ?')" href="{{ route('delete-user',['id'=> $user->id]) }}"><i class="fas fa-trash-alt"></i></a>
                        <?php
                        }
                        ?>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{ $all_user->links() }}
    </div>
</div>
@endsection
