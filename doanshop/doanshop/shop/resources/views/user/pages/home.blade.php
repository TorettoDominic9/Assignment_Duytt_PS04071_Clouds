@extends('user.master')



@section('content')

 <!-- Slider Start-->
  @include('user.blocks.banner')
  <!-- Slider End-->

<!--

  <section class="container otherddetails">
    <div class="otherddetailspart">
      <div class="innerclass free">
        <h2>GIAO HÀNG MIỄN PHÍ</h2>
       Toàn quốc cho đơn hàng trên 2 ngàn đồng VNĐ</div>
    </div>
    <div class="otherddetailspart">
      <div class="innerclass payment">
        <h2>DỄ DÀNG THANH TOÁN</h2>
        Online hoặc đưa tiền là xong</div>
    </div>
    <div class="otherddetailspart">
      <div class="innerclass shipping">
        <h2>GIAO HÀNG 24H</h2>
        Nửa đêm cũng giao</div>
    </div>
    <div class="otherddetailspart">
      <div class="innerclass choice">
        <h2>PHONG PHÚ</h2>
        Hơn 100 tỷ sản phẩm...</div>
    </div>
  </section>
  -->


<section id="featured" class="row mt40">
    <div class="container">
      <h1 class="heading1"><span class="maintext">Sản phẩm nổi bật</span></h1>
      <ul class="thumbnails">
      <?php
      $product=DB::table('products')->select('id','name','image','price','alias')->orderBy('price','DESC')->skip(0)->take('4')->get();
      ?>
      @foreach($product as $item)
        <li class="span3">
          <a class="prdocutname" href="{!!url('chi-tiet-san-pham',[$item->id,$item->alias])!!}">{{$item -> name}}</a>
          <div class="thumbnail">
  <!--      <span class="sale tooltip-test"></span> -->
            <a href="{!!url('chi-tiet-san-pham',[$item->id,$item->alias])!!}"><div style="height: 200px; "><img style="max-height: 200px;" class="img-responsive" src="{{$item -> image}}"></div></a>
<!--
            <div class="pricetag">
              <span class="spiral"></span><a href="{!!url('them-vao-gio',[$item->id,$item->alias])!!}" class="productcart">Thêm vào giỏ</a>
              <div class="price">
                <div class="pricenew">{{number_format($item -> price,0,",",".")}}</div>

              </div>
            </div>
-->

        </br>
            <span><p style="font-style:30px"class="text-info">{{number_format($item -> price,0,",",".")}}VNĐ</p></span>
            <p>
                <button style="background: black"type="button" class="btn btn-primary" ><a href="{!!url('them-vao-gio',[$item->id,$item->alias])!!}">Thêm vào giỏ</a></button>
            </p>

          </div>

        </li>
        @endforeach
      </ul>
    </div>
  </section>

  <!-- Latest Product-->
  <section id="latest" class="row">
    <div class="container">
      <h1 class="heading1"><span class="maintext">Sản phẩm mới</span></h1>
      <ul class="thumbnails">
      <?php
      $product=DB::table('products')->select('id','name','image','price','alias','created_at')->orderBy('created_at','DESC')->skip(0)->take('4')->get();
      ?>
      @foreach($product as $key)
        <li class="span3">
          <a class="prdocutname" href="{!!url('chi-tiet-san-pham',[$key->id,$key->alias])!!}">{{$key -> name}}</a>
          <div class="thumbnail">
            <a href="{!!url('chi-tiet-san-pham',[$key->id,$key->alias])!!}"><div style="height: 200px;"><img style="max-height: 200px;" class="img-responsive" src="{{$key -> image}}"></div></a>
<!--
            <div class="pricetag">
              <span class="spiral"></span><a href="{!!url('them-vao-gio',[$key->id,$key->alias])!!}" class="productcart">Thêm vào giỏ</a>
              <div class="price">
                <div class="pricenew">{{number_format($key -> price,0,",",".")}}</div>

              </div>
            </div>
          -->
        </br>
            <span><p style="font-style:30px"class="text-info">{{number_format($item -> price,0,",",".")}}VNĐ</p></span>
            <p>
                <button style="background: black"type="button" class="btn btn-primary" ><a href="{!!url('them-vao-gio',[$item->id,$item->alias])!!}">Thêm vào giỏ</a></button>
            </p>
          </div>

        </li>
        @endforeach

      </ul>
    </div>
  </section>
  @endsection()
