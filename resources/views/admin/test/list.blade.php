@extends('admin.layout.master')
@section('title')
    Quản lý User
@endsection
@section('content')
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN THEME PANEL -->

            <!-- END THEME PANEL -->
            <!-- BEGIN PAGE BAR -->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="index.html">Dashboard</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <a href="#">User management</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>List user</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h1 class="page-title"> List user
            </h1>
            <div class="alert alert-success" id="report" style="display: none">Đã xóa phòng khám thành công.</div>
            <div class="alert alert-success" id="reportAll" style="display: none">Các phòng khám được chọn đã xóa thành
                công.
            </div>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->

            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-dark">
                                <i class="icon-settings font-dark"></i>
                                <span class="caption-subject bold uppercase"> List</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-toolbar">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="btn-group">
                                            <a href="">
                                                <button id="sample_editable_1_new" class="btn sbold green"> Add
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="btn-group pull-right">
                                            <button class="btn green  btn-outline dropdown-toggle"
                                                    data-toggle="dropdown">Tools
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-print"></i> In </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-file-pdf-o"></i> Lưu thành PDF </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-file-excel-o"></i> Xuất sang Excel </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover table-checkable order-column"
                                       id="sample_1">
                                    <thead>
                                    <tr>
                                        <th>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="group-checkable"
                                                       data-set="#sample_1 .checkboxes"/>
                                                <span></span>
                                            </label>
                                        </th>
                                        <th> STT</th>
                                        <th> Test name</th>
                                        <th> Author</th>
                                        <th> Created at</th>
                                        <th> Updated at</th>
                                        <th> Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>


                                    <tr class="odd gradeX" id="tr">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value=""/>
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> 1</td>
                                        <td>Test A</td>
                                        <td>Admin</td>
                                        <td>20-05-2018</td>
                                        <td>20-05-2018</td>
                                        <td>
                                            <div>
                                                <a href=""
                                                   class="btn btn-xs green dropdown-toggle"> <i class="fa fa-edit"></i></a>
                                                <a href="" class="btn btn-xs red dropdown-toggle delete"
                                                   data-id=""> <i class="fa fa-trash-o"></i></a>
                                            </div>
                                        </td>

                                    </tr>


                                    </tbody>
                                </table>
                            </div>

                            <button type="button" id="deleteAll" class="btn btn-danger"><span
                                        class="glyphicon glyphicon-trash"> </span> Delete all
                            </button>
                            <!-- $allClinics->links() -->

                            <!-- làm modal delete -->
                            <div class="modal fade" id="modal-1" style="margin-top: 12em ">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button>
                                            <h4 class="modal-title">Xóa phòng khám</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Bạn muốn xóa phòng khám?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Không
                                            </button>
                                            <button type="button" class="btn btn-primary" id="yesBtn">Có</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            <!-- end modal delete -->

                            <!-- làm modal delete all row-->
                            <div class="modal fade" id="modal-all" style="margin-top: 12em ">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button>
                                            <h4 class="modal-title">Xóa các phòng khám đã chọn?</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Bạn muốn xóa các phòng khám đã chọn?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Không
                                            </button>
                                            <button type="button" class="btn btn-primary" id="yesBtnAll">Có</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            <!-- end modal delete all row-->
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>

        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
@endsection