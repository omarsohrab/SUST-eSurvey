@extends('layouts.adminlayout')
@section('navbar')
	@include('parts.navbar')
@stop
@section('sidebar')
    @include('parts.adminSidebar')
@stop
@section('content')
<div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="intro-message">
                        
                        <h3>SUST eSurvey is designed to get important feedbacks from you about the courses, course material, Course teachers quality etc .</h3>
                        
                        <p>Hit the button bellow to see the list of surveys</p>
                        
                        <ul class="list-inline intro-social-buttons">
                           
                            <li>
                                
                                <a href="/surveys" class="btn btn-default btn-lg">Surveys</a>
        
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->
    </div>
@stop