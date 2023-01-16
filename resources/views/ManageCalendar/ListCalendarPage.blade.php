<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Update Activity</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body class="dark-topbar">
        <div class="page-content">
            
        <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-right">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('calendar.CalendarHomePage') }}">Calendar</a></li>
                                    <li class="breadcrumb-item active">List of Event / Activity</li>
                                </ol>
                            </div>
                            <h4 class="page-title">LIST OF EVENT / ACTIVITY</h4>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div><!-- end row-->
            </div><!-- end page title end crumb-->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Message</th>
                                        <th>Url</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach($post as $calendarpost)
                                    <tr>
                                        <td>{{$calendarpost->date}}</td>
                                        <td>{{$calendarpost->category}}</td>
                                        <td>{{$calendarpost->title}}</td>
                                        <td>{{$calendarpost->message}}</td>
                                        <td>{{$calendarpost->url}}</td>
                                        <td>
                                            <a href="{{ route('showCalendar' , $calendarpost->id) }}"><i class="far fa-edit text-info mr-1"></i></a>
                                            <a href="{{ route('destroyCalendar' , $calendarpost->id )  }}" onclick="return confirm('Are you sure want to delete?')"><i class="far fa-trash-alt text-danger"></i></a>
                                        </td>
                                    </tr>


                                    @endforeach

                                </tbody>

                            </table>
                        </div>
                    </div>

                </div> <!-- end col -->
            </div> <!-- end row -->




        </div>
    </body>




    </html>
</x-app-layout>