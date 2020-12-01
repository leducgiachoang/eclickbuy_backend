<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\DanhMucSanPham_Model;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Model\NguoiDungModel;
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

        $email = $request->email;
        $password = $request->mat_khau;
        if (Auth::attempt(['email' => $email, 'password' => $password, 'status' => 1])) {
            return redirect(route('homepage'));
        }else {
            // Session::put('message', 'Sai tên đăng nhập hoặc mật khẩu');
            return redirect()->back()->with('login-erro','');
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
        $codexx = preg_replace("/\\//","",$code);
        $data['code'] = $codexx;
        DB::table('tai_khoan')->insert($data);
         $url = route('kich-hoat', ['code' => $codexx, 'email' => $request->email]);
        $data = [
            'link' => $url,
            'ten'=> $request->ho_ten
        ];

        Mail::send('mail.mail', $data, function ($message) use ($email) {
            $message->to($email, 'Gửi mail')->subject('Xin chào bạn, đây là tin nhắn kích hoạt từ EClickbuy');
        });

        // Session::put(, 'Đăng kí tài khoản thành công, vui lòng kiểm tra email để kích hoạt tài khoản');
        return redirect('tai-khoan/dang-nhap-tai-khoan')->with('message_front_end','');
    }
    public function logout()
    {
        Auth::logout();
        return view('frontEnd.nguoi_dung.dang_nhap');
    }
    public function verify(Request $request)
    {
        $user = DB::table('tai_khoan')->where(
            [
                'code' => $request->code,
                'email' => $request->email,
            ]
        )->first();
        if(!$user){
            Session::put('message_front_end', 'Xin lỗi đường dẫn không hợp lệ');
            return redirect('tai-khoan/dang-nhap-tai-khoan');
        }else{
            $user = DB::table('tai_khoan')->where(
                [
                'code' => $request->code,
                'email' => $request->email,
                ]
            )->update(['status'=>1]);

            // Session::put(, 'Kích hoạt tài khoản thành công');
            return redirect('tai-khoan/dang-nhap-tai-khoan')->with('kich_hoat_thanh_cong','');
        }
    }
    public function profile($id){
        $profile_user = DB::table('tai_khoan')->where('id', $id)->get();
        $manager_user = view('frontEnd.nguoi_dung.ho_so')->with('profile_user', $profile_user);
        return view('template.front_End')->with('frontEnd.nguoi_dung.ho_so', $manager_user);
    }
    public function update_profile(Request $request,$id)
    {
        $data = array();
        $request->validate(
            [
                'ho_ten'=> 'required|min:5|max:50'
            ],
            [
                'ho_ten.required'=> 'Vui lòng nhập Họ và Tên'
        ]);
        $data['ho_ten'] = $request->ho_ten;
        $data['so_dien_thoai'] = $request->so_dien_thoai;
        $data['ngay_sinh'] = $request->ngay_sinh;
        $get_image = $request->file('anh_dai_dien');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalExtension();
            $name_image = current(explode('.', $get_name_image));

            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('images/user/', $new_image);
            $data['anh_dai_dien'] = $new_image;
            DB::table('tai_khoan')->where('id', $id)->update($data);
            // Session::put('message', 'Cập nhật thông tin thành công');
            return redirect()->back()->with('update_image','');
        }
        DB::table('tai_khoan')->where('id', $id)->update($data);
        // Session::put('message', 'Cập nhật thông tin thành công');
        return redirect()->back()->with('update_pro','');
    }
    public function view_update_password(){
        return view('frontEnd.nguoi_dung.doi_mat_khau');
    }
    public function update_password(Request $request)
    {
        $request->validate(
            [
                'password_now'=> 'required|min:6',
                'password_new'=>'required|min:6',
                're_password_new'=>'required|same:password_new',
            ],
            [
                'password_now.required'=> 'Vui lòng nhập mật khẩu hiện tại',
                'password_now.min'=> 'Vui lòng nhập mật khẩu tối thiểu 6 kí tự',
                'password_new.min'=>'Vui lòng nhập mật khẩu mới tối thiểu 6 kí tự',
                'password_new.required'=>'Vui lòng nhập mật khẩu',
                're_password_new.same'=> 'Vui lòng nhập lại cho đúng mật khẩu',
                're_password.required'=> 'Vui lòng nhập mật khẩu mới',
                'password.min'=> 'Mật khẩu ít nhất 6 kí tự',
        ]);
        $password_now = $request->password_now;
        if (Auth::attempt(['email' => Auth::user()->email, 'password' => $password_now])) {
            $user = DB::table('tai_khoan')->where('id',Auth::user()->id)->update(['password' => bcrypt($request->password_new),]);
            return redirect()->back()->with('success','');
        }else {
            return redirect()->back()->with('danger','');
        }

    }
    public function reset_password(Request $request)
    {
        $user = DB::table('tai_khoan')->where(
            [
                'email' => $request->email,
            ]
        )->first();
        if(!$user){
            Session::put('message_front_end', 'Email không tồn tại, Vui lòng kiểm tra lại');
            return redirect('tai-khoan/dang-nhap-tai-khoan');
        }else{
            $nguoidung =  NguoiDungModel::where('email',$request->email)->get();
            foreach($nguoidung as $nguoidungx){
                $ho_ten = $nguoidungx->ho_ten;
            }
            $code = bcrypt(md5(time().$request->email));
            NguoiDungModel::where('email',$request->email)->update([
                'code'=>$code
            ]);
            $url = route('LayLaiMatKhau_get', ['code'=> $code, 'email'=>$request->email]);

            $data = [
                'link' => $url,
                'ten'=> $ho_ten
            ];
            $email = $request->email;

            Mail::send('mail.quen-mat-khau', $data, function ($message) use ($email) {
                $message->to($email, 'Lấy lại mật khẩu')->subject('Xin chào bạn, đây là tin nhắn kích hoạt từ EClickbuy');
            });
            return redirect('tai-khoan/dang-nhap-tai-khoan')->with('erro-LayLaiMatKhau', '');
        }

    }
    public function LayLaiMatKhau(Request $request){
        $code = $request->code;
        $email = $request->email;
        $checkUser = NguoiDungModel::where([
            'code'=> $code,
            'email'=> $email
        ])->first();
        if(!$checkUser){
            return view('frontEnd.nguoi_dung.dang_nhap')->with('danger', 'Đường dẫn không hợp lệ, Vui lòng thử lại sau');
        }else{
            return view('frontEnd.nguoi_dung.doimk_khi_quenmk', ['code'=> $code, 'email'=> $email])->with('success', 'Xác nhận thành công. Vui lòng nhập lại mật khẩu mới');
        }

    }

    public function CapNhatMatKhauKhiQuen(Request $request){
        $request->validate(
            [
                'password_new'=>'required|min:6',
                're_password_new'=>'required|same:password_new',
            ],
            [
                'password_new.min'=>'Vui lòng nhập mật khẩu mới tối thiểu 6 kí tự',
                'password_new.required'=>'Vui lòng nhập mật khẩu',
                're_password_new.same'=> 'Vui lòng nhập lại cho đúng mật khẩu',
                're_password.required'=> 'Vui lòng nhập mật khẩu mới'
        ]);
        $updatePassUser = NguoiDungModel::where([
            'code' => $request->code,
            'email'=> $request->email
        ])->update([
            'password'=> bcrypt($request->password_new)
        ]);
        return view('frontEnd.nguoi_dung.dang_nhap')->with('success','Thay đổi mật khẩu thành công');
    }
}
