<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SUST eSurvey</title>
    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon">

    <!-- Bootstrap Core CSS -->
    <link href="../landingstyle/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../landingstyle/css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/esurvey.js" ></script>
     <link rel="stylesheet" type="text/css" href="css/esurveystyle">

</head>

<body>   <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container-fluid topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               
                 <a class="navbar-brand " style="margin: 2px;padding: 0;" href="#">
                    <img src="logo.png" class="img-responsive"  width="90" height="90">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
         
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

		
	<div class="row">
		
		<div class="col-lg-6  col-lg-offset-3 col-md-6  col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12" style="margin-top: 145px;margin-bottom: 5px"> 

			<div class="panel panel-default">

			  	<div class="panel-heading">
			  		@if(Session::get('logerr'))
			  			<h4 style="color:#C9302C;text-align: center">{{Session::get('logerr')}}</h4>
			  			@php
            				Session::set('logerr',null);
			  			@endphp

			  		@else
			  			<h4>Login</h4>
			  		@endif

			  	</div>
			  	<div class="panel-body">

			  		
			  		<form action="/login" method="POST" width="90%" style="margin-left: 5%;margin-right: 5%;">
			  		
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
			  	<div class="panel-footer"><h3></h3></div>
			</div>
		</div>
	
	</div>

 <script src="../landingstyle/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../landingstyle/js/bootstrap.min.js"></script>

    

</body>

</html>		
