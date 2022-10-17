<!-- JAVASCRIPT -->
<script src="{{ asset('/') }}assets/libs/jquery/jquery.min.js"></script>
<script src="{{ asset('/') }}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/') }}assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{ asset('/') }}assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{ asset('/') }}assets/libs/node-waves/waves.min.js"></script>

<!-- apexcharts -->
<script src="{{ asset('/') }}assets/libs/apexcharts/apexcharts.min.js"></script>

<script src="{{ asset('/') }}assets/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="{{ asset('/') }}assets/js/app.js"></script>
{{--toastr js--}}
<script src="{{ asset('/') }}assets/js/toastr.min.js"></script>

<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor' );
</script>

@if(Session::has('message'))
    <script>
        toastr.success("{{ Session::get('message') }}");
    </script>
@endif
