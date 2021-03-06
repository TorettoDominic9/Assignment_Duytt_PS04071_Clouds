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
              <h3 class="box-title">DANH SÁCH DANH MỤC</h3>
            </div>
            <div>
            <a href="{{asset('admin/cate/insert')}}">
                <button style="margin: 10px" type="button" class="btn btn-success">Insert</button>
            </a>

            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Category Name</th>
                  <th>Parent</th>
                  <th></th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
               <?php $stt = 0?>
                
                @foreach($data as $item)
               <?php $stt=$stt +1 ?>
				<tr>
					<td data-field="id" data-align="right" >{!!$stt!!}</td>
					<td>{!! $item["name"] !!}</td>
					<td>
					@if($item["parent_id"] == 0)
						{!! "None" !!}		
					@else
					<?php
						$parent =DB::table('cates')->where('id',$item["parent_id"])->first();
						echo $parent->name;
					?>
					@endif
					</td>
					<td><a  href="{!! URL::route('admin.cate.getEdit',$item['id'])  !!}" >Edit</a></td>
					<td><a onclick="return xacnhanxoa('Bạn Có Chắc Chắn Là Muốn Xóa')" href="{!! URL::route('admin.cate.getDelete',$item['id'])  !!}" >Delete</a></td>
				</tr>
				@endforeach
						    


                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Category Name</th>
                  <th>Parent</th>
                  <th></th>
                  <th></th>
                </tr>
                </tfoot>
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


