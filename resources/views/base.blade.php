<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>lacaisse.ma | BackOffice</title>
    <link rel="stylesheet" href="{{ asset('/assets/css/vendors.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/assets/fonts/icomoon.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/assets/fonts/flag-icon-css/css/flag-icon.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/forms/icheck/icheck.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/sliders/slick/slick.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/forms/icheck/custom.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/charts/morris.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/extensions/unslider.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/assets/css/app.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/assets/css/components/weather-icons/climacons.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}"/>
</head>
<body data-open="hover" data-menu="horizontal-top-icon-menu" data-col="2-columns" class="horizontal-layout horizontal-top-icon-menu 2-columns ">

@include('partials.menu')

<div class="robust-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            @yield('content')
        </div>
    </div>
</div>



@include('partials.footer')

<!-- BEGIN VENDOR JS-->
<script src="{{ asset('/assets/js/vendors.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/js/plugins/ui/jquery.sticky.js') }}" type="text/javascript"></script>


<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<!-- END PAGE VENDOR JS-->
<!-- BEGIN ROBUST JS-->
<script src="{{ asset('/assets/js/app.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/js/plugins/tables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/js/plugins/tables/datatable/dataTables.bootstrap4.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/js/components/tables/datatables/datatable-advanced.js') }}" type="text/javascript"></script>
</body>

</html>
