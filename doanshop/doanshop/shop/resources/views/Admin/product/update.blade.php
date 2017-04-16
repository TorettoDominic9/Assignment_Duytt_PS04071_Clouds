@extends('Admin.master')
@section('title')
Product
@endsection()
@section('content')

<section class="content">

      <!-- /.row -->
      <!-- Main row -->
      <form role="form" action="" enctype="multipart/form-data" method="post">
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
                  <option value="0">Please Choose Categore Parent</option>


                    <?php cate_parent($parent,0,"--",$product["cate_id"]); ?>

                  </select>
              </div>
              <div class="form-group">
                  <label>Product name : </label>
                  <input type="text" name="txtproductname" class="form-control" value="{{old ('txtproductname',isset($product) ? $product['name'] : null)}}" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Price : </label>
                  <input type="text" name="txtprice" class="form-control" value="{{old ('txtprice',isset($product) ? $product['price'] : null)}}" placeholder="Enter ...">
                </div>

                <div class="form-group">
                  <label>Intro : </label>
                  <textarea class="form-control" name="txtintro" rows="3"  placeholder="Enter ...">{!!old ('txtintro',isset($product) ? $product['intro'] : null)!!}</textarea>
                  <script type="text/javascript">ckeditor("txtintro")</script>
                </div>

                <div class="form-group">
                  <label>Content : </label>
                  <textarea class="form-control"  name="txtcontent" rows="3" placeholder="Enter ...">{{old ('txtcontent',isset($product) ? $product['content'] : null)}}</textarea>
                  <script type="text/javascript">ckeditor("txtcontent")</script>
                </div>

                <div class="form-group">
                	<label>Image :</label><br>
                	<img class="img-rounded" height="200px" src="{!! asset($product['image']) !!}">
                  <input type="hidden" name="img_c" value="{!!$product['image'] !!}" >
                </div>

                <div class="form-group">
                  <label for="exampleInputFile" >Images</label>
                  <input type="file" name="FImages">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="form-group">
                  <label>Keywords : </label>
                  <input type="text" value="{{old ('txtkeywords',isset($product) ? $product['keywords'] : null)}}" name="txtkeywords" class="form-control" placeholder="Enter ...">
                </div>

                <div class="form-group">
                  <label>Decsription : </label>
                  <textarea class="form-control"  name="txtdescription" rows="3" placeholder="Enter ...">{{old ('txtdescription',isset($product) ? $product['description'] : null)}}</textarea>
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
  <!--      <section class="col-lg-5 connectedSortable">

          <div class="box box-primary">
          <div class="box-header">
              <h3 class="box-title">Image product detail</h3>
            </div>
            <div style="margin: 5%">
            @for($i =1;$i<=10;$i++)
              <div class="form-group">
                <label>Images</label>
                <input type="file" class="btn-primary" name="fProductDetail[]"/>
              </div>
            @endfor
            </div>
            <br>


          </div>


        </section>
      -->
</form>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->

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
