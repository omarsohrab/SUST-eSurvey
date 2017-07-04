@extends('layouts.facultylayout')
@section('content_header')
	@if(Session::get('massage'))
		
		<div class="alert alert-success alert-dismissible" role="alert" style="margin-top: 20px"><p>{{Session::get('massage')}}</p></div>
		@php
			Session::set('massage',null);
		@endphp
	@endif
	<h1>List of Survey Committees</h1>
@stop
@section('faculty_content')
	
	<div class="row">
		<div class="col-md-0 col-md-offset-1 ">
		<table class="table table-striped">
		<thead>
		  <tr>
		  	<th>Title</th>
		  	<th>Dept</th>
		    <th>Course Code</th>
		    <th>Creator</th>
		    <th>Member</th>
		    <th>Action</th>
		    
		  </tr>
		</thead>
		<tbody>
		@foreach($cmtes as $cmte)
			
		  <tr>
		  	<td>{{$cmte->title}}</td>
		  	<td>{{$cmte->dept}}</td>
		    <td>{{$cmte->course_code}}</td>
		    <td>{{QsnProcess::getUserName($cmte->creator_id)}}</td>
		    <td>{{QsnProcess::getUserName($cmte->member_id)}}</td>
		    <td>
		    	<form method="POST" action="/committees/{{$cmte->id}}">
	              {{csrf_field()}}
	              {{method_field('DELETE')}}
	              <input type="submit" value="Delete" class="btn btn-danger btn-sm">
	            </form>
		    </td>
		  </tr>
		@endforeach
		</tbody>
		</table>
		</div>
	</div>
@stop