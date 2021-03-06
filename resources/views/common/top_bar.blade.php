<div class="page-header-inner  logo-new-style">
    <!-- BEGIN LOGO -->
    <div class="page-logo">



      <a href="{{route('admin.dashboard')}}">
        <img src="{{asset('admin/images/logo2.png')}}" alt="" class="img-thumbnail"></a>
    </div>
    <div class="menu-toggler sidebar-toggler">
       <a href="javascript:;" class="navbar-minimalize minimalize-styl-2  float-left "><i class="fa fa-bars"></i></a>
    </div>
    <div class="search-bar">
       <form class="sidebar-search  " >
          <div class="input-group">
             <input type="text" class="form-control" placeholder="Search...">
          </div>
       </form>
    </div>
    <!-- END LOGO -->
    <!-- BEGIN TOP NAVIGATION MENU -->
    @auth
        <p style="
        margin: 10px 21px 0px 0px;
        float: right;
        font-weight: 700;
        color: #fff;
        /* letter-spacing: -.4px; */
        /* text-align: center; */
        margin-bottom: 0px;
        /* margin: 4px 0px !important; */
    ">{{auth()->user()->name}}</p>
    @endauth


    <div class="top-menu">
       <ul class="nav navbar-nav float-right">


          <!-- BEGIN NOTIFICATION DROPDOWN -->
          <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
             <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
             <i class="icon-bell"></i>
             <span class="badge badge-default"> <span class="ring">
             </span><span class="ring-point">
             </span> </span>
             </a>
             <ul class="dropdown-menu animated flipInX">
                <li class="external">
                   <h3>
                      <span class="bold">12 pending</span> notifications
                   </h3>
                   <a href="page_user_profile_1.php">view all</a>
                </li>
                <li>
                   <ul class="dropdown-menu-list scroller" data-handle-color="#637283">
                      <li>
                         <a href="javascript:;">
                         <span class="time">just now</span>
                         <span class="details">
                         <span class="label label-sm label-icon label-success">
                         <i class="fa fa-plus"></i>
                         </span> New user registered. </span>
                         </a>
                      </li>
                      <li>
                         <a href="javascript:;">
                         <span class="time">3 mins</span>
                         <span class="details">
                         <span class="label label-sm label-icon label-danger">
                         <i class="fa fa-bolt"></i>
                         </span> Server #12 overloaded. </span>
                         </a>
                      </li>
                      <li>
                         <a href="javascript:;">
                         <span class="time">10 mins</span>
                         <span class="details">
                         <span class="label label-sm label-icon label-warning">
                         <i class="fa fa-bell-o"></i>
                         </span> Server #2 not responding. </span>
                         </a>
                      </li>
                      <li>
                         <a href="javascript:;">
                         <span class="time">14 hrs</span>
                         <span class="details">
                         <span class="label label-sm label-icon label-info">
                         <i class="fa fa-bullhorn"></i>
                         </span> Application error. </span>
                         </a>
                      </li>
                      <li>
                         <a href="javascript:;">
                         <span class="time">2 days</span>
                         <span class="details">
                         <span class="label label-sm label-icon label-danger">
                         <i class="fa fa-bolt"></i>
                         </span> Database overloaded 68%. </span>
                         </a>
                      </li>
                      <li>
                         <a href="javascript:;">
                         <span class="time">3 days</span>
                         <span class="details">
                         <span class="label label-sm label-icon label-danger">
                         <i class="fa fa-bolt"></i>
                         </span> A user IP blocked. </span>
                         </a>
                      </li>
                      <li>
                         <a href="javascript:;">
                         <span class="time">4 days</span>
                         <span class="details">
                         <span class="label label-sm label-icon label-warning">
                         <i class="fa fa-bell-o"></i>
                         </span> Storage Server #4 not responding dfdfdfd. </span>
                         </a>
                      </li>
                      <li>
                         <a href="javascript:;">
                         <span class="time">5 days</span>
                         <span class="details">
                         <span class="label label-sm label-icon label-info">
                         <i class="fa fa-bullhorn"></i>
                         </span> System Error. </span>
                         </a>
                      </li>
                      <li>
                         <a href="javascript:;">
                         <span class="time">9 days</span>
                         <span class="details">
                         <span class="label label-sm label-icon label-danger">
                         <i class="fa fa-bolt"></i>
                         </span> Storage server failed. </span>
                         </a>
                      </li>
                   </ul>
                </li>
             </ul>
          </li>
          <!-- END NOTIFICATION DROPDOWN -->
          <!-- BEGIN INBOX DROPDOWN -->
          <li class="dropdown dropdown-extended dropdown-notification" id="header_inbox_bar">
             <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
             <i class="icon-envelope-open"></i>
             <span class="badge badge-default"> <span class="ring">
             </span><span class="ring-point">
             </span> </span>
             </a>
             <ul class="dropdown-menu animated flipInX">
                <li class="external">
                   <h3>
                      <span class="bold">12 New Email</span>
                   </h3>
                   <a href="page_user_profile_1.php">view all</a>
                </li>
                <li>
                   <ul class="dropdown-menu-list scroller"  data-handle-color="#637283">
                      <li>
                         <a href="javascript:;">
                         <span class="time">just now</span>
                         <span class="details">
                         <span class="label label-sm label-icon label-success">
                         <i class="fa fa-plus"></i>
                         </span> 12 New Inbox. </span>
                         </a>
                      </li>
                      <li>
                         <a href="javascript:;">
                         <span class="time">3 mins</span>
                         <span class="details">
                         <span class="label label-sm label-icon label-danger">
                         <i class="fa fa-bolt"></i>
                         </span> 10 Spam. </span>
                         </a>
                      </li>
                      <li>
                         <a href="javascript:;">
                         <span class="time">10 mins</span>
                         <span class="details">
                         <span class="label label-sm label-icon label-warning">
                         <i class="fa fa-bell-o"></i>
                         </span> 2 Trash. </span>
                         </a>
                      </li>
                      <li>
                         <a href="javascript:;">
                         <span class="time">14 hrs</span>
                         <span class="details">
                         <span class="label label-sm label-icon label-info">
                         <i class="fa fa-bullhorn"></i>
                         </span> 5 Social. </span>
                         </a>
                      </li>
                   </ul>
                </li>
             </ul>
          </li>
          <!-- END INBOX DROPDOWN -->
          <!-- BEGIN TODO DROPDOWN -->
          <li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
             <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
             <i class="icon-calendar"></i>
             <span class="badge badge-default"> <span class="ring">
             </span><span class="ring-point">
             </span> </span>
             </a>
             <ul class="dropdown-menu extended tasks animated flipInX">
                <li class="external">
                   <h3>You have
                      <span class="bold">12 pending</span> tasks
                   </h3>
                   <a href="app_todo.php">view all</a>
                </li>
                <li>
                   <ul class="dropdown-menu-list scroller" data-handle-color="#637283" data-initialized="1">
                      <li>
                         <a href="javascript:;">
                         <span class="task">
                         <span class="desc">New release v1.2 </span>
                         <span class="percent">30%</span>
                         </span>
                         <span class="progress">
                         <span style="width: 40%;" class="progress-bar progress-bar-success" >
                         <span class="sr-only">40% Complete</span>
                         </span>
                         </span>
                         </a>
                      </li>
                      <li>
                         <a href="javascript:;">
                         <span class="task">
                         <span class="desc">Application deployment</span>
                         <span class="percent">65%</span>
                         </span>
                         <span class="progress">
                         <span style="width: 65%;" class="progress-bar progress-bar-danger">
                         <span class="sr-only">65% Complete</span>
                         </span>
                         </span>
                         </a>
                      </li>
                      <li>
                         <a href="javascript:;">
                         <span class="task">
                         <span class="desc">Mobile app release</span>
                         <span class="percent">98%</span>
                         </span>
                         <span class="progress">
                         <span style="width: 98%;" class="progress-bar progress-bar-success" >
                         <span class="sr-only">98% Complete</span>
                         </span>
                         </span>
                         </a>
                      </li>
                      <li>
                         <a href="javascript:;">
                         <span class="task">
                         <span class="desc">Database migration</span>
                         <span class="percent">10%</span>
                         </span>
                         <span class="progress">
                         <span style="width: 10%;" class="progress-bar progress-bar-warning">
                         <span class="sr-only">10% Complete</span>
                         </span>
                         </span>
                         </a>
                      </li>
                      <li>
                         <a href="javascript:;">
                         <span class="task">
                         <span class="desc">Web server upgrade</span>
                         <span class="percent">58%</span>
                         </span>
                         <span class="progress">
                         <span style="width: 58%;" class="progress-bar progress-bar-info" >
                         <span class="sr-only">58% Complete</span>
                         </span>
                         </span>
                         </a>
                      </li>
                      <li>
                         <a href="javascript:;">
                         <span class="task">
                         <span class="desc">Mobile development</span>
                         <span class="percent">85%</span>
                         </span>
                         <span class="progress">
                         <span style="width: 85%;" class="progress-bar progress-bar-success" >
                         <span class="sr-only">85% Complete</span>
                         </span>
                         </span>
                         </a>
                      </li>
                      <li>
                         <a href="javascript:;">
                         <span class="task">
                         <span class="desc">New UI release</span>
                         <span class="percent">38%</span>
                         </span>
                         <span class="progress progress-striped">
                         <span style="width: 38%;" class="progress-bar progress-bar-important" >
                         <span class="sr-only">38% Complete</span>
                         </span>
                         </span>
                         </a>
                      </li>
                   </ul>
                </li>
             </ul>
          </li>
          <!-- END TODO DROPDOWN -->
          <!-- BEGIN USER LOGIN DROPDOWN -->
          <li class="dropdown dropdown-user">
             <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false">
             <img alt="" class="rounded-circle" src="{{asset('admin/images/avtar-1.jpg')}}">
             </a>
             <div class="dropdown-menu dropdown-menu-default">
                <a class="dropdown-item" href="#"><i class="icon-user"></i> My Profile </a>
                <a class="dropdown-item" href="#"><i class="icon-calendar"></i> My Calendar </a>
                <a class="dropdown-item" href="#"><i class="icon-envelope-open"></i> My Inbox
                <span class="badge badge-danger"> 3 </span>
                </a>
                <a class="dropdown-item" href="#"><i class="icon-rocket"></i> My Tasks
                <span class="badge badge-success"> 7 </span>
                </a>
                <a class="dropdown-item" href="#">
                <i class="icon-lock"></i> Lock Screen </a>
                <a class="dropdown-item" href="#">
                <i class="icon-key"></i> Log Out </a>
             </div>
          </li>
          <!-- END USER LOGIN DROPDOWN -->
          <!-- BEGIN QUICK SIDEBAR TOGGLER -->
          <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
          <li class="dropdown dropdown-quick-sidebar-toggler">
             <a href="javascript:;" class="dropdown-toggle">
             <i class="icon-logout"></i>
             </a>
          </li>
          <!-- END QUICK SIDEBAR TOGGLER -->
       </ul>
    </div>
    <!-- END TOP NAVIGATION MENU -->
 </div>
