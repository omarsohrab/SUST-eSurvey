@extends('pages.admin')
@section('content_header')
	Add New Course
@stop
@section('admin_content')
    <div class="row">
		<div class="col-md-8 col-md-offset-1">
			
	  		<form action="/createcourse" method="POST">
	  			{{csrf_field()}}

	  			<!-- for course id -->
	  			<div class="form-group">
	  				<label for="course_id">Course Code:</label>
				     <input id="course_id" type="text" class="form-control" name="course_id" placeholder="Example: FES-101 or CSE-101" required>
				    
				</div>
				<!-- for course name -->
				<div class="form-group">
	  				<label for="course_name">Course Title:</label>
				     <input id="course_name" type="text" class="form-control" name="course_name" placeholder="Example: Intruduction to forestry"  required>
				    
				</div>

				<!-- for dept name -->
				<!-- for dept -->
				<div class="form-group">
	  				<label for="dept">Department:</label>
					<select class="form-control" id="dept" name="dept">

						@foreach($depts as $dept)
							<option>{{$dept->dept_name}}</option>
						@endforeach
					</select>
				   
				</div>
				
				<!-- for Level  -->
			
				<div class="form-group">
	  				<label for="level">Select Level:</label>
					<select class="form-control" id="level" name="lavel" >
						<option>1/1</option>
						<option>1/2</option>
						<option>2/1</option>
						<option>2/2</option>
						<option>3/1</option>
						<option>3/2</option>
						<option>4/1</option>
						<option>4/2</option>
						<option disabled="">--------</option>i>
						<option>M/1</option>
						<option>M/2</option>
					</select>
				   
				</div>
				
				
	  			<div class="form-group">
	  				<input type="submit" value="Resister" class="btn btn-primary btn-md pull-right">
	  			</div>
	  		</form>
			  	
	</div>
@stop