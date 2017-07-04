@extends('pages.admin')
@section('content_header')
	Add new dept to the list
@stop
@section('admin_content')
    <div class="row">
		<div class="col-md-8 col-md-offset-1">
			
	  		<form action="/createdept" method="POST">
	  			{{csrf_field()}}

	  			<!-- for dept id -->
	  			

				<div class="form-group">
	  				
					<label for="title">Dept Name:</label>
					<input id="full_name" type="text" class="form-control" name="full_name" placeholder="Example: Computer Science and Engineering"  required>
		
				</div>

				<!-- for dept name -->
				<div class="form-group">
					<label for="title">Dept Code:</label>
					<input id="dept_name" type="text" class="form-control" name="dept_name" placeholder="Example: CSE"  required>
				</div>
				
				<!-- for head id  -->
				<div class="form-group">
				   <label for="head_id">Select Head of Dept:</label>
				    <select class="form-control" id="head_id" name="head_id">
			            @foreach($deans as $dean)
			                <option value="{{$dean->id}}">{{$dean->first_name}} {{$dean->last_name}}</option>
			            @endforeach
			        </select>
				    
				</div>
				<!-- for school  -->
				<div class="form-group">
	  				<label for="school">Select School:</label>
				     
					<select class="form-control" id="school" name="school">
						@foreach($schools as $school)
							<option value="{{$school->id}}">{{$school->school_name}}
							</option>
						@endforeach
					</select>
				    
				</div>
				
				
	  			<div class="form-group">
	  				<input type="submit" value="Resister" class="btn btn-primary btn-md pull-right">
	  			</div>
	  		</form>
			  	
	</div>
@stop