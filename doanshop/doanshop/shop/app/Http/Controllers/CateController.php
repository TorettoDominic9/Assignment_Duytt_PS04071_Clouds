<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CateRequest;
use App\Http\Requests;
use App\Cate;
class CateController extends Controller
{
    
    public function getInsert(){
        $parent = Cate::select('id','name','parent_id')->get()->toArray();
        return view('Admin.cate.insert',compact('parent'));
    }

    public function getList(){
        $data= Cate::select('id','name','parent_id')->orderBy('id','DESC')->get()->toArray();
        return view('Admin.cate.list',compact('data'));
    }

    public function postInsert(CateRequest $request){
        $cate = new Cate;
        $cate -> name       =$request->txtname;
        $cate -> alias      =str_slug($request->txtname);
        $cate -> order      =$request->txtorder;
        $cate -> parent_id  =$request->sltParent;
        $cate -> keywords   =$request->txtkeywords;
        $cate -> description=$request->txtdescription;
        $cate -> save();
        return redirect() -> route('admin.cate.List')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete Add Category']);
    }

    public function getDelete($id){
        $parent = Cate::where('parent_id',$id)->count();
        if($parent==0){
        $cate = Cate::find($id);
        $cate->delete($id);
        return redirect()->route('admin.cate.List')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete Delete Category']);
        }else{
            echo" <script type='text/javascript'>
            alert ('Sorry! You Can Not Delete This Category.');
            window.location='";
            echo route ('admin.cate.List');
            echo"'
            </script>";
        }
    }

    public function getEdit($id){
        $data = Cate::findOrFail($id)->toArray();
        $parent = Cate::select('id','name','parent_id')->get()->toArray();
        return view ('Admin.cate.update',compact('parent','data','id'));     
        
    }

    public function postEdit(CateRequest $request,$id){
        $cate = Cate::find($id);
        $cate -> name       =$request->txtname;
        $cate -> alias      =str_slug($request->txtname);
        $cate -> order      =$request->txtorder;
        $cate -> parent_id  =$request->sltParent;
        $cate -> keywords   =$request->txtkeywords;
        $cate -> description=$request->txtdescription;
        $cate -> save();
        return redirect() -> route('admin.cate.List')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete Update Category']);
    
    }
}
