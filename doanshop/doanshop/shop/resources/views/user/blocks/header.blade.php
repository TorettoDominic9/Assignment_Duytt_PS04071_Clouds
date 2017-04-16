<div style="background: black"class="headerstrip">
    <div class="container">
      <div class="row">
        <div class="span12">
          <a href="{!! url('')!!}" class="logo pull-left"><img src="{!! url('user/img/logo.jpg')!!}" alt="SimpleOne" title="SimpleOne"></a>
          <!-- Top Nav Start -->
          <div class="pull-left">
            <div class="navbar" id="topnav">
              <div class="navbar-inner">
                <ul class="nav" >
                  <li><a class="home active" href="{!! url('')!!}">Trang chủ</a>
                  </li>

                  <li><a href="{!! url('/tin-tuc')!!}">Tin tức</a>
                  </li>

                  <li><a class="checkout" href="{!! url('/cart')!!}"><span class="badge label-success"><b>{{Cart::count()}}</b></span>Giỏ hàng</a>
                  </li>
                  @if( isset(Auth::user()->name) )

                  <li class="myaccount" style="color: white; font-size: 20px;"><b>Xin chào <span style="color: yellow;">{!!Auth::user()->name!!}</span></b></li>

                  <a href="{!! url('/logout')!!}"><button class="btn btn-primary">Đăng xuất</button></a>

                  @else

                  <a href="{!! url('/login')!!}"><button class="btn btn-primary"><b>Đăng nhập</b></button></a>

                  <a href="{!! url('/dang-ky')!!}"><button class="btn btn-warning"><b>Đăng ký</b></button></a>

                  @endif

                </ul>
              </div>
            </div>
          </div>
          <!-- Top Nav End -->
        </div>
      </div>
    </div>
  </div>
