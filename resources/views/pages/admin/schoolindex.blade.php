@extends('pages.admin')
@section('content_header')
  @if(Session::get('massage'))
    
    <div class="alert alert-success alert-dismissible" role="alert" style="margin-top: 20px"><p>{{Session::get('massage')}}</p></div>
    @php
      Session::set('massage',null);
    @endphp
  @endif
	List Of Schools
@stop
@section('admin_content')
<div class="row">
  <div class="col-md-0 col-md-offset-1 ">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Serial</th>
        <th>Name</th>
        <th>Dean</th>
        <th>Action</th>

        
      </tr>
    </thead>
    <tbody>
    @foreach($schools as $school)
      <tr>
        <td>{{$school->id}}</td>
        <td>{{$school->school_name}}</td>
        <td>{{QsnProcess::getUserName($school->dean_id)}}</td>
        
        <td>
          <div class="btn-group">
          
          <form method="POST" action="/school/{{$school->id}}">
            {{csrf_field()}}
            {{method_field('DELETE')}}
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