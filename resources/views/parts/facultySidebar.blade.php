<div class="navbar-default sidebar " role="navigation" style="margin-top: 60px">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            
            <li>
                <a href="/"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Surveys</a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/survey">Existing Surveys</a>
                    </li>
                    <li>
                        <a href="/survey/create">Create New Survey</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        
            
            @if(Sentinel::getUser()->inRole('head'))
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Survey Committee</a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="/committee">Existing Committees</a>
                        </li>
                        <li>
                            <a href="/committee/create">Create New Committee</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            @elseif(Sentinel::getUser()->inRole('teacher'))
                <li>
                    <a href="surveycommittee"><i class="fa fa-bar-chart-o fa-fw"></i> Survey Commities</a>
              
                </li>
            @endif
            <li>
                <a href="/course"><i class="fa fa-table fa-fw"></i>Courses</a>
            </li>
            <li>
                <a href="forms.html"><i class="fa fa-edit fa-fw"></i>Survey Commities</a>
            </li>
            
            
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->