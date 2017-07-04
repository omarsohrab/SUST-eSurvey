<div class="row">
	
    <div class="col-lg-8">	
  		<form action="/survey/create/adddropdown" method="POST" autofocus>
  			{{csrf_field()}}

  			<!-- For Survey title -->
  			<div class="input-group ">
  			  <span class="input-group-addon">Question {{$i}} </span>
  			  <input type="text" class="form-control input-lg"  name="title" placeholder="This is qusetion? "  required >
			</div>
			<div class="row">
			<div class="col-sm-10" style="margin-left: 12%">
			 <!-- For Option 1 -->
			<div class="input-group " style="margin: 5px">
  			  <span class="input-group-addon">1</span>
  			  <input type="text" class="form-control"  name="opt1" placeholder="Enter First Option"  required>
			</div>
			 <!-- For Option 2 -->
			<div class="input-group" style="margin: 5px">
  			  <span class="input-group-addon">2</span>
  			  <input type="text" class="form-control"  name="opt2" placeholder="Enter Second Option"  required>
			</div>
			 <!-- For Option 3 -->
			<div class="input-group" style="margin: 5px">
  			  <span class="input-group-addon">3</span>
  			  <input type="text" class="form-control"  name="opt3" placeholder="Enter Third Option" >
			</div>
			 <!-- For Option 4 -->
			<div class="input-group" style="margin: 5px">
  			  <span class="input-group-addon">4</span>
  			  <input type="text" class="form-control"  name="opt4" placeholder="Enter 4th Option" autofocus >
			</div>
      <div class="input-group" style="margin: 5px">
          <span class="input-group-addon">5</span>
          <input type="text" class="form-control"  name="opt5" placeholder="Enter 5th Option" autofocus >
      </div>

			</div> <!-- END: collummn -->
			</div> <!-- END: row -->
  			<div class="form-group">
  				<input type="submit" value="Done" class="btn btn-primary btn-md pull-right">
  			</div>
  		</form>

  		<br><br><br>
  	</div>
</div>