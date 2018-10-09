<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function home(){
    	return view('users.layout.layout');
    }

    public function showLogin(){
    	return view('login');
    }

	public function login(Request $request){
		$email = $request['email'];
		$password = $request['password'];
		if(Auth::attempt(['email'=>$email,'password'=>$password])){
			$userLogin = Auth::user();
			return redirect()->route('home');
		}
		else {
			return view('login',['error'=>"Đăng nhập thất bại.<br>Kiểm tra lại email hoặc mật khẩu."]);
		}
	}

	public function logout(){
		if(Auth::check()){
			Auth::logout();
			return redirect()->route('home');
		}
	}

	public function showSignup(){
		return view('signup');
	}

	public function signup(Request $request){
		
	}
}
