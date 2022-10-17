<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>SSMS @yield('title')</title>
    @include('admin.includes.assets.css')
</head>

<body data-sidebar="dark">

<!-- Begin page -->
<div id="layout-wrapper">

    @include('admin.includes.header')
    @include('admin.includes.menu')


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                 @yield('body')
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Skote.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-right d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

@include('admin.includes.assets.script')
</body>
</html>
