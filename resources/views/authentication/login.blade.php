	
	<div class="row">
	<div id="id01" class="modal" style="margin-top: 55px">
		<div class="col-lg-4 col-md-5 col-sm-7 col-xs-12  pull-right";>

			<div class="panel panel-default">

			  	<div class="panel-heading">
			  		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			  	<h4>Login</h4>

			  	</div>
			  	<div class="panel-body">
			  		<form action="/login" method="POST">
			  		
			  			{{csrf_field()}}

						<!-- for email -->
						<div class="form-group">
			  				<div class="input-group" style="margin: 5px">
						      <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
						      <input id="email" type="email" class="form-control" name="email" placeholder="Email" required>
						    </div>
						</div>
						 <!--for password -->
						<div class="form-group">
						    <div class="input-group" style="margin: 5px">
						      <span class="input-group-addon"><i class="fa fa-key"></i></span>
						      <input id="password" type="password" class="form-control" name="password" placeholder="Enter Password" required>
						    </div>
						</div>
						
			  			<div class="form-group">
			  				<input type="submit" value="login" class="btn btn-primary btn-md pull-right">
			  			</div>

			  		</form>
			  	</div>
			</div>
		</div>
	</div>
	</div>
	
