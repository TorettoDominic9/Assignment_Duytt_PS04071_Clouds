<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Shop thời trang Yame</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
<link href="{!! url('user/css/bootstrap.css')!!}" rel="stylesheet">
<link href="{!! url('user/css/bootstrap-responsive.css')!!}" rel="stylesheet">
<link href="{!! url('user/css/font-awesome.css')!!}" rel="stylesheet">
<link href="{!! url('user/css/style.css')!!}" rel="stylesheet">
<link href="{!! url('user/css/flexslider.css')!!}" type="text/css" media="screen" rel="stylesheet"  />
<link href="{!! url('user/css/jquery.fancybox.css')!!}" rel="stylesheet">
<link href="{!! url('user/css/cloud-zoom.css')!!}" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- fav -->
<link rel="shortcut icon" href="assets/ico/favicon.html">
</head>
<body>
<!-- Header Start -->
<header>
  @include('user.blocks.header')
  @include('user.blocks.nav')
</header>
<!-- Header End -->

<div id="maincontainer">


  <!-- Featured Product-->
  @yield('content')

<!-- Footer -->
<footer id="footer">
  <section style="background:black" class="footersocial">
    <div  class="container">
      <div class="row">
        <div class="span4 aboutus">
          <h2>Giới Thiệu</h2>
          <p>Shop thời trang có đầy đủ các loại quần áo, phụ kiện với chất lượng tốt, mẫu mã đẹp, bền, thân thiện với người dùng.</p>
        </div>
        <div class="span4 contact">
          <h2>Liên Hệ</h2>
            <p><i class="fa fa-phone-square fa-2x" aria-hidden="true"></i> 0900800008</p>
            <p><i class="fa fa-envelope fa-2x" aria-hidden="true"></i> thoitrang@gmail.com</p>
            <p><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i> 475A Điện Biên Phủ, Phường 25, Quận Bình Thạnh</p>
            <p><a href="#"><i class="fa fa-facebook-official fa-4x text-center" aria-hidden="true"></i></a></p>

        </div>
        <div class="span4 twitter">
          <h2>Map </h2>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15676.352210048086!2d106.71756694619259!3d10.804567908496676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528a459cb43ab%3A0x6c3d29d370b52a7e!2sHutech+University+of+Technology!5e0!3m2!1sen!2s!4v1489853018598" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>

  <section class="copyrightbottom">
    <div class="container">
      <div class="row">
        <div class="span6"></div>
        <div class="span6 textright"> Hutech 2017 </div>
      </div>
    </div>
  </section>
</footer>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{!! url('user/js/jquery-3.2.0.js')!!}"></script>
<script src="{!! url('user/js/bootstrap.js')!!}"></script>
<script src="{!! url('user/js/respond.min.js')!!}"></script>
<script src="{!! url('user/js/application.js')!!}"></script>
<script src="{!! url('user/js/bootstrap-tooltip.js')!!}"></script>
<script defer src="{!! url('user/js/jquery.fancybox.js')!!}"></script>
<script defer src="{!! url('user/js/jquery.flexslider.js')!!}"></script>
<script type="text/javascript" src="{!! url('user/js/jquery.tweet.js')!!}"></script>
<script  src="{!! url('user/js/cloud-zoom.1.0.2.js')!!}"></script>
<script  type="text/javascript" src="{!! url('user/js/jquery.validate.js')!!}"></script>
<script type="text/javascript"  src="{!! url('user/js/jquery.carouFredSel-6.1.0-packed.js')!!}"></script>
<script type="text/javascript"  src="{!! url('user/js/jquery.mousewheel.min.js')!!}"></script>
<script type="text/javascript"  src="{!! url('user/js/jquery.touchSwipe.min.js')!!}"></script>
<script type="text/javascript"  src="{!! url('user/js/jquery.ba-throttle-debounce.min.js')!!}"></script>
<script defer src="{!! url('user/js/custom.js')!!}"></script>


<script type="text/javascript">

	$(document).ready(function(){
 	$(".updatecart").click(function(){
 		var rowid = $(this).attr('id');
 		var qty = $(this).parent().parent().find(".qty").val();
 		var token = $("input[name='_token']").val();
 		$.ajax({
 			url:'cap-nhat/'+rowid+'/'+qty,
 			type:'GET',
 			cache:false,
 			data:{"_token":token,"id":rowid,"qty":qty},
 			success:function(data){
 				if(data == "ok")
 				{
 					//alert("yes");
 					window.location = "cart"
 				}
 			}
 		});

 	});
 });

</script>


</body>
</html>
