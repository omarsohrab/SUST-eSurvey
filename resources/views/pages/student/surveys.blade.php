@extends('layouts.lanidingLayout')
@section('navbar')
    @include('parts.studentNav')
@stop
@section('content')
    <div class="banner" style="">

        <div class="container-fluid">

            <div class="row">
            <div class="col-xs-10 col-lg-offset-1">
               	@if($surveys->count()>0)
                    <h3 style="text-align: center;"> {{ Sentinel::getUser()->first_name}}, you are invited to following Surveys by the "Survey Creator". Participate to share your opinion about the course.</h3>
                    <h4 style="text-align: center;">Note: You can participate anonymously</h4>
                @else
                	<h4> {{ Sentinel::getUser()->first_name}}, you are not invited to any Survey by the "Survey Creator". Please contact to your course teacher</h4>
                @endif
            </div>            
            </div>
        </div>
    </div>
    <div class="container"> 
        @if(Session::get('massage'))
    
		    <div class="alert alert-success alert-dismissible" role="alert" style="margin-top: 20px"><p>{{Session::get('massage')}}</p></div>
		    @php
		      Session::set('massage',null);
		    @endphp
		@endif
	</div>
	<div class="row container" style="margin-top: 30px;">
		<div class="col-md-10 col-md-offset-2">
		 <table class="table table-striped">
		    <thead>
		      <tr class="danger">
		        <th>Title</th>
		        <th>Course Code</th>
		        <th>Invited By</th>
		        <th>Action</th>

		        
		      </tr>
		    </thead>
		    <tbody>
		    @foreach($surveys as $survey)
		    @if(QsnProcess::is_pert($survey->survey_id)==false)
		      <tr>
		        <td>{{$survey->survey_title}}</td>
		      	<td>{{$survey->course_id}}</td>
		        <td>{{QsnProcess::getUserName($survey->creator_id)}}</td>
		        <td>
		        	
					  
					<a href="/response/{{$survey->survey_id}}" class="btn btn-default ">Participate</a>
					
		        </td>
		      </tr>
		      @else
                   
              @endif
		    @endforeach
		    </tbody>
		  </table>
	    </div>
	</div>
@stop
    