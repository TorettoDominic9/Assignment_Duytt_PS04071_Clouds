@extends('Admin.master')
@section('title')
Product
@endsection()
@section('content')


<div class="row">

			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Insert Admin</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="POST" action="{{ route('admin.user.postInsert') }}">
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

								<div class="form-group">
									<label>Username :</label>
									<input class="form-control" name="txtusername" placeholder="Sản phẩm....">
								</div>


								<label>Password :</label>
                                <div class="form-group has-error">
									<input class="form-control" type="Password" name="pass" placeholder="Password ">
								</div>
								<label>RePassword :</label>
                                <div class="form-group has-error">
									<input class="form-control" type="Password" name="repass" placeholder="RePassword ">
								</div>

                                <label>Email :</label>
								<div class="form-group has-success">
									<input type="Email" class="form-control" name="txtemail" placeholder="Email..">
								</div>

								<label>Roles: </label>
								<div class="radio">

				                <label>
				                  <input type="radio" name="level" value="1" class="radio-inline" checked>User
				                </label>
				                <label>
				                  <input type="radio" name="level" value="2" class="radio-inline">Admin
				                </label>


								</div>


								<button type="submit" class="btn btn-primary">Submit</button>
								<button type="button" class="btn btn-default">Cancel</button>
							</div>

						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->

@endsection()
