<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>


    <!-- Bootstrap -->
    <link href="{{asset("assets/css/bootstrap.css")}}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <link href="{{asset("assets/css/demo1/pages/login/login-6.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/general/sweetalert2/dist/sweetalert2.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/vendors/custom/vendors/line-awesome/css/line-awesome.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/css/demo1/style.bundle.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/media/logos/favicon.ico")}}" rel="shortcut icon" />

    @yield("customCss")

</head>

<body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
    <!-- page content -->
    @yield("content")
    <!-- /page content -->

    @yield("customJs")
</body>
<script>
    var KTAppOptions = {"colors":{"state":{"brand":"#2c77f4","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
</script>
<script src="{{asset("assets/vendors/general/jquery/dist/jquery.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/popper.js/dist/umd/popper.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/bootstrap/dist/js/bootstrap.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/js-cookie/src/js.cookie.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/jquery-form/dist/jquery.form.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/js/demo1/scripts.bundle.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/js/demo1/pages/login/login-general.js")}}" type="text/javascript"></script>
</html>
