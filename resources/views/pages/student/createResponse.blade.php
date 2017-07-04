@extends('layouts.lanidingLayout')
@section('navbar')
    @include('parts.studentNav')
@stop
@section('content')
<div class="container">
    @if(Session::get('questions'))
	    @php
	    $qsns = Session::get('questions');
	    $i=Session::get('index');
	    @endphp
	@endif
	<!--  -------------- -->
	<br>
	<div class="container">
		<h2 style="text-align: center">{{$srvy->survey_title}}</h2>
		<p style="text-align: center"">{{$srvy->description}}</p>
		<p style="text-align: center"">Total Question: {{$qsns->count()}}</p>
		<hr>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		@if($i<sizeof($qsns))
			<form action="/response" method="POST">
		  			{{csrf_field()}}

		  		@if($i==0)
		  		<div style="text-align: center;">
		  		<h4 class="radio-inline">Do you want to perticipate as annonimous?</h4>
		  			<label class="radio-inline" style="margin-top: 10px;">
				      <input type="radio" value="yes" name="anspert">Yes
				    </label>
				    <label class="radio-inline"  style="margin-top: 10px;">
				      <input type="radio" value="no" name="anspert">No
				    </label>
				    <hr>
				</div>
		  		@endif
		  		
				<h3>{{$i+1}}. {{$qsns[$i]->question}}</h3>
				@if($qsns[$i]->description&&$qsns[$i]->question_type!='mcq'&&$qsns[$i]->question_type!='drp')
					<p>{{$qsns[$i]->description}}</p>
				@endif
				<!--  control statements for question type starts here -->
				@if($qsns[$i]->question_type=='para')
					<div class="form-group" style="margin-left: 3%;width: 60%">
			          
			          <textarea class="form-control" rows="3" id="descrip" name="ans" placeholder="Write a short description if needed"></textarea>
			        </div>
			    @elseif($qsns[$i]->question_type=='txt')
					<div class="form-group" style="margin-left: 3%;width: 60%">
				          <input type="text" class="form-control" name="ans" placeholder="Short answer Text "  required  >
				     </div>
				@elseif($qsns[$i]->question_type=='date')
					<div class="form-group" style="margin-left: 3%;width: 30%">
				          <input type="date" name="ans" class="form-control">
				    </div>
				@elseif($qsns[$i]->question_type=='mcq')
					@include('pages.student.mcq')
				@elseif($qsns[$i]->question_type=='drp')
					@include('pages.student.dropdown')
			    @endif
			    <!--  control statements for question type END here -->
			    <div class="form-group">
			  				<input style="margin: 10px;" type="submit" value="Submit" class="btn btn-primary btn-md ">
			  	</div>
		  	</form>
		@else
			@php

				Session::set('questions',null);
		        Session::set('index',null);
		        $msg = 'Successfull!! Survey Completed';
		        Session::set('massage',$msg);
			@endphp
			<p> You Completed the survey</p>
			<a href="/stsurveys" class="btn btn primary">Done</a>
			
		@endif
		</div>
	</div>
</div>
@stop
    