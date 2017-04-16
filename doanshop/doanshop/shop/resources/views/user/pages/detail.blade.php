@extends('user.master')
@section('content')

<br>
<div id="maincontainer">
  <section id="product">
    <div class="container">
      <!-- Product Details-->
      <div class="row">
       <!-- Left Image-->
        <div class="span5">
          <ul class="thumbnails mainimage">
            <li class="span5">
              <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="{{asset($product_detail -> image)}}">
                <img src="{{asset($product_detail -> image)}}" alt="" title="">
              </a>
            </li>

          </ul>
          <!-- <ul class="thumbnails mainimage">
            <li class="producthtumb">
              <a class="thumbnail" >
                <img  src="img/product1.jpg" alt="" title="">
              </a>
            </li>
            <li class="producthtumb">
              <a class="thumbnail" >
                <img  src="img/product2.jpg" alt="" title="">
              </a>
            </li>
            <li class="producthtumb">
              <a class="thumbnail" >
                <img  src="img/product1.jpg" alt="" title="">
              </a>
            </li>
            <li class="producthtumb">
              <a class="thumbnail" >
                <img  src="img/product2.jpg" alt="" title="">
              </a>
            </li>
          </ul> -->
        </div>
         <!-- Right Details-->

        <div class="span7">
          <div class="row">
            <div class="span7">
              <h1 class="productname"><span class="bgnone"><b>{!!$product_detail->name!!}</b></span></h1>
<!--
              <div class="productprice">
                <div class="productpageprice">
                  <span class="spiral"></span>{{number_format($product_detail -> price,0,",",".")}}</div>
              </div>
              <ul class="productpagecart">
                <li><a class="cart" href="{!!url('them-vao-gio',[$product_detail->id, $product_detail->alias])!!}">Thêm vào giỏ</a>
                </li>
              </ul>
            -->
            <h1>
                Giá: <span><p style="font-style:30px"class="text-info">{{number_format($product_detail -> price,0,",",".")}}VNĐ</p></span>
              </h1>
<h2>
            <p>
                <button style="background: black"type="button" class="btn btn-primary" ><a href="{!!url('them-vao-gio',[$product_detail->id,$product_detail->alias])!!}">Thêm vào giỏ</a></button>
            </p>
          </h2>
         <!-- Product Description tab & comments-->
         <div class="productdesc">
                <ul class="nav nav-tabs" id="myTab">
                  <li class="active"><a href="#description">Mô tả</a>
                  </li>
                  <li><a href="#specification">Tính chất</a>
                  </li>
                  <li><a href="#review">Đánh giá</a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="description">
                    <h2>Sản phẩm được sản xuất và phân phối bởi Yame</h2>

                  </div>
                  <div class="tab-pane " id="specification">
                    <ul class="productinfo">
                      <li>
                        <span class="productinfoleft"> Product Code:</span> Product 16 </li>
                      <li>
                        <span class="productinfoleft"> Reward Points:</span> 60 </li>
                      <li>
                        <span class="productinfoleft"> Availability: </span> In Stock </li>
                      <li>
                        <span class="productinfoleft"> Old Price: </span> $500.00 </li>
                      <li>
                        <span class="productinfoleft"> Ex Tax: </span> $500.00 </li>
                      <li>
                        <span class="productinfoleft"> Ex Tax: </span> $500.00 </li>
                      <li>
                        <span class="productinfoleft"> Product Code:</span> Product 16 </li>
                      <li>
                        <span class="productinfoleft"> Reward Points:</span> 60 </li>
                    </ul>
                  </div>
                  <div class="tab-pane" id="review">
                    <h3>Write a Review</h3>
                    <form class="form-vertical">
                      <fieldset>
                        <div class="control-group">
                          <label class="control-label">Text input</label>
                          <div class="controls">
                            <input type="text" class="span3">
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label">Textarea</label>
                          <div class="controls">
                            <textarea rows="3"  class="span3"></textarea>
                          </div>
                        </div>
                      </fieldset>
                      <input type="submit" class="btn btn-orange" value="continue">
                    </form>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--  Related Products-->
  <section id="related" class="row">
    <div class="container">
      <h1 class="heading1"><span class="maintext">Sản phẩm liên quan</span></h1>
      <ul class="thumbnails">
      @foreach($Related_product as $item_Related_product)
        <li class="span3">
<a class="prdocutname" href="{!!url('chi-tiet-san-pham',[$item_Related_product->id,$item_Related_product->alias])!!}">{!!$item_Related_product->name!!}</a>
          <div class="thumbnail">
            <span class="sale tooltip-test"></span>
            <a href="{!!url('chi-tiet-san-pham',[$item_Related_product->id,$item_Related_product->alias])!!}"><div style="height: 200px;"><img style="max-height: 200px;" class="img-responsive" src="{{asset($item_Related_product -> image)}}"></div></a>
<!--
            <div class="pricetag">
              <span class="spiral"></span><a href="{!!url('them-vao-gio',[$item_Related_product->id,$item_Related_product->alias])!!}" class="productcart">Thêm vào giỏ</a>
              <div class="price">
                <div class="pricenew">{{number_format($item_Related_product -> price,0,",",".")}}</div>
                <div class="priceold"></div>
              </div>
            </div>
  -->
</br>
    <span><p style="font-style:30px"class="text-info">{{number_format($item_Related_product -> price,0,",",".")}}VNĐ</p></span>
    <p>
        <button style="background: black"type="button" class="btn btn-primary" ><a href="{!!url('them-vao-gio',[$item_Related_product->id,$item_Related_product->alias])!!}">Thêm vào giỏ</a></button>
    </p>

          </div>

        </li>
        @endforeach

      </ul>
    </div>
  </section>
  <!-- Popular Brands-->
</div>
@endsection
