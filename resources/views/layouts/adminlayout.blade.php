<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SUST eSurvey</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <!-- Bootstrap Core CSS -->
    <link href="../styles/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../styles/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../styles/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../styles/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../styles/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../styles/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="../styles/charts.css">
   
    <script src="../js/esurvey.js" ></script>


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            @yield('navbar')

            @yield('sidebar')
        </nav>
        <!-- /#page-wrapper -->
        @yield('content')

        



    </div>
    <!-- /#wrapper -->
   
    @yield('footer')
    @yield('exScript')
    <!-- jQuery -->
    <script src="../styles/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../styles/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../styles/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../styles/bower_components/raphael/raphael-min.js"></script>
    <script src="../styles/bower_components/morrisjs/morris.min.js"></script>
    <script src="../styles/js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../styles/dist/js/sb-admin-2.js"></script>

    
</body>

</html>
