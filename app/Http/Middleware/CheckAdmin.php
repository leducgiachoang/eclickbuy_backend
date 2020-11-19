<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            $user = Auth::user();
            if($user->vai_tro == 1){
                return $next($request);
            }else{
                return redirect('tai-khoan/dang-nhap')->with('danger','Vui lòng đăng nhập tài khoản Admin để tiến hành quản lý trang website !');
            }

        }else{
            return redirect('tai-khoan/dang-nhap')->with('danger','Vui lòng đăng nhập tài khoản Admin để tiến hành quản lý trang website !');
        }
    }
}
