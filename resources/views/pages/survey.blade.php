@extends('layouts.facultylayout')
@section('content_header')
	<h1>List of Surveyes</h1>
  @if(Session::get('massage'))
    
    <div class="alert alert-success alert-dismissible" role="alert" style="margin-top: 20px"><p>{{Session::get('massage')}}</p></div>
    @php
      Session::set('massage',null);
    @endphp
  @endif
@stop
@section('faculty_content')
<div class="row">
<div class="col-md-0 col-md-offset-1 ">
<table class="table table-striped">
<thead>
  <tr>
  	<th>Title</th>
    <th>Committee</th>
    <th>Course Code</th>
    <th>Deadline</th>
    <th>Action</th>

    
  </tr>
</thead>
<tbody>
@foreach($srvy as $survey)
  <tr>
  	<td>{{$survey->survey_title}}</td>
  	<td>{{$survey->commity_id}}</td>
    <td>{{$survey->course_code}}</td>
    <td>{{$survey->expired}}</td>
    <td>
    	<div class="btn-group">
		  
      <form method="POST" action="/survey/{{$survey->survey_id}}">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <a href="/survey/{{$survey->survey_id}}" class="btn btn-default btn-sm">Edit</a>
            <a href="/result/{{$survey->survey_id}}" class="btn btn-default btn-sm">Responses</a>
            <input type="submit" value="Delete" class="btn btn-danger btn-sm">
      </form>
		  
		</div>
    </td>
  </tr>
@endforeach
</tbody>
</table>
</div>
</div>
@stop