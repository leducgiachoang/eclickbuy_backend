@extends('template.backend')
@section('container')
<div class="card">
    <div class="card-header">
        Liệt kê người dùng
        <!-- Topbar Search -->
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
            <input type="text" class="form-control border-0 small" id="search_user" placeholder="Tìm kiếm người dùng" aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" onclick="tai_lai_trang()" type="button">
                <i class="fas fa-sync"></i>
                </button>
            </div>
            </div>
        </form>
    </div>
    <div class="card-body">
        <?php
        $message = Session::get('message');
        if ($message) {
            echo $message;
            Session::put('message', null);
        }
        ?>
        <table class="table table-bordered" style="font-size: 15px">
            <thead>
                <tr>
                    <th>Số TT</th>
                    <th>Họ Và Tên</th>
                    <th>Email</th>
                    <th>Vai Trò</th>
                    <th>Ảnh Đại Diện</th>
                    <th>Ngày Sinh</th>
                    <th>Ngày Tạo</th>
                    <th>Tình trạng</th>
                    <th>Chỉnh sửa</th>
                </tr>
            </thead>
            <tbody id="search-user-view">
                <?php $a=1 ?>
                @foreach($all_user as $key =>$user)
                <tr>
                    <td>{{$a}}</td>
                    <td>{{$user->ho_ten}}</td>
                    <td>{{$user->email}}</td>
                    <td>
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
                    </td>
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
                        <a class="btn btn-outline-success" href="{{ route('edit-user',['id'=> $user->id]) }}"><i class="fas fa-edit"></i></a>
                        <a class="btn btn-warning" onclick="return confirm('Bạn muốn xóa người dùng này hả ?')" href="{{ route('delete-user',['id'=> $user->id]) }}"><i class="fas fa-trash-alt"></i></a>


                    </td>
                </tr>
                <?php $a++ ?>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{ $all_user->links() }}
    </div>
</div>
<script type="text/javascript">
    function tai_lai_trang(){
        location.reload();
    }
    $('body').on('keyup','#search_user',function(){
        var searchUser = $(this).val();
        $.ajax({
            method: 'POST',
            url: '{{route("search-user")}}',
            dataType: 'json',
            data:{
                '_token':'{{csrf_token()}}',
                searchUser : searchUser
            },
            success: function(res){
                var tableRow ='';
                $('#search-user-view').html('');
                $a = 1;
                $.each(res,function(index,value){
                    $vaitro = value.vai_tro;
                    if($vaitro == 0){
                        $echo = '<span class="badge badge-success">Mặc Định</span>';
                    }if($vaitro== 1){
                        $echo = '<span class="badge badge-primary">Nhân Viên</span>';
                    }
                    $status = value.status;
                    if($status == 0){
                        $stts = '<a href="admin/nguoi-dung/unactive-user/'+value.id+'"><span class="badge badge-success">Vô Hiệu Hóa</span></a>';
                    }if($status == 1){
                        $stts = '<a href="admin/nguoi-dung/active-user/'+value.id+'"><span class="badge badge-primary">Hoạt Động</span></a>';
                    }

                    $tableRow = '<tr><td>'+$a+'</td>'
                        +'<td>'+value.ho_ten+'</td>'
                        +'<td>'+value.email+'</td>'
                        +'<td><span class="text-ellipsis">'+$echo+'</span></td>'
                        +'<td><img src="images/user/'+value.anh_dai_dien+'" alt="" height="80" width="60"></td>'
                        +'<td>'+value.ngay_sinh+'</td>'
                        +'<td>'+value.ngay_tao+'</td>'
                        +'<td><span class="text-ellipsis">'+$stts+' </span></td>'
                        +'<td><a class="btn btn-outline-success" href="admin/nguoi-dung/edit-user/'+value.id+'"><i class="fas fa-edit"></i></a> <a class="btn btn-warning" href="admin/nguoi-dung/delete-user/'+value.id+'"><i class="fas fa-trash-alt"></i></a> </td></tr>';
                        $a++
                    $('#search-user-view').append($tableRow);
                });
            }
        });
    });
</script>
@endsection
