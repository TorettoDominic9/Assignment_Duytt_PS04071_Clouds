<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\Product_updateRequest;
use App\Product;
use App\Products_images;
use App\Cate;
use File,Auth;

class ProductController extends Controller
{

    public function getList(){
        $data = Product::select('id','name','price','image','cate_id','created_at')->orderBy('id','DESC')->get()->toArray();
        return View('Admin.product.list',compact('data'));
    }



    public function getInsert(){
    	$cate = Cate::select('id','name','parent_id')->get()->toArray();
        return view('Admin.product.insert',compact('cate'));
    }

    

    public function postInsert(ProductRequest $P_request){

    	$file_name=$P_request->file('FImages')->getClientOriginalName();
    	$product = new Product();
    	$product -> name = $P_request ->txtproductname;
    	$product -> alias =str_slug($P_request->txtproductname);
    	$product -> price = $P_request->txtprice;
    	$product -> intro = $P_request ->txtintro ;
    	$product -> content = $P_request ->txtcontent ;
    	$product -> image = 'upload/'.$file_name ;
    	$product -> keywords = $P_request ->txtkeywords ;
    	$product -> description = $P_request ->txtdescription ;
    	$product -> user_id = Auth::user()->id;
    	$product -> cate_id = $P_request ->sltParent;
    	$P_request->file('FImages')->move(public_path('upload/'),$file_name);
    	$product -> save();
        // $product_id = $product ->id;
        // if(Input::hasFile('fProductDetail')){
        //     foreach (Input::file('fProductDetail') as $file) {
        //         $product_img = new Products_images();
        //         if (isset($file)) {
        //             $product_img->image = $file->getClientOriginalName();
        //             $product_img->product_id = $product_id;
        //             $file->move('upload/detail/',$file->getClientOriginalName());
        //             $product_img->save();
        //         }
        //     }
        // }

    	return redirect() -> route('admin.product.List')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete Add Category']);


    }

    public function getDelete($id){
        //$product_d = Product::find($id)->products_images;
        $product_d = Product::find($id);
        $product_d->delete($id);
        return redirect()->route('admin.product.List')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete Delete Product']);
    }

    public function getEdit($id){
        $product = Product::findOrFail($id)->toArray();
        $parent = Cate::select('id','name','parent_id')->get()->toArray();
        
        return view('Admin.product.update',compact('parent','product'));   

    }

    public function postEdit(Product_updateRequest  $P_request, $id){
        $product = Product::find($id);
        

        
        $product -> name = $P_request ->txtproductname;
        $product -> alias = str_slug($P_request->name);
        $product -> price = $P_request->txtprice;
        $product -> intro = $P_request ->txtintro ;
        $product -> content = $P_request ->txtcontent ;
        
        $product -> keywords = $P_request ->txtkeywords ;
        $product -> description = $P_request ->txtdescription ;
        $product -> user_id = Auth::user()->id;
        $product -> cate_id = $P_request ->sltParent;


        $img_c='upload/'.$P_request->input('img_c');
        
        if(!empty($P_request->file('FImages')))
        {
            $file_name=$P_request->file('FImages')->getClientOriginalName();
            $product -> image = 'upload/'.$file_name;
            $P_request->file('FImages')->move('upload/',$file_name);

            //cần xem lại
            if(!empty($file_name)){
                File::delete($img_c); 
            }
        }
        else{
            echo "Not File";
        }
        $product -> save();
       
        return redirect() -> route('admin.product.List')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete Update Product']);

    }

    
}


 