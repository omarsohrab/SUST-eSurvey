@extends('layouts.facultylayout')
@section('content_header')
	<h1 class="page-header">Create New Survey Committee</h1>
@stop
@section('faculty_content')

 <div class="row">
    <div class="col-lg-8">	
  		<form action="/committee" method="POST">
  			{{csrf_field()}}

  			<!-- For Survey title -->
  			<div class="form-group">
  			  <label for="title">Committee Name:</label>
  			  <input type="text" class="form-control"  name="title" placeholder="Name of Committee. Example:Committee FES-101 2017"  required>
			</div>

			 <!-- For description -->
			
			<div class="row">
				
				<!-- for course code -->
				<div class="col-md-8 form-group">
				  <label for="course_id">Select the Tergeted course :</label>
				  <select class="form-control" id="course_code" name="course_code">
				    @foreach($courses as $course)
				    		<option>{{$course->course_id}}</option>
				    @endforeach
				  </select>
				</div>
			</div>

			
			
			<div class="row">
				<!-- for template permission  -->
				<div class="col-md-8 form-group">
				  <label for="course_id">Select Faculty as Survey Creator:</label>
				  <select class="form-control" name="creator_id">
			  		@foreach($faculties as $faculty)
			    		<option value="{{$faculty->id}}">{{$faculty->first_name}} {{$faculty->last_name}} </option>
			    	@endforeach

				  </select>
				</div>
	  		</div>
	  		<div class="row">	
		        <div class="col-md-8 form-group">
				  <label for="course_id">Select Faculty as Survey Committee Member:</label>
				  <select class="form-control" name="member_id">
				    @foreach($faculties as $faculty)

			    		<option value="{{$faculty->id}}">{{$faculty->first_name}} {{$faculty->last_name}} </option>
			    	@endforeach
				  </select>
				</div>
			</div>
  			<div class="form-group">
  				<input type="submit" value="Submit" class="btn btn-primary btn-md pull-right">
  			</div>
  		</form>
  	</div>
</div>
@stop