@extends('pages.admin')
@section('content_header')
	List Of Ongoing Syrveys
@stop
@section('admin_content')
<div class="row">
<div class="col-md-0 col-md-offset-1 ">
<table class="table table-striped">
<thead>
  <tr>
    <th>Title</th>
    <th>Committee</th>
    <th>Course Code</th>
    <th>Creator</th>
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
    <td>{{$survey->creator_id}}</td>
    <td>{{$survey->expired}}</td>
    <td>
      <form method="POST" action="/surveys/{{$survey->survey_id}}">
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