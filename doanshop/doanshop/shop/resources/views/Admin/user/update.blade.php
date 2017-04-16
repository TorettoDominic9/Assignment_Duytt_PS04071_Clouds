@extends('Admin.master')
@section('title')
Category
@endsection()
@section('content')

<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <div class="row">
        <!-- left column -->
        
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Insert Category</h3>
            </div>
            <!-- /.box-header -->
			<!-- form start -->

				     			
            <form role="form" action="" method="post">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
				@if(count($errors)>0)
					<div class="alert alert-danger">
						<ul>
							@foreach($errors->all() as $error)
								<li>{!!$error!!}</li>
							@endforeach
						</ul>
					</div>

				@endif
			<div class="box-body">
            	<div class="form-group">
                  <label>Category Parent : </label>
                  <select class="form-control" name="sltParent">
                  <option value="0">Please Choose Categore Parent</option>
                    
                 
                    <?php cate_parent($parent,0,"--",$data["parent_id"]); ?>

                  </select>
            	</div>

            	<div class="form-group">
                  <label>Category name : </label>
                  <input type="text" name="txtname" value="{!! old('txtname',isset($data) ? $data['name'] :null ) !!}" class="form-control" >
                </div>

                <div class="form-group">
                  <label>Category Order : </label>
                  <input type="text" name="txtorder" value="{!! old('txtorder',isset($data) ? $data['order'] :null ) !!}" class="form-control" >
                </div>

                <div class="form-group">
                  <label>Category keywords : </label>
                  <input type="text" name="txtkeywords" value="{!! old('txtkeywords',isset($data) ? $data['keywords'] :null ) !!}"  class="form-control" >
                </div>

                <div class="form-group">
                  <label>Category description : </label>
                  <textarea class="form-control"  name="txtdescription" rows="3" placeholder="Enter ...">{!! old('txtdescription',isset($data) ? $data['description'] :null ) !!}</textarea>
                </div>

            	<div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{asset('admin/cate/list')}}">
                <button type="button" class="btn btn-success">Cancel</button>
                </a>
              </div>
              </div>
            </form>
          </div>


</div>
          

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

          

          <!-- Calendar -->
          <div class="box box-solid bg-green-gradient">
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Calendar</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Add new event</a></li>
                    <li><a href="#">Clear events</a></li>
                    <li class="divider"></li>
                    <li><a href="#">View calendar</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-black">
              <div class="row">
                <div class="col-sm-6">
                  <!-- Progress bars -->
                  <div class="clearfix">
                    <span class="pull-left">Task #1</span>
                    <small class="pull-right">90%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Task #2</span>
                    <small class="pull-right">70%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                  <div class="clearfix">
                    <span class="pull-left">Task #3</span>
                    <small class="pull-right">60%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Task #4</span>
                    <small class="pull-right">40%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
<?php
        function cate_parent($data,$parent = 0,$str ="--", $select =0 ){
        foreach ($data as $val){
            $id = $val["id"];
            $name = $val["name"];
            if($val["parent_id"] == $parent){
                if($select != 0 && $id == $select){
                    echo "<option value='$id' selected='selected'> $str $name </option>";
                }else{
                    echo "<option value='$id' > $str $name </option>";
                }
                cate_parent ($data,$id,$str."--");
            }
        }
    }
?>
		
	
@endsection()