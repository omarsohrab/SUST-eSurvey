@extends('layouts.facultylayout')
@section('content_header')
	<h1 class="page-header">Create New Survey</h1>
@stop
@section('faculty_content')

 <div class="row">
    <div class="col-lg-8">	
  		<form action="/survey" method="POST">
  			{{csrf_field()}}

  			<!-- For Survey title -->
  			<div class="form-group">
  			  <label for="title">Survey Title:</label>
  			  <input type="text" class="form-control"  name="title" placeholder="Enter Survey Title"  required>
			</div>

			 <!-- For description -->
			<div class="form-group">
			  <label for="descrip">Description:</label>
			  <textarea class="form-control" rows="5" id="descrip" name="descrip"></textarea>
			</div>
			<div class="row">
				<!-- for survey committee --> 
				<div class="col-md-6 form-group">
				  <label for="sel1">Select Survey Committee:</label>
				  <select class="form-control" id="commity_id" name="commity_id">
				    @foreach($cmts as $cmt)
				    		<option value="{{$cmt->id}}">{{$cmt->title}}</option>
				    @endforeach
				  </select>
				</div>
				<!-- for course code -->
				<div class="col-md-6 form-group">
				  <label for="course_id">Select the Tergeted course :</label>
				  <select class="form-control" id="course_id" name="course_id">
				    @foreach($cmts as $cmt)
				    		<option>{{$cmt->course_code}}</option>
				    @endforeach
				  </select>
				</div>
			</div>

			
			
			<div class="row">
				<!-- for template permission  -->
				<div class="col-md-6 form-group f" > 
					<label for="is_temp">Can it be used as a template?</label>
	  				<select class="form-control" id="is_temp" name="is_temp">
				    	<option>Yes</option>
				    	<option>No</option>
				  	</select>
	  			</div>
	  			<!-- for Ending Dealine -->
		        <div class="col-md-6 form-group">
		          <label for="title">Deadline:</label>
		          <input type="date" class="form-control"  name="deadline" required>
		        </div>
			</div>
  			<div class="form-group">
  				<input type="submit" value="Continiue" class="btn btn-primary btn-md pull-right">
  			</div>
  		</form>
  	</div>
</div>
@stop