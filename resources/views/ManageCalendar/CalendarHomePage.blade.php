<!DOCTYPE html>

<x-app-layout>
</x-app-layout>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Metrica - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!--calendar css-->
        <link href="{{asset('frontend') }}/calendar/core/main.css" rel="stylesheet" />
        <link href="{{asset('frontend') }}/calendar/daygrid/main.css" rel="stylesheet" />
        <link href="{{asset('frontend') }}/calendar/packages/bootstrap/main.css" rel="stylesheet" />
        <link href="{{asset('frontend') }}/calendar/timegrid/main.css" rel="stylesheet" />
        <link href="{{asset('frontend') }}/calendar//list/main.css" rel="stylesheet" />

        <!-- App css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />

    </head>

    <div>
        <a href="AddCalendarPage" class="btn btn-warning">CREATE</a>
    </div> 
    
    <body class="dark-topbar">

            <!-- Page Content-->
            <div class="page-content">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="page-title-box">
                                <div class="float-right">
                                    
                                </div>
                                <h4 class="page-title">Calendar</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->

                    <div class="row">                        
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

  

                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div id='calendar'></div>
                                    <div style='clear:both'></div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!-- End row --> 

                </div><!-- container -->

            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- jQuery  -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/metisMenu.min.js"></script>
        <script src="../assets/js/waves.min.js"></script>
        <script src="../assets/js/jquery.slimscroll.min.js"></script>

        <script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="../assets/plugins/moment/moment.js"></script>
        <script src="{{asset('frontend') }}/calendar/core/main.js"></script>
        <script src="{{asset('frontend') }}/calendar/daygrid/main.js"></script>
        <script src="{{asset('frontend') }}/calendar/timegrid/main.js"></script>
        <script src="{{asset('frontend') }}/calendar/interaction/main.js"></script>
        <script src="{{asset('frontend') }}/calendar/list/main.js"></script>
        <script src="{{asset('frontend') }}/calendar/jquery.calendar.js"></script>

        <!-- App js -->
        <script src="../assets/js/app.js"></script>

    </body>
</html>