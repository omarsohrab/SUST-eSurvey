@extends('pages.admin')
@section('content_header')
  @if(Session::get('massage'))
    
    <div class="alert alert-success alert-dismissible" role="alert" style="margin-top: 20px"><p>{{Session::get('massage')}}</p></div>
    @php
      Session::put('massage',null);
    @endphp
  @endif
	Department List
@stop
@section('admin_content')
<div class="row">
<div class="col-md-0 col-md-offset-1 ">
 <table class="table table-striped">
    <thead>
      <tr>
        <th>Dept Code</th>
        <th>Dept Name</th>
        <th>Head </th>
        <th>Action</th>

        
      </tr>
    </thead>
    <tbody>
    @foreach($depts as $dept)
      <tr>
        <td>{{$dept->dept_name}}</td>
      	<td>{{$dept->full_name}}</td>
        <td>{{QsnProcess::getUserName($dept->head_id)}}</td>
        <td>
        	
			  
			    <form method="POST" action="/dept/{{$dept->id}}">
              {{csrf_field()}}
              {{method_field('DELETE')}}
              <a href="/" class="btn btn-default btn-sm">Edit</a>
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