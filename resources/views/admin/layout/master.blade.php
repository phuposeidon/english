@include('admin.layout.header')
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<div class="page-wrapper">
@include('admin.layout.navbar')
<!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <div class="page-container">
    @include('admin.layout.sidebar')
    <!-- BEGIN CONTENT -->
    @yield('content')
    <!-- END CONTENT -->

    </div>

    @include('admin.layout.footer')
</div>
@yield('script')

</body>
