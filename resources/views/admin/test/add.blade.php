@extends('admin.layout.master')
@section('title')
    Test management
@endsection
@section('content')
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN THEME PANEL -->
            <div class="theme-panel hidden-xs hidden-sm">
                <div class="toggler"></div>
                <div class="toggler-close"></div>
                <div class="theme-options">
                    <div class="theme-option theme-colors clearfix">
                        <span> THEME COLOR </span>
                        <ul>
                            <li class="color-default current tooltips" data-style="default" data-container="body"
                                data-original-title="Default"></li>
                            <li class="color-darkblue tooltips" data-style="darkblue" data-container="body"
                                data-original-title="Dark Blue"></li>
                            <li class="color-blue tooltips" data-style="blue" data-container="body"
                                data-original-title="Blue"></li>
                            <li class="color-grey tooltips" data-style="grey" data-container="body"
                                data-original-title="Grey"></li>
                            <li class="color-light tooltips" data-style="light" data-container="body"
                                data-original-title="Light"></li>
                            <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true"
                                data-original-title="Light 2"></li>
                        </ul>
                    </div>
                    <div class="theme-option">
                        <span> Layout </span>
                        <select class="layout-option form-control input-sm">
                            <option value="fluid" selected="selected">Fluid</option>
                            <option value="boxed">Boxed</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Header </span>
                        <select class="page-header-option form-control input-sm">
                            <option value="fixed" selected="selected">Fixed</option>
                            <option value="default">Default</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Top Menu Dropdown</span>
                        <select class="page-header-top-dropdown-style-option form-control input-sm">
                            <option value="light" selected="selected">Light</option>
                            <option value="dark">Dark</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Sidebar Mode</span>
                        <select class="sidebar-option form-control input-sm">
                            <option value="fixed">Fixed</option>
                            <option value="default" selected="selected">Default</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Sidebar Menu </span>
                        <select class="sidebar-menu-option form-control input-sm">
                            <option value="accordion" selected="selected">Accordion</option>
                            <option value="hover">Hover</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Sidebar Style </span>
                        <select class="sidebar-style-option form-control input-sm">
                            <option value="default" selected="selected">Default</option>
                            <option value="light">Light</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Sidebar Position </span>
                        <select class="sidebar-pos-option form-control input-sm">
                            <option value="left" selected="selected">Left</option>
                            <option value="right">Right</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Footer </span>
                        <select class="page-footer-option form-control input-sm">
                            <option value="fixed">Fixed</option>
                            <option value="default" selected="selected">Default</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- END THEME PANEL -->
            <!-- BEGIN PAGE BAR -->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="index.html">Dashboard</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <a href="#">Test</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Add test</span>
                    </li>
                </ul>
                <div class="page-toolbar">
                    <div class="btn-group pull-right">
                        <button type="button" class="btn green btn-sm btn-outline dropdown-toggle"
                                data-toggle="dropdown"> Actions
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <a href="#">
                                    <i class="icon-bell"></i> Action</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-shield"></i> Another action</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-user"></i> Something else here</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <i class="icon-bag"></i> Separated link</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h2 class="page-title">Add test
            </h2>
            <form class="" action="" method="POST" role="form" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="row">

                    <div class="col-md-offset-3 col-md-6">
                        <div class="form-body">
                            <div class="form-group">
                                <label>Test name</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Type test</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Time</label>
                                <div class="input-group">
                                    <input type="text" class="form-control timepicker timepicker-24">
                                    <span class="input-group-btn">
                                        <button class="btn default" type="button">
                                            <i class="fa fa-clock-o"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea cols="80" id="editor1" rows="10">
                                </textarea>
                            </div>
                        </div>
                        <!-- END INFO LEFT -->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center" style="margin-top:30px;">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-lg fa-fw x fa fa-floppy-o"></i>Save
                                </button>
                                <button type="button" class="btn btn-primary">
                                    <i class="fa fa-lg fa-fw x fa fa-refresh"></i>Refresh
                                </button>
                                <button type="button" class="btn btn-default">
                                    <i class="fa fa-lg fa-fw x fa fa-times"></i>Back
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <!-- END CONTENT -->
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
@endsection

@section('script')
    <script src="{!!url('ckeditor/ckeditor.js')!!}"></script>
    <script>
        CKEDITOR.replace('editor1');
    </script>
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="assets/global/plugins/moment.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/clockface/js/clockface.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
@endsection