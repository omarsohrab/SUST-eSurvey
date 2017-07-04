<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SUST eSurvey</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="/login" class="active">Home</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
        @if(Sentinel::check())
            <li role="presentation">
                <form action="/logout" method="POST" id="logout-form">
                    {{ csrf_field() }}
                    <span class="glyphicon glyphicon-log-in"></span>
                    <a href="#" onclick="document.getElementById('logout-form').submit()" style="margin-right: 50px;padding: 5px">Logout</a>

                </form>
            </li>
        @else
            <li><a href="/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            
        @endif

    </ul>
  </div>
</nav>