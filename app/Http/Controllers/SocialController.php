<?php

namespace App\Http\Controllers;
use App\Model\NguoiDungModel;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Session;

class SocialController extends Controller
{

 public function redirect($provider)
 {
     return Socialite::driver($provider)->redirect();
 }
 public function callback($provider)
 {
   $getInfo = Socialite::driver($provider)->user();
   $user = NguoiDungModel::where('email', $getInfo->email)->first();
   $password = bcrypt($getInfo->id);
   $email = $getInfo->email;
   if (!$user) {
    $userm = new NguoiDungModel;
    $userm->ho_ten = $getInfo->name;
    $userm->email = $getInfo->email;
    $userm->password  = $password;
    $userm->vai_tro = 0;
    $userm->anh_dai_dien = 'e5809db818346b4be5-1.gif';
    $userm->status = 1;
    $userm->save();
 }
 if (Auth::attempt(['email' => $email, 'password' => $getInfo->id])) {
    Auth::attempt(['email' => $email, 'password' => $getInfo->id]);
    return redirect(route('homepage'));
}else {
    Session::put('message', 'Sai tên đăng nhập hoặc mật khẩu');
    return redirect()->back();
}
 }

}
