<div class="row">
	
    <div class="col-lg-8">	
  		<form action="/survey/create/addSection" method="POST">
  			{{csrf_field()}}

  			<!-- For Survey title -->
  			<div class="input-group ">
  			  <span class="input-group-addon">Question {{$i}} </span>
  			  <input type="text" class="form-control input-lg"  name="title" placeholder="Section Name"  required autofocus >
			  </div>
        
			
  			<div class="form-group">
  				<input type="submit" value="Done" class="btn btn-primary btn-md pull-right">
  			</div>
  		</form>

  		<br><br><br>
  	</div>
</div>