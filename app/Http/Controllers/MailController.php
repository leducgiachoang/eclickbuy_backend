<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function demomail()
    {
        return view('mail.demo-gui-mail');
    }

    public function Postdemomail(Request $request)
    {
        $email = $request->mail;
        $noidung = $request->noidung;
        $data = [
            'noidung' => $noidung,
        ];
        Mail::send('mail.mail', $data, function ($message) use ($email) {
            $message->to($email, 'DEmo gửi mail')->subject('mail');
        });
        return redirect()->back()->with('thongbao','Bạn đã gửi mail thành công !');
    }
}
