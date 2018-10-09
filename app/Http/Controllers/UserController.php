<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\MessageBag;
use Validator;

class UserController extends Controller
{
    //
    public function home(){
    	$member = User::where('deleted','=','false')->count();
    	return view('users.home',['member'=>$member]);
    }

    public function showLogin(){
    	return view('login');
    }

	public function login(Request $request){
		$email = $request['email'];
		$password = $request['password'];
		if(Auth::attempt(['email'=>$email,'password'=>$password])){
			$userLogin = Auth::user();
			if($userLogin->deleted==true){
				return view('login',['error'=>"Tài khoản này đã bị vô hiệu hóa."]);
			}
			return redirect()->route('home');
		}
		else {
			return view('login',['error'=>"Kiểm tra lại email hoặc mật khẩu."]);
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
		$rules = [
			'role' => 'required',
			'email' => 'unique:users,email|email',
    		'password' => 'min:6',
    		'role' => 'required',
    		'cpassword' => 'same:password'
		];
		$messages = [
    		'email.email' => 'Email không đúng định dạng',
    		'email.unique' => 'Email đã được đăng kí',
    		'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
    		'role.required' => 'Phải chọn loại tài khoản',
    		'cpassword.same' => "Chưa nhập đúng lại mật khẩu"
    	];
    	$validator = Validator::make($request->all(), $rules, $messages);
    	if ($validator->fails()) {
            return response()->json([
                    'error' => true,
                    'message' => $validator->errors()
                ], 200);
    		// return redirect()->back()->withErrors($validator)->withInput();
    	} else {
			$user = new User;
			$user->name = $request->fullName;
			$user->password = bcrypt($request->password);
			$user->email = $request->email;
			$user->id_role = $request->role;
			$user->deleted = false;
			$user->save();
			return response()->json(['error'=>false]);
		}
	}
}
