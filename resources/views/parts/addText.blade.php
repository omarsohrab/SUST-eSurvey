<div class="row">
	
    <div class="col-lg-8">	
  		<form action="/survey/create/addtext" method="POST">
  			{{csrf_field()}}

  			<!-- For Survey title -->
  			<div class="input-group ">
  			  <span class="input-group-addon">Question {{$i}} </span>
  			  <input type="text" class="form-control input-lg"  name="title" placeholder="This is qusetion? "  required autofocus >
			  </div>
        <div class="input-group" style="margin-left:  5%;margin-top:5px; margin-bottom:  5px">
          <span class="input-group-addon">Description </span>
          <textarea class="form-control " rows="5" id="descrip" name="descrip" placeholder="Write a short description if needed"></textarea>
        </div>
			
  			<div class="form-group">
  				<input type="submit" value="Done" class="btn btn-primary btn-md pull-right">
  			</div>
  		</form>

  		<br><br><br>
  	</div>
</div>