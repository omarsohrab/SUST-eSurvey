

@extends('pages.admin')
@section('content_header')
	Add New School
@stop
@section('admin_content')
<div class="row">
    <div class="col-md-8 col-md-offset-1">  
      <form action="/school" method="POST">
        {{csrf_field()}}

        <!-- For Survey title -->
        <div class="form-group">
          <label for="title">School Name:</label>
          <input type="text" class="form-control"  name="name" placeholder="i.e School of Agriculture and Mineral Science"  required>
      </div>

        <div class="form-group">
          <label for="dean">Select Dean of the School :</label>
          <select class="form-control" id="dean" name="dean">
            @foreach($deans as $dean)
                <option value="{{$dean->id}}">{{$dean->first_name}} {{$dean->last_name}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <input type="submit" value="Continiue" class="btn btn-primary btn-md pull-right">
        </div>
      </form>
    </div>
</div>
@stop
