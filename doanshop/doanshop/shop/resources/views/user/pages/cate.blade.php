@extends('user.master')
@section('content')



<div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb -->  
      <ul class="breadcrumb">
        <li>
          <a href="#">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Category</li>
      </ul>
      <div class="row">        
        <!-- Sidebar Start-->
        <aside class="span3">
         <!-- Category-->  
          <div class="sidewidt">
            <h2 class="heading2"><span>Danh Mục</span></h2>
            <ul class="nav nav-list categories">
            @foreach($menu_cate as $item_cate)
              <li>
                <a href="{!!url('loai-san-pham',[$item_cate->id,$item_cate->alias])!!}">{!!$item_cate -> name!!}</a>
              </li>
            @endforeach
              
            </ul>
          </div>
         <!--  Best Seller -->  
<!--           <div class="sidewidt">
            <h2 class="heading2"><span>Best Seller</span></h2>
            <ul class="bestseller">
              <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Women Accessories</span>
                <span class="price">$250</span>
              </li>
              <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Electronics</span>
                <span class="price">$250</span>
              </li>
              <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Electronics</span>
                <span class="price">$250</span>
              </li>
            </ul>
          </div> -->
          <!-- Latest Product -->  
          <div class="sidewidt">
            <h2 class="heading2"><span>Sản phẩm mới đăng</span></h2>
            <ul class="bestseller">
            @foreach($LATEST_product as $item_LATEST)
              <li>
                <img width="50" height="50" src="{{asset($item_LATEST -> image)}}" alt="product" title="product">
                <a class="productname" href="{!!url('chi-tiet-san-pham',[$item_LATEST->id,$item_LATEST->alias])!!}"> {!!$item_LATEST->name!!}</a>
                <span class="procategory">{!!$name_cate->name!!}</span>
                <span class="price">{{number_format($item_LATEST -> price,0,",",".")}}</span>
              </li>
            @endforeach
             
            </ul>
          </div>

        </aside>
        <!-- Sidebar End-->
        <!-- Category-->
        <div class="span9">          
          <!-- Category Products-->
          <section id="category">
            <div class="row">
              <div class="span9">
               <!-- Category-->
                <section id="categorygrid">
                  <ul class="thumbnails grid">
                  @foreach($product_cate as $item)
                    <li class="span3">
                      
                      <div class="thumbnail">
                        <span class="sale tooltip-test"></span>
                        <a href="{!!url('chi-tiet-san-pham',[$item->id,$item->alias])!!}"><div style="height: 200px;"><img style="max-height: 200px;" class="img-responsive" src="{{asset($item -> image)}}"></div></a>
                        <div class="pricetag">
                          <span class="spiral"></span><a href="{!!url('them-vao-gio',[$item->id,$item->alias])!!}" class="productcart">Thêm vào giỏ</a>
                          <div class="price">
                            <div class="pricenew">{{number_format($item -> price,0,",",".")}}</div>
                            
                          </div>
                        </div>
                      </div>
                      <a class="prdocutname" href="{!!url('chi-tiet-san-pham',[$item->id,$item->alias])!!}">{{$item -> name}}</a>
                    </li>
                    @endforeach
                    
                  </ul>
                
                </section>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection