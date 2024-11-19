<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function logon(){
        return view('admin.logon');
    }
    public function postLogon(Request $request) {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password,'role'=>1])){
            return redirect()->route('homeadmin');
        }
        return redirect()->back()->with('err', 'Đăng nhập thất bại. Vui lòng kiểm tra email và mật khẩu.');
    }
}
