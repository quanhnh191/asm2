<?php

namespace App\Http\Controllers;

use App\Console\Commands\TestSendMail;
use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function home(){
        if (Auth::check() ){
            $user = User::where('id',Auth::user()->id)->first();
        }

        return view('user.listClient',compact('user'));
    }
    public function login(){
        return view('user.login');
    }

    //login
    public function postLogin(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users,email', // email phải tồn tại trong bảng user
            'password' => 'required|min:8',
        ]);
        $data = $request->only('email', 'password');
//        dd($data);
        // kiểm tra tài khoản  có trong CSDL không
        if(Auth::attempt($data)) {
            if (Auth::user()->active_status == 1){
                if (Auth::user()->role == 'admin'){
                    return redirect()->route('admin.index');
                }else{
                    return redirect()->route('home');
                }
            }else{
                return redirect()->back()->with('errorLogin', 'Tài khoản không còn hoạt động!');
            }


        }else{
            return redirect()->back()->with('errorLogin', 'Email hoặc Password không chính xác!');
        }
    }

    public function register(){
        return view('user.register');
    }

    //Register

    public function postRegister(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email', // k được trùng trong bảng ở trường email
            'password' => 'required|min:8',
            'avatar' => 'required|file|mimes:jpeg,jpg,png'
        ]);

        $data = $request->except('avatar');   // except: loại bỏ
        $data["avatar"] = Storage::put('users', $request->avatar);


        User::query()->create($data);
        return redirect()->route('login')->with('message', 'Đăng kí tài khoản thành công!');

    }

    //logout
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
    public function update(Request $request, User $user){
//        dd($request->all());
        $data = $request->except('avatar');
        // xử lí hình ảnh

        //update data
        $user->update($data);
        $old_image = $user->avatar;

        if($request->avatar){
            $data["avatar"] = Storage::put('users', $request->avatar);
        }

        $user->update($data);

        if($request->avatar && $old_image && Storage::exists($old_image)){
            Storage::delete($old_image);
        }

        return redirect()->back()->with('message','Cập nhật dữ liệu thành công');
    }

    public function change(User $user) {
        return view('user.change', compact('user'));
    }

    public function userChange(Request $request, User $user) {
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|min:8',
            'confirmpassword' => 'required|same:password',
        ]);

        if (!Hash::check($request->old_password, $user->password)) {
            return back()->with(['old_password' => 'Mật khẩu cũ không đúng']);
        }

        $user->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('login')->with('message', 'Đổi mật khẩu thành công!');
    }
}
