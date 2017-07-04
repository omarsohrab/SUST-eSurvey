@extends('layouts.masterlayout')
@section('navbar')
	@include('parts.landingnav')
@stop
@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-info">
			  	<div class="panel-heading"><h4>Faculty Registration</h4></div>
			  	<div class="panel-body">

			  		<form action="/registerfaculty" method="POST" name="register" onsubmit="return validateForm()">
			  			{{csrf_field()}}

			  			<!-- for first name -->
			  			<div class="form-group">
			  				<div class="input-group" style="margin: 5px">
						      <span class="input-group-addon"><i class="fa fa-user-o"></i></span>
						      <input id="first_name" type="text" class="form-control" name="first_name" placeholder="Enter Your First Name" required>
						    </div>
						</div>

						<!-- for last name -->
						<div class="form-group">
			  				<div class="input-group" style="margin: 5px">
						      <span class="input-group-addon"><i class="fa fa-user-o"></i></span>
						      <input id="last_name" type="text" class="form-control" name="last_name" placeholder="Enter Your Last Name" required>
						    </div>
						</div>
						<!-- for dept -->
						<div class="form-group">
			  				<div class="input-group" style="margin: 5px">
						      <span class="input-group-addon"><i class="">Dept</i></span>
						      <select class="form-control" id="dept" name="dept">
						        @foreach($depts as $dept)
							    	<option>{{$dept->dept_name}}</option>
							    @endforeach
						      </select>
						    </div>
						</div>
						<!-- for user id  -->
						<div class="form-group">
						    <div class="input-group" style="margin: 5px">
						      <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
						      <input id="users_id" type="number" class="form-control" name="users_id" placeholder="Faculty ID" required>
						    </div>
						</div>
						<!-- for email -->
						<div class="form-group">
			  				<div class="input-group" style="margin: 5px">
						      <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
						      <input id="email" type="email" class="form-control" name="email" placeholder="Email" required>
						    </div>
						</div>
						 <!--for password -->
						<div class="form-group">
						    <div class="input-group" style="margin: 5px">
						      <span class="input-group-addon"><i class="fa fa-key"></i></span>
						      <input id="password" type="password" class="form-control" name="password" placeholder="Enter Password" required>
						    </div>
						</div>
						 <!--for password confirmation-->
						<div class="form-group">
						    <div class="input-group" style="margin: 5px">
						      <span class="input-group-addon"><i class="fa fa-key"></i></span>
						      <input id="password_confirm" type="password" class="form-control" name="password_confirm" placeholder="Re-Enter Password" required>
						    </div>
			  			</div>

			  			<p id="warning" style="color:#C9302C"></p>
			  			<div class="form-group">
			  				<input type="submit" value="Resister" class="btn btn-info btn-md pull-right">
			  			</div>
			  		</form>
			  	</div>
			</div>
		</div>
	</div>
	
@stop
<script>

</script>