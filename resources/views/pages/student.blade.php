@extends('layouts.lanidingLayout')
@section('navbar')
    @include('parts.studentNav')
@stop
@section('content')
    <div class="intro-header">
	    <div class="container">

	        <div class="row">
	            <div class="col-lg-10 col-lg-offset-1">
	                <div class="intro-message">
	                    
	                    <h3>SUST eSurvey is designed to get important feedbacks from you about the courses, course material, Course teachers quality etc .</h3>
	                    
	                    <p>Hit the button bellow to see the surveys you are invited to participate</p>
	                    
	                    <ul class="list-inline intro-social-buttons">
	                       
	                        <li>
	                            
	                            <a href="/stsurveys" class="btn btn-default btn-lg">Participate</a>
	    
	                        </li>
	                        
	                    </ul>
	                </div>
	            </div>
	        </div>

	    </div>
	    <!-- /.container -->
	</div>
@stop
    