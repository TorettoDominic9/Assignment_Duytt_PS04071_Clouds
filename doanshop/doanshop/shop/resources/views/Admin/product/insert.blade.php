@extends('Admin.master')
@section('title')
Product
@endsection()
@section('content')

<section class="content">


      <!-- /.row -->
      <!-- Main row -->
      <form role="form" action="{!! route('admin.product.getInsert')  !!}" enctype="multipart/form-data" method="post">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
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
                  <option value="">Please Choose Categore Parent</option>


                    <?php cate_parent($cate,0,"--",old('sltParent')); ?>

                  </select>
              </div>
              <div class="form-group">
                  <label>Product name : </label>
                  <input type="text" name="txtproductname" class="form-control" value="{{old ('txtproductname')}}" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Price : </label>
                  <input type="text" name="txtprice" class="form-control" value="{{old ('txtprice')}}" placeholder="Enter ...">
                </div>

                <div class="form-group">
                  <label>Intro : </label>
                  <textarea class="form-control" name="txtintro" rows="3"  placeholder="Enter ...">{{old ('txtintro')}}</textarea>
                  <script type="text/javascript">ckeditor("txtintro")</script>
                </div>

                <div class="form-group">
                  <label>Content : </label>
                  <textarea class="form-control"  name="txtcontent" rows="3" placeholder="Enter ...">{{old ('txtcontent')}}</textarea>
                  <script type="text/javascript">ckeditor("txtcontent")</script>
                </div>

                <div class="form-group">
                  <label for="exampleInputFile" >Images</label>
                  <input type="file" value="{{old ('FImages')}}" name="FImages" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="form-group">
                  <label>Keywords : </label>
                  <input type="text" value="{{old ('txtkeywords')}}" name="txtkeywords" class="form-control" placeholder="Enter ...">
                </div>

                <div class="form-group">
                  <label>Decsription : </label>
                  <textarea class="form-control"  name="txtdescription" rows="3" placeholder="Enter ...">{{old ('txtdescription')}}</textarea>
                </div>


              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-default">Reset</button>
                <a href="{{asset('admin/product/list')}}">
                <button type="button" class="btn btn-success">Cancel</button>
                </a>
              </div>


              </div>

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
