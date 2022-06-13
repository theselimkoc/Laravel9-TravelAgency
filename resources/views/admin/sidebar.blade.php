<!-- MENU SECTION -->
<div id="left">
    <div class="media user-media well-small">
        <a href="#" ></a>
        <br/>
        <div class="media-body">

            <ul class="list-unstyled user-info">
                <li>
                    <a href="/logoutuser" style="width: 10px;height: 12px;">Logout</a>
                    <a href="#" >{{Auth::user()->name}}</a>
                </li>

            </ul>
        </div>
        <br/>
    </div>
    <ul id="menu" class="collapse">
        <li class="panel">
            <a href="/admin">
                <i class="icon-dashboard"></i> Dashboard</a>
        </li>
        <li class="panel">
            <a href="/admin/category">
                <i class="icon-table"></i> Categories</a>
        </li>
        <li class="panel">
            <a href="/admin/package">
                <i class="icon-table"></i> Packages</a>
        </li>
        <li class="panel">
            <a href="/admin/comment">
                <i class="icon-comments"></i> Comments</a>
        </li>
        <li class="panel">
            <a href="{{route('admin.faq.index')}}">
                <i class="icon-question-sign"></i> FAQ</a>
        </li>
        <li class="panel">
            <a href="{{route('admin.message.index')}}">
                <i class="icon-envelope"></i> Messages</a>
        </li>
        <li class="panel">
            <a href="/admin/users">
                <i class="icon-user"></i> Users</a>
        </li>
        <li class="panel ">
            <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle"
               data-target="#component-nav">
                <i class="icon-folder-open text-blue-500"> </i> Reservations

                <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                &nbsp; <span class="label label-default"></span>&nbsp;
            </a>
            <ul class="collapse" id="component-nav">

                <li class=""><a href="button.html"><i class="icon-angle-right"></i> Accepted Reservations </a></li>
                <li class=""><a href="icon.html"><i class="icon-angle-right"></i> Waiting Reservations </a></li>
                <li class=""><a href="progress.html"><i class="icon-angle-right"></i> Denied Reservations </a></li>
                <li class=""><a href="tabs_panels.html"><i class="icon-angle-right"></i> Reservations </a></li>
                </li>
            </ul>
        <li class=""><a href="/admin/setting"><i class="icon-cogs"></i> Setting </a></li>
    </ul>
</div>
<!--END MENU SECTION -->
