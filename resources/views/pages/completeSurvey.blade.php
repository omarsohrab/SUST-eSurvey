@extends('layouts.facultylayout')
@section('content_header')
	<div class="survey_hedding" style="text-align: center">
		<h1 >{{$srvy->survey_title}}</h1>
		<p >{{$srvy->description}} </p>
		<hr>
	</div>
@stop
@section('faculty_content')
	<div class="oldques">
		@if($olds)
			@php $i =1 @endphp
			@foreach($olds as $old)
				@if($old->question_type=='section')
					
					<h2>{{$old->question}}</h2
					>
					<hr>
				@else
					<h3>{{$i}}. {{$old->question}}</h3>
				@endif
				@if($old->question_type=='mcq')
					@include('parts.mcq')

				@elseif($old->question_type=='drp')
					@include('parts.showDropdown')
					
				@elseif($old->question_type=='para')
					<div class="form-group" style="margin-left: 3%;width: 60%">
			          
			          <textarea class="form-control" rows="3" id="descrip" name="descrip" placeholder="Write a short description if needed"></textarea>
			        </div>
			    @elseif($old->question_type=='txt')
					<div class="form-group" style="margin-left: 3%;width: 60%">
			          <input type="text" class="form-control"  name="title" name="descrip" placeholder="Short answer Text "  required  >
			          
			        </div>
			    @elseif($old->question_type=='date')
					<div class="form-group" style="margin-left: 3%;width: 30%">
			          <input type="date" class="form-control">
			          
			        </div>
				@endif

				@if($old->question_type !='section')
					@php $i++ ;@endphp
				@endif
			@endforeach

		@endif
	</div>
	<br><hr>

	<div id="mcqblade" style="display: none">
		@include('parts.addMCQ')
	</div>
	<div id="paragraph" style="display: none">
		@include('parts.addParagraph')
	</div>
	<div id="text" style="display: none">
		@include('parts.addText')
	</div>
	<div id="section" style="display: none">
		@include('parts.addSection')
	</div>
	<div id="date" style="display: none">
		@include('parts.addDate')
	</div>
	<div id="dropdown" style="display: none">
		@include('parts.addDropdown')
	</div>
		<a href="/submitsurvey" class="btn btn-primary" style="float: right;margin-left: 5px">Submit</a>
		<div class="dropup" style="float: right;">
		    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" autofocus="10">Add Question
		    <span class="caret"></span></button>
		    <ul class="dropdown-menu">

		      <li><a href="#" onclick="showMcq()">Add MCQ</a></li>
		      <li><a href="#" onclick="showDropdown()">Dropdown</a></li>

		      <li class="divider"></li>
		      <li><a href="#" onclick="showText()">Short answer</a></li>
		      <li><a href="#" onclick="showParagraph()">Paragraph</a></li>

		      <li class="divider"></li>
		      <li><a href="#" onclick="showSection()">Add Section</a></li>
		      <li><a href="#" onclick="showDate()">Date</a></li>
		    </ul>
		  </div>
		
	<br><br><br>

	


@stop