<!DOCTYPE html>
<html class="loading semi-dark-layout" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="semi-dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    @include('management.uk_management.partials._head')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    {{-- SweetAlert 2 --}}
    @include('sweetalert::alert')
    {{-- END:SweetAlert 2 --}}


    <!-- BEGIN: Header-->
        <!-- Nav -->
        <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
            @include('management.uk_management.partials._header-navbar')
        </nav>
        <!-- Nav -->
    <!-- END: Header--> --}}


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        @include('management.uk_management.partials._sidebar')
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        @yield('content')
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        @include('management.uk_management.partials._footer')
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    @include('management.uk_management.partials._footer-script')
    <!-- END: Vendor JS-->



</body>
<!-- END: Body-->

</html>
