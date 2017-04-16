@extends('user.master')
@section('content')

<div id="maincontainer">
  <section id="product">

    <div class="container">
     <!--  breadcrumb -->
      <ul class="breadcrumb">
        <li>
          <a href="{!!url('/')!!}">Trang chủ</a>
          <span class="divider">/</span>
        </li>
        <li class="active"> Giỏ hàng</li>
      </ul>
      <h1 class="heading1"><span class="maintext"> Giỏ Hàng</span><span class="subtext"> Giỏ hàng</span></h1>
      <!-- Cart-->
      <div class="cart-info">
        <table class="table table-striped table-bordered">
          <tr>
            <th class="image">Hình ảnh</th>
            <th class="name">Tên sản phẩm</th>
            <th class="quantity">Số lượng</th>
            <th class="price">Đơn giá</th>
            <th class="total">Thành tiền</th>
            <th>Cập nhật/ Xóa</th>

          </tr>

          <form method="POST" action=""   >
          <input type="hidden" name="_token" value="{{csrf_token()}}">

          @foreach(Cart::content() as $item)

          <tr>
            <td class="image"><a href="#"><img title="product" alt="product" src="{!!asset($item->options->img) !!}" height="100" width="100"></a></td>

            <td  class="name"><a href="#">{!! $item->name !!}</a></td>

            <td class="quantity"><input class="qty span1" type="text" size="1" value="{!! $item->qty !!}" name="quantity[40]">
            </td>

            <td class="price">{{number_format($item -> price,0,",",".")}}</td>
            <td class="total">{{number_format($item -> price * $item->qty,0,",",".")}}</td>

            <td class="total">
              <a href="#" class="updatecart" id="{!! $item ->rowId !!}"><img class="tooltip-test" data-original-title="Cập nhật"  src="{{asset('user/img/update.png')}}" alt=""></a>
              <a href="{!! url('xoa-san-pham',['id'=>$item->rowId]) !!}"><img class="tooltip-test" data-original-title="Xóa"  src="{{asset('user/img/remove.png')}}" alt=""></a>
            </td>

          </tr>
          @endforeach

          </form>

        </table>
      </div>
      <div class="container">
      <div class="pull-right">
          <div class="span4 pull-right">
            <table class="table table-striped table-bordered ">
              <tr>
                <td><span class="extra bold totalamout">Tổng cộng:</span></td>

                <td><span class="bold totalamout">{{Cart::subtotal(0)}}</span>VNĐ</td>
              </tr>
            </table>
            </div>

            <!-- <a href="https://nganluong.vn/button_payment.php?receiver=quang1225@gmail.com&product_name={{date('Y-m-d H:i:s')}}&price={{Cart::subtotal()}}&return_url={{url('/')}}">
            <input value="THANH TOÁN" class="btn btn-orange pull-right">
            </a> -->
            @if( isset(Auth::user()->name) )

           <a style="background:black" href="{{url('/thanh-toan')}}">
           <input value="THANH TOÁN" class="btn btn-orange pull-right">
           </a>

           <a target="_blank" href="https://www.nganluong.vn/button_payment.php?receiver=quang1225@gmail.com&product_name={{uniqid(time(), true)}}&price={{Cart::subtotal(0,'','')}}&return_url={{ url('/dathangok') }}&comments=Username khach hang: [ {!!Auth::user()->name!!} ]"><img src="{{ url('/user/img/nganluong.png') }}" border="0" /></a>

           @else

             <input value="THANH TOÁN" class="btn btn-orange pull-right" data-toggle="modal" data-target="#myModal">


             <a href=""><img data-toggle="modal" data-target="#myModal" src="{{ url('/user/img/nganluong.png') }}" border="0"/></a>

                       <!-- Modal -->
             <div class="modal fade" id="myModal" role="dialog" style="top: 165px;">
               <div class="modal-dialog">

                 <!-- Modal content-->
                 <div class="modal-content">
                   <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title"><b>CHÚ Ý !</b></h4>
                   </div>
                   <div class="modal-body">
                     <h3><b>Bạn phải đăng nhập để thanh toán.</b></h3>
                   </div>
                   <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                   </div>
                 </div>

               </div>
             </div>

           @endif


            <a href="{!!url('/')!!}"><input value="Tiếp tục mua hàng" class="btn btn-orange pull-right mr10"></a>

        </div>
        </div>

    </div>

  </section>
</div>
@endsection
