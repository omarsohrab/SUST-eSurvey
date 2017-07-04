<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SUST eSurvey Contents">
    <meta name="author" content="SUST Second Major">

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

<body style=";">
    @yield('navbar')
    <div id="pagetop" style="margin-top: 50px;min-height: 85%">
        @yield('content')
    </div>

    @yield('exScript')

    <footer class="active" style="margin-bottom: 0; max-height: 15%">

            <div class="container">
                <div class="row">
                    <div class="col-xs-10">
                        <p class="copyright text-muted small">Copyright &copy; SUST 2017. All Rights Reserved</p>
                    </div>
                    <div class="col-xs-2">
                        <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
        

                    </div>
                </div>
            </div>

    </footer>

    <!-- jQuery -->
    <script src="../landingstyle/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../landingstyle/js/bootstrap.min.js"></script>
    

</body>

</html>