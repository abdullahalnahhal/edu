<!-- Left Sidebar  -->
<div class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- <li class="nav-devider"></li> -->
                <li class="nav-label">@lang('sidebar.Settings')</li>
                <li> 
                    <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-gears"></i><span class="hide-menu">@lang('sidebar.Settings') </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('teachers.levels')}}">@lang('sidebar.Levels') </a></li>
                        <li><a href="{{route('teachers.years')}}">@lang('sidebar.Years') </a></li>
                        <li><a href="{{route('teachers.terms')}}">@lang('sidebar.Terms') </a></li>
                        <li><a href="{{route('teachers.groups')}}">@lang('sidebar.Groups') </a></li>
                        <li><a href="{{route('teachers.subjects')}}">@lang('sidebar.Subjects') </a></li>
                        <li><a href="{{route('teachers.units')}}">@lang('sidebar.Units') </a></li>
                        <li><a href="{{route('teachers.question-types')}}">@lang('sidebar.Question Types') </a></li>
                    </ul>
                </li>
                <li class="nav-label">@lang('sidebar.Exams')</li>
                <li> 
                    <a class="has-arrow  " href="#" aria-expanded="false">
                        <i class="fa fa-comments"></i>
                        <span class="hide-menu">@lang('sidebar.Exams') </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('teachers.questions')}}">@lang('sidebar.Questions') </a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</div>
<!-- End Left Sidebar  -->