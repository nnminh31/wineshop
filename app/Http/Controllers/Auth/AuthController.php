<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Category;

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

    public function logout(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            // if(Auth::guard('web')->check()){
            //     return redirect()->route('home');
            // }
            Auth::guard('admin')->logout();
            return redirect()->route('admin.login');
        }
       
    }

    public function customer_login(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            if(Auth::guard('web')->check()){
                return redirect()->route('home');
            }
            $categories = Category::whereNull('parent_id')->with('childCategories')->get();
            return view('website.pages.auth.login', compact('categories'));
        }
        $account = [
            'email' => $request->email,
            'password'=> $request->password
        ];
       
        if (Auth::guard('web')->attempt($account) && Auth::guard('web')->user()->role->name == 'user') {

            if ($request->returnUrl) {
                return response()->json(['success' => true, 'check' => true]);
            }
            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => true]);
        }
    }

    public function customer_register(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            if(Auth::guard('web')->check()){
                return redirect()->route('home');
            }
            $categories = Category::whereNull('parent_id')->with('childCategories')->get();
            return view('website.pages.auth.register', compact('categories'));
        }
        $email = User::where('email', '=', $request->email)->exists();
        if ($email) { 
            return response()->json(['email'=> true]);
        } else if ($request->password != $request->confirm_password) {
            return response()->json(['password'=> true]);
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => "",
            'role_id' => 2,
            'slug' => Str::slug($request->email),
            'password' => bcrypt($request->password)
        ]);
        return response()->json(['success' => true]);
    }

    public function customer_logout(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            // if(Auth::guard('web')->check()){
            //     return redirect()->route('home');
            // }
            Auth::guard('web')->logout();
            return redirect()->route('home');
        }
       
    }
}
