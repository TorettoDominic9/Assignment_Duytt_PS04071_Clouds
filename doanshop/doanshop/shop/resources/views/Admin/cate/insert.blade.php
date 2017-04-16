@extends('Admin.master')
@section('title')
Category
@endsection()
@section('content')

<section class="content">


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


            <form role="form" action="{!! route('admin.cate.getInsert')  !!}" method="post">
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


                    <?php cate_parent($parent); ?>

                  </select>
            	</div>

            	<div class="form-group">
                  <label>Category name : </label>
                  <input type="text" name="txtname" class="form-control" placeholder="Enter ...">
                </div>

                <div class="form-group">
                  <label>Category Order : </label>
                  <input type="text" name="txtorder" class="form-control" placeholder="Enter ...">
                </div>

                <div class="form-group">
                  <label>Category keywords : </label>
                  <input type="text" name="txtkeywords" class="form-control" placeholder="Enter ...">
                </div>

                <div class="form-group">
                  <label>Category decsription : </label>
                  <textarea class="form-control" name="txtdescription" rows="3" placeholder="Enter ..."></textarea>

                </div>

            	<div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-default">Reset</button>
              </div>
              </div>
            </form>
          </div>


</div>


        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

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
                if($select != 0 && $id = $select){
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
