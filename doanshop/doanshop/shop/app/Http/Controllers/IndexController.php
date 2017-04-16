<?php


        //$product_cate = DB::table('products')->where('cate_id',$id)->paginate(6);
        //$cate = DB::table('cates')->select('parent_id')->where('id',$product_cate[0]->cate_id)->first();

namespace App\Http\Controllers;

use Request;
use DB,Mail,Cart,Hash;
use App\User;

use Illuminate\Pagination\LengthAwarePaginator;

class IndexController extends Controller
{
    public function loaisanpham($id){

    	  $product_cate = DB::table('products')->where('cate_id',$id)->first();
        if( $product_cate== null )
          return redirect('/khongcosp');
        else
        {
          $cate = DB::table('cates')->select('parent_id')->where('id',$product_cate->cate_id)->first();
          $menu_cate = db::table('cates')->select('id','name','alias')->where('parent_id',$cate->parent_id)->get();
          $name_cate = db::table('cates')->select('name')->where('id',$id)->first();
          $LATEST_product=DB::table('products')->select('id','name','image','price','alias')->orderBy('id','DESC')->take(3)->get();
        
          return view ('user.pages.cate',compact('product_cate','menu_cate','LATEST_product','name_cate'));
        }
          

    }

    public function chitiet($id){
    	$product_detail = DB::table('products')->where('id',$id)->first();
    	$Related_product = DB::table('products')->where('cate_id',$product_detail->cate_id)->where('id','<>',$id)->take(4)->get();
    	return view ('user.pages.detail',compact('product_detail','Related_product'));

    }

    public function getLienhe(){
    	return view('user.pages.contact');
    }
   public function postLienhe(Request $request){
   	$data = ['hoten'=>$request->input('name'),'tinnhan'=>$request->input('message')];
   	Mail::send('mails.blanks', $data, function ($message) {
   	    $message->from('s2thi520@gmail.com', 'Khach hang');
   	    $message->to('s2thi520@gmail.com', 'Admin')->subject('Đây là Mail Khach hàng');
   		echo"<script>
			alert('Cảm ơn bạn đã góp ý');
			window.location = '".url('/')."'
   		</script>";
   	    // $message->cc('john@johndoe.com', 'John Doe');
   	    // $message->bcc('john@johndoe.com', 'John Doe');
   	
   	    // $message->replyTo('john@johndoe.com', 'John Doe');
   	
   	    // $message->subject('Subject');
   	
   	    // $message->priority(3);
   	
   	    // $message->attach('pathToFile');
   	});
   }

   public function themvaogio($id){
   		$product_buy = DB::table('products')->where('id',$id)->first();
   		Cart::add(array('id'=>$id,'name'=>$product_buy->name,'qty'=>1,'price'=>$product_buy->price,'options'=>array('img'=>$product_buy->image)));
   		$content = Cart::content();
   		return redirect('cart');
   }

   public function thanhtoan(){

    $timeID = uniqid(time(), true);
      Cart::store($timeID);
      Cart::destroy();
      return redirect('/dathangok');
   }

   public function giohang(){
   	$content = Cart::content();
   	$total = Cart::total();
   	return view('user.pages.cart',compact('content','total'));
   }

   public function xoasanpham($id){
   	Cart::remove($id);
   	return redirect('cart');
   }

    public function capnhat(){
      if( Request::ajax() )
        {
            $id = Request::get('id');
            $qty = Request::get('qty');
            Cart::update($id,$qty);
            echo "ok";
        }
   }

   public function getRegister(){
      return view('user.pages.register');
   }

   public function postRegister(UserRequest $request){
      $user_re = new User();
      $user_re->name = $request->txtusername;
      $user_re->password = Hash::make($request->pass);
      $user_re->email = $request->txtemail;
      $user_re->level = 1;
      $user_re->remember_token = $request->_token;
      $user_re->save();
      return view('user.pages.home');
   }
}
