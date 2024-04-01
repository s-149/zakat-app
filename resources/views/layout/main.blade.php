<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>APPS ZAKAT | {{$title}}</title>

    <!-- Standard -->
    <link rel="shortcut icon" href="">

    <!-- form -->
    <link href="/assets/css/lib/select2/select2.min.css" rel="stylesheet">

    <!-- data table -->
    <link href="/assets/css/lib/data-table/buttons.bootstrap.min.css" rel="stylesheet" />

    <!-- Styles -->
    <link href="/assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="/assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="/assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="/assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="/assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="/assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="/assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/lib/helper.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
</head>

<body>

<!-- memanggil navbar -->
    @include('partial.navbar')

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{'/'}}">Dashboard</a></li>
                                    <li class="breadcrumb-item active">{{$title}}</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- menyisipkan konten -->
                @yield('container')


            </div>
        </div>
    </div>

    <!-- data table -->
    <script src="/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="/assets/js/lib/data-table/buttons.flash.min.js"></script>
    <script src="/assets/js/lib/data-table/jszip.min.js"></script>
    <script src="/assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="/assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="/assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="/assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="/assets/js/lib/data-table/datatables-init.js"></script>

    <!-- jquery vendor -->
    <script src="/assets/js/lib/jquery.min.js"></script>
    <script src="/assets/js/lib/jquery.nanoscroller.min.js"></script>

    <!-- nano scroller -->
    <script src="/assets/js/lib/menubar/sidebar.js"></script>
    <script src="/assets/js/lib/preloader/pace.min.js"></script>

    <!-- sidebar -->
    <script src="/assets/js/lib/bootstrap.min.js"></script>
    <script src="/assets/js/scripts.js"></script>

    <!-- bootstrap -->
    <script src="/assets/js/lib/calendar-2/moment.latest.min.js"></script>
    <script src="/assets/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="/assets/js/lib/calendar-2/pignose.init.js"></script>
    <script src="/assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="/assets/js/lib/weather/weather-init.js"></script>
    <script src="/assets/js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="/assets/js/lib/circle-progress/circle-progress-init.js"></script>
    <script src="/assets/js/lib/chartist/chartist.min.js"></script>
    <script src="/assets/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="/assets/js/lib/sparklinechart/sparkline.init.js"></script>
    <script src="/assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="/assets/js/lib/owl-carousel/owl.carousel-init.js"></script>

    <!-- scripit init-->
    <script src="/assets/js/dashboard2.js"></script>

</body>

</html>
