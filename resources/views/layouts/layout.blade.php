<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield("CustomMeta")
    <title>{{ config('app.name', 'Write Up') }}</title>
    <title>@yield("title","Dashboard") </title>


    <!-- Bootstrap -->
    <link href="{{asset("assets/css/bootstrap.css")}}" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <link href="{{asset("assets/vendors/custom/fullcalendar/fullcalendar.bundle.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/general/tether/dist/css/tether.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/general/select2/dist/css/select2.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/general/nouislider/distribute/nouislider.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/general/dropzone/dist/dropzone.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/general/quill/dist/quill.snow.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/general/@yaireo/tagify/dist/tagify.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/general/summernote/dist/summernote.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/general/animate.css/animate.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/general/toastr/build/toastr.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/general/dual-listbox/dist/dual-listbox.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/general/morris.js/morris.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/general/sweetalert2/dist/sweetalert2.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/general/socicon/css/socicon.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/custom/vendors/line-awesome/css/line-awesome.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/custom/vendors/flaticon/flaticon.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/custom/vendors/flaticon2/flaticon.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/css/demo1/style.bundle.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/css/demo1/skins/header/base/light.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/css/demo1/skins/header/menu/light.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/css/demo1/skins/brand/light.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/css/demo1/skins/aside/dark.css")}}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{"assets/media/logos/favicon.ico"}}" />

    @yield("CustomCss")
</head>

<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
    <div class="kt-header-mobile__logo">
        <a href="demo1/index.html">
            <img alt="Logo" src="{{asset('assets/media/logos/logo-light.png')}}" />
        </a>
    </div>
    <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>


        <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
    </div>
</div>
<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <!-- begin:: Aside -->
        @yield('left_sidebar')
        <!-- end:: Aside -->
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
            <!-- begin:: Header -->
                @include('layouts.navigation.header')
            <!-- end:: Header -->

            <!-- begin:: Content -->
            <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

                @yield('sub_header')

                <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                @yield('contents')
                </div>
            </div>
            <!-- end:: Content -->

            <!-- begin:: Footer -->
                @include('layouts.navigation.footer')
            <!-- end:: Footer -->
        </div>
    </div>
</div>

<!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
    <i class="fa fa-arrow-up"></i>
</div>
<!-- end::Scrolltop -->

<!-- begin::Sticky Toolbar -->
<ul class="kt-sticky-toolbar" style="margin-top: 30px;">
    <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--success" id="kt_demo_panel_toggle" data-toggle="kt-tooltip" title="Check out more demos" data-placement="right">
        <a href="#" class=""><i class="flaticon2-drop"></i></a>
    </li>
    <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--brand" data-toggle="kt-tooltip" title="Layout Builder" data-placement="left">
        <a href="https://keenthemes.com/metronic/preview/demo1/builder.html" target="_blank"><i class="flaticon2-gear"></i></a>
    </li>
    <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--warning" data-toggle="kt-tooltip" title="Documentation" data-placement="left">
        <a href="https://keenthemes.com/metronic/?page=docs" target="_blank"><i class="flaticon2-telegram-logo"></i></a>
    </li>

    <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--danger" id="kt_sticky_toolbar_chat_toggler" data-toggle="kt-tooltip" title="Chat Example" data-placement="left">
        <a href="#" data-toggle="modal" data-target="#kt_chat_modal"><i class="flaticon2-chat-1"></i></a>
    </li>
</ul>
<!-- end::Sticky Toolbar -->
<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "dark": "#282a3c",
                "light": "#ffffff",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
        }
    };
</script>
<!-- end::Global Config -->
<!-- jQuery -->

<script src="{{asset("assets/vendors/general/jquery/dist/jquery.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/popper.js/dist/umd/popper.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/bootstrap/dist/js/bootstrap.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/js-cookie/src/js.cookie.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/moment/min/moment.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/sticky-js/dist/sticky.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/wnumb/wNumb.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/jquery-form/dist/jquery.form.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/block-ui/jquery.blockUI.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/custom/js/vendors/bootstrap-switch.init.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/select2/dist/js/select2.full.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/typeahead.js/dist/typeahead.bundle.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/handlebars/dist/handlebars.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/nouislider/distribute/nouislider.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/owl.carousel/dist/owl.carousel.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/autosize/dist/autosize.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/clipboard/dist/clipboard.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/dropzone/dist/dropzone.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/custom/js/vendors/dropzone.init.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/quill/dist/quill.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/@yaireo/tagify/dist/tagify.polyfills.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/@yaireo/tagify/dist/tagify.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/summernote/dist/summernote.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/markdown/lib/markdown.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/custom/js/vendors/bootstrap-markdown.init.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/custom/js/vendors/bootstrap-notify.init.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/jquery-validation/dist/jquery.validate.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/jquery-validation/dist/additional-methods.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/custom/js/vendors/jquery-validation.init.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/toastr/build/toastr.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/dual-listbox/dist/dual-listbox.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/raphael/raphael.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/morris.js/morris.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/chart.js/dist/Chart.bundle.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/waypoints/lib/jquery.waypoints.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/counterup/jquery.counterup.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/es6-promise-polyfill/promise.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/sweetalert2/dist/sweetalert2.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/custom/js/vendors/sweetalert2.init.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/jquery.repeater/src/lib.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/jquery.repeater/src/jquery.input.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/jquery.repeater/src/repeater.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/dompurify/dist/purify.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/js/demo1/scripts.bundle.js")}}" type="text/javascript"></script>
<!--begin::Page Vendors(used by this page) -->
<script src="{{asset("assets/vendors/custom/fullcalendar/fullcalendar.bundle.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/js/demo1/pages/dashboard.js")}}" type="text/javascript"></script>

@yield("CustomJs")

</body>
</html>
