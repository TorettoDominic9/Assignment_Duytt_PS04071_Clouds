
@section('title')
Product
@endsection()
@extends('Admin.master')
@section('css')
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{url('admin1/bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('admin1/plugins/datatables/dataTables.bootstrap.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('admin1/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{url('admin1/dist/css/skins/_all-skins.min.css')}}">
@endsection()
@section('content')

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">DANH SÁCH TÀI KHOẢN</h3>
            </div>
            <div>
            <a href="{{asset('admin/user/insert')}}">
                <button style="margin: 10px" type="button" class="btn btn-success">Thêm mới</button>
            </a>


            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
		            <th>Id</th>
			        <th>Tên đăng nhập</th>
			        <th>Email</th>
			        <th>Chức vụ</th>
			        <th></th>
			        <th></th>
                </tr>
                </thead>
                <tbody>
				<?php $stt = 0?>

                @foreach($user_list as $item)
               <?php $stt=$stt +1 ?>
				<tr>
					<td>{!!$stt!!}</td>
					<td>{!!$item["name"]!!}</td>
		    		<td>{!!$item["email"]!!}</td>
		    		@if($item["level"]==1)
		    		<td>Member</td>
		    		@elseif($item["id"]==1)
		    		<td><p style="color: blue">Admin<p></td>
		    		@else
		    		<td><p style="color: blue">Admin</p></td>
		    		@endif

		    		@if($item["id"]==1)
		    		<td></td>
		    		<td></td>
		    		@else
		    		<td><a  href="{!! URL::route('admin.user.getEdit',$item['id'])  !!}" >Sửa</a></td>
					<td><a onclick="return xacnhanxoa('Bạn Có Chắc Chắn Là Muốn Xóa')" href="{!! URL::route('admin.user.getDelete',$item['id'])  !!}" >Xóa</a></td>
					@endif
				</tr>
				@endforeach


                </tbody>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>







@endsection()
@section('script')
<script src="{{url('admin1/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{url('admin1/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- DataTables -->
<script src="{{url('admin1/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('admin1/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{url('admin1/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('admin1/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('admin1/dist/js/app.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('admin1/dist/js/demo.js')}}"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
@endsection()
