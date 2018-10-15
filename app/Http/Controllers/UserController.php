<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Company;
use App\Address;
use App\JobSummary;
use Illuminate\Support\MessageBag;
use Validator;
use Hash;
use Mail;
class UserController extends Controller
{
    //
	public function home(){
		$member = User::where('deleted','=','false')->count();
		$company = Company::count();
		$job = JobSummary::count();
		$jobSummary = JobSummary::orderBy('id','desc')->take(5)->get();

		return view('users.home',['cmember'=>$member,'ccompany'=>$company,'cJob'=>$job,'jobSummary'=>$jobSummary,'active_home'=>true]);
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
			'email' => 'unique:users,email|email|required',
			'password' => 'required|min:6',
			'cpassword' => 'required|same:password',
			'fullName' => 'required'
		];
		$messages = [
			'required'=> 'Không được để trống thông tin nào',
			'email.email' => 'Email không đúng định dạng',
			'email.unique' => 'Email đã được đăng kí',
			'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
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

	public function showResetPassword(){
		return view('reset-password');
	}

	public function changePassword(Request $request){
		$userLogin = Auth::user();

		if(!Hash::check($request->cuPassword,$userLogin->password)){
			$errors = new MessageBag(['errorPassword' => 'Hãy nhập đúng mật khẩu hiện tại']);
			return response()->json(['error'=>true,'message'=> $errors]);
		}
		$rules = [
			'cuPassword' => 'required',
			'nPassword' => 'required|min:6',
			'cPassword' => 'required|same:nPassword'
		];

		$messages = [
			'required'=> 'Không được để trống thông tin nào',
			'nPassword.min' => 'Mật khẩu có ít nhất 6 kí tự',
			'cPassword.same' => "Chưa nhập đúng lại mật khẩu mới"
		];

		$validator = Validator::make($request->all(), $rules, $messages);

		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
		} 

		else {
			User::where('id',$userLogin->id)->update(['password'=>bcrypt($request->nPassword)]);
			return response()->json(['error'=>false]);
		}
	}

	public function forgotPassword(Request $request){
		if($request->email==''){
			return response()->json(['error'=>true,'message'=>'Không được để trống địa chỉ email']);
		}

		$user = User::where('email',$request->email)->get();
		if($user==null){
			return response()->json(['error'=>true,'message'=>'Email này chưa được đăng kí.']);
		}

		$npassword = str_random(8);
		User::where('email',$request->email)->update(['password'=>bcrypt($npassword)]);
		return response()->json(['error'=>false,'message'=>'Lấy lại mật khẩu mới trong email của bạn.']);
		
	}
	
}
