<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //Login for admin
    // public function login(Request $request)
    // {
    //     if ($request->getMethod() == 'GET') {
    //         return view('website.layouts.master');
    //     }
    //     $account = [
    //         'email' => $request->email,
    //         'password'=> $request->password
    //     ];
       
    //     if (Auth::attempt($account)) {
    //         return redirect()->route('admin.dashboard');
    //     } else {
    //         return redirect()->back()->with('msg', 'Tài khoản hoặc mật khẩu không đúng');
    //     }
    // }
    public function login(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            if(Auth::guard('admin')->check()){
                return redirect()->route('admin.users.index'); 
            }
            return view('admin.pages.auth.login');
        }
        $account = [
            'email' => $request->email,
            'password'=> $request->password
        ];
       
        if (Auth::guard('admin')->attempt($account)) {
            if (Auth::guard('admin')->user()->role->name == 'admin') {
                return redirect()->route('admin.users.index');
                // dd("Thanh công");
            }
            return redirect()->back()->with('message', 'Tài khoản hoặc mật khẩu không đúng');    
        } else {
            return redirect()->back()->with('message', 'Tài khoản hoặc mật khẩu không đúng');
        }
    }
}
