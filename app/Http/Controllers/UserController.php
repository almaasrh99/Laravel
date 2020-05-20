<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller {
    public function __construct() {}

    public function login() {
        $data['title'] = "Login - Goodget";
        return view('login_page', $data);
    }

    public function loginAction(Request $request) {
        $method = $request->method();
        if($method == "POST") {
            $result = User::where('email', $request->input('email'))
                ->where('password', $request->input('password'))
                ->rightJoin('role', 'user.role_id','role.id')->first();
            if($result != null) {
                if($result->nama == "Admin") {
                    $request->session()->put('s_id', $result->id);
                    $request->session()->put('s_username', $result->email);
                    $request->session()->put('s_role', $result->role_id);
                    $request->session()->put('s_status', $result->status);

                    return redirect('/admin');
                }else if($result->nama == "User") {
//                    dd($result);
                    $request->session()->put('s_id', $result->id);
                    $request->session()->put('s_username', $result->email);
                    $request->session()->put('s_role', $result->role_id);
                    $request->session()->put('s_status', $result->status);
//                    dd($request);

                    return redirect('/user');
                }else {
                    return redirect('/login');
                }
            }else {
                return redirect('/login');
            }
        }else {
            return redirect('/login');
        }
    }

    public function signup() {
        $data['title'] = "Sign Up - Goodget";
        return view('signup_page', $data);
    }

    public function signupAction(Request $request) {
        $method = $request->method();
        if($method == "POST") {
            $user = new User();
            $user->username =  $request->input('username');
            $user->email = $request->input('email');
            $user->password = $request->input('password');
            $user->role_id = $request->input('role_id');
            $user->status = 'active';
            $user->save();
            return redirect('/login');
        }else {
            return redirect('/signup');
        }
    }
}
