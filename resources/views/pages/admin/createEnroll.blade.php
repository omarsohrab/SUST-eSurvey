

@extends('pages.admin')
@section('content_header')
  @if(Session::get('massage'))
      
      <div class="alert alert-success alert-dismissible" role="alert" style="margin-top: 20px"><p>{{Session::get('massage')}}</p></div>
      @php
        Session::set('massage',null);
      @endphp
    @endif
  @if($course)
  	Enroll Student to {{$course->course_name}}({{$course->course_id}})
  @endif
@stop
@section('admin_content')
@if($stnts->count()>0)
  <div class="row">
      <div class="col-md-8 col-md-offset-1">  
        <form action="/enroll" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label for="student">Select Student</label>
            <select class="form-control" id="student" name="id">
              @foreach($stnts as $stnt)
              
                    @if(QsnProcess::is_olready_enrolled($stnt->id,$course->course_id)==false)
                      <option value="{{$stnt->id}}">{{$stnt->first_name}} {{$stnt->last_name}} ({{$stnt->users_id}} )</option>
                    @else
                      <h3>opps!! there are no students to enroll!!!</h3>
                     @endif
                  
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="session">Course Deadline:</label>
            <input type="month" class="form-control"  name="session" placeholder="Enter Session for the Cource. Example: 2011-12"  required>
          </div>

          <div class="form-group">
            <input type="submit" value="Enroll" class="btn btn-primary btn-md pull-right">
          </div>
        </form>
      </div>
  </div>
@else
  <h3>opps!! there are no students to enroll!!!</h3>
@endif
@stop
