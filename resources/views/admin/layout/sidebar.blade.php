<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- END SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false"
            data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item start active open">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-users"></i>
                    <span class="title">User management</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start active open" >
                        <a href="{{asset('/user/index')}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">List user</span>
                            <span class="badge badge-success">1</span>
                        </a>
                    </li>

                    <li class="nav-item start">
                        <a href="{{asset('/user/add')}}" class="nav-link ">
                            <i class="fa fa-plus-circle"></i>
                            <span class="title">Add user</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item start active open">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-tasks"></i>
                    <span class="title">Test management</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start active open" >
                        <a href="{{asset('/test')}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">List test</span>
                            <span class="badge badge-success">1</span>
                        </a>
                    </li>

                    <li class="nav-item start">
                        <a href="{{asset('/test/add')}}" class="nav-link ">
                            <i class="fa fa-plus-circle"></i>
                            <span class="title">Add test</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item start active open">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-question-circle"></i>
                    <span class="title">Question management</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start active open" >
                        <a href="{{asset('/user/index')}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">List question</span>
                            <span class="badge badge-success">1</span>
                        </a>
                    </li>

                    <li class="nav-item start">
                        <a href="{{asset('/user/add')}}" class="nav-link ">
                            <i class="fa fa-plus-circle"></i>
                            <span class="title">Add question</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->