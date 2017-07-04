
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand " style="margin: 2px;padding: 0;margin-left: 12px" href="#">
                    <img src="../logo.png" class="img-responsive"  width="90" height="90">
        </a>
       
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
       
        <li style="margin-left: 10px">
            <p class="btn btn-primary btn-sm"> {{ Sentinel::getUser()->first_name}}</p>
        </li>
       
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                
              
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
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    
