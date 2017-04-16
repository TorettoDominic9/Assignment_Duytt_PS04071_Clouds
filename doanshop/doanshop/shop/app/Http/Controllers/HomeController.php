<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin(){
        return view('Admin.user.Login');
    }

    public function postLogin(LoginRequest $request){
        $login =array(
            'name' => $request->txtname,
            'password' => $request->txtpassword,
            'level' => 2
            );
        if(Auth::attempt($login)){
            return redirect()->route('admin.user.getlist');
        }else
        return redirect()->back();
    }
}
