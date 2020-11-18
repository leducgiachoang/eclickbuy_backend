<?php

namespace App\Http\Controllers\BackEnd;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Hash;
use Session;
session_start();

class UserController extends Controller
{
    public function add_user()
    {
        return view('backEnd.tai_khoan.add_user');
    }
    public function save_user(Request $request)
    {
        $data = array();
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $request->validate(
            [
                'ho_ten'=> 'required|min:5|max:50',
                'so_dien_thoai'=>'required|unique:tai_khoan,so_dien_thoai',
                'email'=> 'required|email|unique:tai_khoan,email',
                'password'=> 'required|min:6',
                're_password'=>'required|same:password',
            ],
            [
                'ho_ten.required'=> 'Vui lòng nhập Họ và Tên',
                'ho_ten.min'=> 'Vui lòng nhập Họ và Tên ít nhất 5 kí tự',
                'ho_ten.max'=> 'Vui lòng nhập Họ và Tên không quá 50 kí tự',
                'so_dien_thoai.required'=>'Số điện thoại không được để trống',
                'so_dien_thoai.unique'=> 'Số điện thoại này đã có người đăng ký đã có người sử dụng',
                'email.required'=> 'Vui lòng nhập Email',
                'email.email'=> 'Không đúng định dạng Email',
                'email.unique'=> 'Email đã có người sử dụng',
                'password.required'=> 'Vui lòng nhập mật khẩu',
                're_password.same'=> 'Mật khẩu không giống nhau',
                're_password.required'=> 'Vui lòng nhập xác nhận lại mật khẩu',
                'password.min'=> 'Mật khẩu ít nhất 6 kí tự',
        ]);
        $data['ho_ten'] = $request->ho_ten;
        $data['so_dien_thoai'] = $request->so_dien_thoai;
        $data['email'] = $request->email;
        $data['password'] = bcrypt($request->password);
        $data['vai_tro'] = $request->vai_tro;
        $data['ngay_sinh'] = $request->ngay_sinh;
        $data['status'] = $request->trang_thai;
        $data['ngay_tao'] = $dt;
        $get_image = $request->file('anh_dai_dien');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalExtension();
            $name_image = current(explode('.', $get_name_image));

            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('images/user/', $new_image);
            $data['anh_dai_dien'] = $new_image;
            DB::table('tai_khoan')->insert($data);
            Session::put('message', 'Thêm người dùng thành công');
            return redirect()->back();
        }
        $data['anh_dai_dien'] = '';
        DB::table('tai_khoan')->insert($data);
        Session::put('message', 'Thêm người dùng thành công');
        return redirect()->back();
    }
    public function all_user()
    {
        $all_user = DB::table('tai_khoan')->orderBy('id', 'desc')->get();
        $manager_all_user = view('backEnd.tai_khoan.all_user')->with('all_user', $all_user);
        return view('template.backend')->with('bachEnd.tai_khoan.all_user', $manager_all_user);
    }
    public function delete_user($id)
    {
        DB::table('tai_khoan')->where('id', $id)->delete();
        Session::put('message', 'Xóa người dùng thành công');
        return redirect()->back();
    }
    public function edit_user($id)
    {
        $edit_user = DB::table('tai_khoan')->where('id', $id)->get();
        $manager_user = view('backEnd.tai_khoan.edit_user')->with('edit_user', $edit_user);
        return view('template.backend')->with('backEnd.tai_khoan.edit_user', $manager_user);
    }
    public function unactive_user($id)
    {
        DB::table('tai_khoan')->where('id', $id)->update(['status' => 1]);
        Session::put('message', 'Kích hoạt trạng thái hoạt động người dùng thành công');
        return redirect()->back();
    }
    public function active_user($id)
    {
        DB::table('tai_khoan')->where('id', $id)->update(['status' => 0]);
        Session::put('message', 'Vô hiệu hóa người dùng thành công');
        return redirect()->back();
    }
    public function update_user(Request $request,$id)
    {
        $data = array();
        $data['ho_ten'] = $request->ho_ten;
        $data['so_dien_thoai'] = $request->so_dien_thoai;
        $data['email'] = $request->email;
        $data['password'] = bcrypt($request->password);
        $data['vai_tro'] = $request->vai_tro;
        $data['ngay_sinh'] = $request->ngay_sinh;
        $data['status'] = $request->trang_thai;
        $get_image = $request->file('anh_dai_dien');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalExtension();
            $name_image = current(explode('.', $get_name_image));

            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('images/user/', $new_image);
            $data['anh_dai_dien'] = $new_image;
            DB::table('tai_khoan')->where('id', $id)->update($data);
            Session::put('message', 'Sửa người dùng thành công');
            return redirect()->back();
        }
        $data['anh_dai_dien'] = '';
        DB::table('tai_khoan')->where('id', $id)->update($data);
        Session::put('message', 'Sửa người dùng thành công');
        return redirect()->back();
    }
}
