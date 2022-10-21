<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="http:/template/frontend/images/logo.png" type="image/x-icon">
    <title>Sistem Informasi Simkatmawa</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet"
        href="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">

    <link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('adminlte/plugins/jqvmap/jqvmap.min.css')}}">

    <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css?v=3.2.0')}}">

    <link rel="stylesheet" href="{{asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

    <link rel="stylesheet" href="{{asset('adminlte/plugins/daterangepicker/daterangepicker.css')}}">

    <link rel="stylesheet" href="{{asset('adminlte/plugins/summernote/summernote-bs4.min.css')}}">

    <script nonce="170010a6-f658-4982-a613-c1d11b97fff7">
    (function(w, d) {
        ! function(a, e, t, r) {
            a.zarazData = a.zarazData || {};
            a.zarazData.executed = [];
            a.zaraz = {
                deferred: []
            };
            a.zaraz.q = [];
            a.zaraz._f = function(e) {
                return function() {
                    var t = Array.prototype.slice.call(arguments);
                    a.zaraz.q.push({
                        m: e,
                        a: t
                    })
                }
            };
            for (const e of ["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e);
            a.zaraz.init = () => {
                var t = e.getElementsByTagName(r)[0],
                    z = e.createElement(r),
                    n = e.getElementsByTagName("title")[0];
                n && (a.zarazData.t = e.getElementsByTagName("title")[0].text);
                a.zarazData.x = Math.random();
                a.zarazData.w = a.screen.width;
                a.zarazData.h = a.screen.height;
                a.zarazData.j = a.innerHeight;
                a.zarazData.e = a.innerWidth;
                a.zarazData.l = a.location.href;
                a.zarazData.r = e.referrer;
                a.zarazData.k = a.screen.colorDepth;
                a.zarazData.n = e.characterSet;
                a.zarazData.o = (new Date).getTimezoneOffset();
                a.zarazData.q = [];
                for (; a.zaraz.q.length;) {
                    const e = a.zaraz.q.shift();
                    a.zarazData.q.push(e)
                }
                z.defer = !0;
                for (const e of [localStorage, sessionStorage]) Object.keys(e || {}).filter((a => a.startsWith(
                    "zaraz"))).forEach((t => {
                    try {
                        a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t))
                    } catch {
                        a.zarazData["z_" + t.slice(7)] = e.getItem(t)
                    }
                }));
                z.referrerPolicy = "origin";
                z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData)));
                t.parentNode.insertBefore(z, t)
            };
            ["complete", "interactive"].includes(e.readyState) ? zaraz.init() : a.addEventListener(
                "DOMContentLoaded", zaraz.init)
        }(w, d, 0, "script");
    })(window, document);
    </script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

    </div>



    <aside class="control-sidebar control-sidebar-dark">

    </aside>

    <ul class="navbar-nav">
        <li class="nav-item">

        </li>
    </ul>

    <ul class="navbar-nav ml-auto">



        </li>

        <li class="nav-item dropdown">

            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                </a>
            </div>
        </li>
    </ul>




    <script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>

    <script src="{{asset('adminlte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

    <script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('adminlte/plugins/chart.js/Chart.min.js')}}"></script>

    <script src="{{asset('adminlte/plugins/sparklines/sparkline.js')}}"></script>

    <script src="{{asset('adminlte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>

    <script src="{{asset('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

    <script src="{{asset('adminlte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>

    <script src="{{asset('adminlte/plugins/moment/moment.min.js')}}"></script>

    <script src="{{asset('adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>

    <script src="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <script src="{{asset('adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>

    <script src="{{asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

    <script src="{{asset('adminlte/dist/js/adminlte.js?v=3.2.0')}}"></script>

    <script src="{{asset('adminlte/dist/js/demo.js')}}"></script>

    <script src="{{asset('adminlte/dist/js/pages/dashboard.js')}}"></script>
</body>

</html>