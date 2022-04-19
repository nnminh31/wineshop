<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Role;


use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::paginate(5);
        return view('admin.pages.user.index', compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            $roles = Role::latest()->get();
            return view('admin.pages.user.add', compact('roles'));
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
            'slug' => Str::slug($request->name),
            'role_id' => $request->role
        ]);
        return redirect()->route('admin.users.index')->with('message', 'Create a user successfully');

    }

    public function update(Request $request, $slug)
    {
        if ($request->getMethod() == 'GET') {
            $user = User::where('slug', $slug)->first();
            $roles = Role::latest()->get();
            return view('admin.pages.user.edit', compact('user', 'roles'));
        }
        $user = User::where('id', $slug)->take(1)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'slug' => Str::slug($request->name),
            // 'password' => bcrypt($request->password),
            'role_id' => $request->role
        ]);
        $slug = User::find($user)->slug;
        return redirect()->route('admin.users.edit', $slug)->with('message', 'Create a user successfully');

    }
}
