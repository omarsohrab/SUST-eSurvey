@extends('layouts.adminlayout')
@section('navbar')
	@include('parts.navbar')
@stop
@section('sidebar')
    @if(Sentinel::getUser()->inRole('admin'))
        @include('parts.adminSidebar')
    @else
        @include('parts.facultySidebar')
    @endif
@stop
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        
                        @yield('content_header')
                  
                    </div><!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        @yield('faculty_content')
                    </div><!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@stop
