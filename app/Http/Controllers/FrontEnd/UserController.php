<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\DanhMucSanPham_Model;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Session;
session_start();

class UserController extends Controller
{
    public function view_login()
    {
        $danhmucs = DanhMucSanPham_Model::all();
        return view('frontEnd.nguoi_dung.dang_nhap', ['danhmucs'=> $danhmucs]);
    }
    public function login(Request $request)
    {
        $danhmucs = DanhMucSanPham_Model::all();

        $email = $request->email;
        $password = $request->mat_khau;
        if (Auth::attempt(['email' => $email, 'password' => $password, 'status' => 1])) {
            return view('frontEnd.nguoi_dung.dang_nhap', ['danhmucs'=> $danhmucs]);
        }else {
            Session::put('message', 'Sai tên đăng nhập hoặc mật khẩu');
            return redirect()->back();
        }
    }
    public function view_register()
    {
        $danhmucs = DanhMucSanPham_Model::all();
        return view('frontEnd.nguoi_dung.dang_ki', ['danhmucs'=> $danhmucs]);
        // return redirect(route('dang-nhap'));
    }
    public function register(Request $request)
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
                'so_dien_thoai.unique'=> 'Số điện thoại này đã tồn tại',
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
        $data['ngay_tao'] = $dt;
        $data['status'] = '0';
        $data['anh_dai_dien'] = 'e5809db818346b4be5-1.gif';
        $email = $data['email'];
        $code = bcrypt(md5(time() . $request->email));
        $data['code'] = $code;
        DB::table('tai_khoan')->insert($data);
         $url = route('kich-hoat', ['code' => $code, 'email' => $request->email]);
        $data = [
            'link' => $url,
            'ten'=> $request->ho_ten
        ];

        Mail::send('mail.mail', $data, function ($message) use ($email) {
            $message->to($email, 'Gửi mail')->subject('Xin chào bạn, đây là tin nhắn kích hoạt từ EClickbuy');
        });

        Session::put('message_front_end', 'Đăng kí tài khoản thành công, vui lòng kiểm tra email để kích hoạt tài khoản');
        return redirect()->back();
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
    public function verify($code,$email)
    {
        $user = DB::table('tai_khoan')->where(
            [
                'code' => $code,
                'email' => $email,
            ]
        )->first();
        if(!$user){
            Session::put('message_front_end', 'Xin lỗi đường dẫn không hợp lệ');
            return redirect('tai-khoan/dang-nhap');
        }else{
            $user = DB::table('tai_khoan')->where(
                [
                    'code' => $code,
                    'email' => $email,
                ]
            )->update(['status'=>1]);

            Session::put('message_front_end', 'Kích hoạt tài khoản thành công');
            return redirect('tai-khoan/dang-nhap');
        }
    }
}
