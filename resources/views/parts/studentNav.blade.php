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
                    <img src="../logo.png" class="img-responsive"  width="90" height="90">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/" style="color:#23527C"> Home</a>
                    </li>
                    <li>
                        <a href="/stsurveys" style="color:#23527C">Surveys</a>
                    </li>
                    
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                         <p class="btn btn-sm btn-primary" style="margin: 0; border-style: none">{{ Sentinel::getUser()->first_name}}<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i></p>  
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            {{-- <li><a href="#"><i class="fa fa-user fa-fw"></i>{{ Sentinel::getUser()->first_name}} {{ Sentinel::getUser()->last_name}}</a>
                            </li> --}}
                           
                         
                            
                            <li>
                                <form action="/logout" method="POST" id="logout-form">
                                        {{ csrf_field() }}
                                        
                                        <a href="#" onclick="document.getElementById('logout-form').submit()" style="margin-right: 50px;padding: 5px"><i class="fa fa-sign-out fa-fw"></i> 
                                        Logout</a>

                                    </form>

                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>