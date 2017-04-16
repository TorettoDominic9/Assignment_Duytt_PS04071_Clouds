
@extends('user.master')

@section('content')
       
<div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb --> 
      <ul class="breadcrumb">
        <li>
          <a href="{{url('/')}}">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Đăng ký</li>
      </ul>
      <div class="row">        
        <!-- Register Account-->
        
        <div class="span9">
          <h1 class="heading1"><span class="maintext">Đăng ký</span><span class="subtext">Đăng ký tài khoản mới</span></h1>
          @if(count($errors)>0)
            <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                  <li>{!!$error!!}</li>
                @endforeach
              </ul>
            </div>

          @endif
          <form class="form-horizontal" method="POST" action="{!! route('getRegister') !!}">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <h3 class="heading3">Thông tin đăng nhập</h3>
            <div class="registerbox">
              <fieldset>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> UserName:</label>
                  <div class="controls">
                    <input type="text" name="txtusername" class="input-xlarge">
                  </div>
                </div>
                
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Email:</label>
                  <div class="controls">
                    <input type="email" name="txtemail" class="input-xlarge">
                  </div>
                </div>
                
              </fieldset>
            </div>
            <h3 class="heading3">Đặt mật khẩu</h3>
            <div class="registerbox">
              <fieldset>
                <div class="control-group">
                  <label  class="control-label"><span class="red">*</span> Mật khẩu:</label>
                  <div class="controls">
                    <input type="Password" name="pass"  class="input-xlarge">
                  </div>
                </div>
                <div class="control-group">
                  <label  class="control-label"><span class="red">*</span> Nhập lại mật khẩu:</label>
                  <div class="controls">
                    <input type="Password" name="repass"  class="input-xlarge">
                  </div>
                </div>
              </fieldset>
            </div>
            <div >
              <input type="Submit" class="btn btn-orange" value="Đăng ký">
            </div>
          </form>
          <div class="clearfix"></div>
          <br>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

