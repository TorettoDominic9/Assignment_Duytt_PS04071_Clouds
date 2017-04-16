<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\LoginRequest;
use Auth;
use Guard;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        // $this->auth =$auth;
        // $this->registrar=$registrar;
        $this->middleware('guest', ['except' => 'logout']);
    }


    public function getLogin(){
        return view('Admin.user.Login');
    }

    public function postLogin(LoginRequest $request){

        $name = $request['txtname'];
        $password = $request['txtpassword'];
        if(Auth::attempt(['name' => $name, 'password' => $password,'level'=> 2]))
        {
            return redirect()->route('admin.user.getlist');
        }
        elseif
            (Auth::attempt(['name' => $name, 'password' => $password,'level'=> 1]))
        {
            return view('user.pages.home');
        }
        
        else
        
            return redirect()->back()->with(['error'=>'Đăng nhập thất bại']);
        
        // $login =array(
        //     'name' => $request->txtname,
        //     'password' => $request->txtpassword,
        //     'level' => 2
        //     );
        // if(Auth::attempt($login)){
        //     return redirect()->route('admin.user.getlist');
        // }else
        // return redirect()->back();
    }
    public function logout(){
        Auth::logout();
        return view('user.pages.home');
    }
}
