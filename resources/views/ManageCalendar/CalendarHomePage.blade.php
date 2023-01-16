<x-app-layout>

    <!DOCTYPE html>

    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body class="dark-topbar">
        <!-- Page Content-->
        <div class="page-content">

            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-8">
                        <div class="page-title-box">
                            <div class="float-center">
                            </div>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="col-sm-12 text-center">
                        @if(Auth::user()->user_type != "Student" && Auth::user()->user_type != "Lecturer")
                        <a href="{{ route('calendar.AddCalendarPage') }}" class="btn btn-outline-dark px-3 float-center mt-0 mb-3"><i class="mdi mdi-plus-circle-outline mr-2"></i>CREATE EVENT</a>
                        @endif
                        <a href="{{ route('calendar.ListCalendarPage') }}" class="btn btn-outline-dark px-4 float-center mt-0 mb-3"><i class="mdi mdi-format-list-bulleted mr-2"></i> LIST EVENT</a>

                    </div>
                </div>

                <!-- <div class="row">                         -->
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body center">
                                <div id='calendar1'>
                                </div>
                                <div style='clear:both'></div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <!-- </div>End row  -->

                </div><!-- container -->

            </div>
            <!-- end page content -->


        </div>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar1');

                var calendar = new FullCalendar.Calendar(calendarEl, {
                    plugins: ['interaction', 'dayGrid', 'timeGrid'],
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay'
                    },

                    // navLinks: true, // can click day/week names to navigate views
                    // selectable: true,
                    // selectMirror: true,
                    select: function(arg) {
                        var title = prompt('Event Title:');
                        if (title) {
                            calendar.addEvent({
                                title: title,
                                start: arg.start,

                            })
                        }
                        calendar.unselect()
                    },
                    editable: true,
                    eventLimit: true, // allow "more" link when too many events
                    events: [
                        <?php
                        foreach ($calendar as $calendarpost) {
                            echo "{
                title: '" . $calendarpost->title . "',
                start: '" . $calendarpost->date . "',
              },";
                        }
                        ?>
                    ],

                });

                calendar.render();
            });
        </script>


    </body>

    </html>
</x-app-layout>