@extends('layouts.adminlayout')
@section('navbar')
	@include('parts.navbar')
@stop
@section('sidebar')
    @include('parts.adminSidebar')
@stop
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            @yield('content_header')
                        </h1>
                    </div><!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        @yield('admin_content')
                    </div><!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@stop