@extends('pages.admin')
@section('content_header')
	
  @if(Session::get('massage'))
    
    <div class="alert alert-success alert-dismissible" role="alert" style="margin-top: 20px"><p>{{Session::get('massage')}}</p></div>
    @php
      Session::set('massage',null);
    @endphp
  @endif
  Existing Courses
@stop
@section('admin_content')
<div class="row">
<div class="col-md-0 col-md-offset-1 ">
 <table class="table table-striped" >
    <thead >
      <tr>
      	<th>Course Name</th>
        <th>Course Code</th>
        <th>Dept</th>
        <th>Year/Semester</th>
        <th  style="text-align: center">Action</th>

        
      </tr>
    </thead>
    <tbody>
    @foreach($courses as $course)
      <tr>
      	<td>{{$course->course_name}}</td>
      	<td>{{$course->course_id}}</td>
        <td>{{$course->dept_name}}</td>
        <td>{{$course->lavel}}</td>
        <td  style="text-align: center">
          <form method="POST" action="/course/{{$course->id}}">
              {{csrf_field()}}
              {{method_field('DELETE')}}
            	<div class="btn-group">
                 
        			  <a href="/enroll/{{$course->id}}" class="btn btn-default btn-sm">Enroll Student</a>
        			  <input type="submit" value="Delete" class="btn btn-danger btn-sm">
        			</div>
          </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  </div>
</div>
@stop