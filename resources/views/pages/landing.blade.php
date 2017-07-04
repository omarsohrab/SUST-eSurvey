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

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container-fluid topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand " style="margin: 2px;padding: 0;" href="#">
                    <img src="logo.png" class="img-responsive"  width="90" height="90">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#about" style="color:#23527C"> Home</a>
                    </li>
                    <li>
                        <a href="#services" style="color:#23527C">Services</a>
                    </li>
                    <li>
                        <a href="#contact" style="color:#23527C">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
<!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Welcome to SUST eSurvey</h1>
                        <h3> Please log in to continue.</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                           
                            <li>
                                
                                <button class="btn btn-default btn-lg" onclick="document.getElementById('id01').style.display='block'" style="">
                                <i class="fa fa-lock"> </i>LOGIN</button>
        @include('authentication.login')
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->
    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

    <a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">SUST eSurvey <br>Take coures feedback online </h2>
                    <p class="lead"> Save a lot of time and effort through an <b>"SUST eSurvey"</b>. You can quickly create, administer, collect and analyze surveys.Performing all of these functions in one integrated web system saves you a considerable amount of time over traditonal course feedback system. </p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/work.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Create custom survey.</h2>
                    <p class="lead">Store and use existing survey templates and questions. Maintain maintain a survey profile using <b> "SUST eSurvey"</b>. Create sample questions related to specific courses, dept. Reuse existing survey templates and question sets.</p>
                </div>


            <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <div id="myCarousel" class="carousel slide">
                 <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img class="img-responsive" src="img/slide1.png" alt="" >
        
      </div>

      <div class="item">
        <img class="img-responsive" src="img/slide2.png" alt="" >
        
      </div>
    
      <div class="item">
        <img class="img-responsive" src="img/slide3.png" alt="" >

      </div>

 
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Summarise the results</h2>
                    <p class="lead"><b>"SUST eSurvey"</b> will help one to take faster decisions with data. Teachers can take feedback on course and publish result in no time. We belive this will be helpfull to ensure quality and efficiency at the highest level of education.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/analysis.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2> Find out who we are ?</h2>
                </div>
                <div class ="col-lg-6">
                   <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="#" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                        </li>
                    </ul>
                            
                        </ul>
                </div>
                        
            </div>
        </div>
    </div>


        <!-- /.container -->

    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; SUST 2017. All Rights Reserved</p>
                </div>
            </div>
        </div>

    </footer>

    <!-- jQuery -->
    <script src="../landingstyle/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../landingstyle/js/bootstrap.min.js"></script>

    <script>
// Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</body>

</html>
