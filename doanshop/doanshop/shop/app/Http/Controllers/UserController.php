<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests;
use Hash,Auth;
class UserController extends Controller
{
	public function getlist(){
		$user_list = User::select('id','name','email','level')->orderBy('id','DESC')->get()->toArray();
		return view('admin.user.list',compact('user_list'));
	}

    public function getInsert()
    {
    	return view('admin.user.insert');
    }

    public function postInsert(UserRequest $request)
    {
    	$user = new User();
    	$user->name = $request->txtusername;
    	$user->password =Hash::make($request->pass);
    	$user->email = $request->txtemail;
    	$user->level = $request->level;
    	$user->remember_token = $request->_token;
    	$user->save();
    	return redirect()->route('admin.user.getlist')->with(['flash_level'=>'success','flash_message'=>'Thêm !!!! Thành Công']);
    } 

     public function getDelete($id){

        $user_delete = Auth::user()->id;
        $user = User::find($id);
        if(($id == 1)||($user_delete!=1 && $user['level']==2)){
            return redirect()->route('admin.user.getlist')->with(['flash_level'=>'danger','flash_message'=>'Bạn không có quyền xóa']);
        }else{
            $user->delete($id);
            return redirect()->route('admin.user.getlist')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);;
        }
        // $user_delete = User::find($id);
        // $user_delete->delete($id);
        // return redirect()->route('admin.user.getlist')->with(['flash_level'=>'success','flash_message'=>'Xóa. Thành Công !!!!']);
    }

    public function getEdit($id){
        $data = User::find($id);
        return view('Admin.user.update',compact('data'));
    }

    public function postEdit(Request  $P_request, $id){
        $user = User::find($id);
        if($P_request->input('txtpass')){
            $this->validate($P_request,
                [
                    'txtrepass'=>'same:txtpass'
                ],
                [
                    'txtrepass.same'=>'Password bạn nhập không khớp'
                ]);
                $pass = $P_request->input('txtpass');
                $user->password = Hash::make($pass);
        }
        $user->email = $P_request->txtemail;
        $user->level = $P_request->level;
        $user->remember_token = $P_request->input('_token');
        $user->save();
        return redirect()->route('admin.user.getlist')->with(['flash_level'=>'success','flash_message'=>'Sửa Thông tin Thành công']);

    }
}
