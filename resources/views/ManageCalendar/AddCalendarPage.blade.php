<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Add Activity</title>
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
                                    <li class="breadcrumb-item active">Add Activity</li>
                                </ol>
                            </div>
                            <h4 class="page-title">ADD ACTIVITY / EVENT</h4>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div>
            </div>
            <!-- end page title end crumb-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('storeC') }}" method="POST" id="formNew">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="example-datetime-local-input" class="col-sm-2 col-form-label text-right">Date and time:</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="date" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label text-right">Category:</label>
                                            <div class="col-sm-10">
                                                <select name="category" class="form-control">
                                                    <option>--- Please select a category ---</option>
                                                    <option value="1">Sports</option>
                                                    <option value="2">Meeting</option>
                                                    <option value="3">Competition</option>
                                                    <option value="4">Event</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-email-input" class="col-sm-2 col-form-label text-right">Title:</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="title" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-tel-input" class="col-sm-2 col-form-label text-right">Message:</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="message" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-password-input" class="col-sm-2 col-form-label text-right">Url Reference:</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="url" type="url" id="example-url-input">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12 text-right">
                                        <button type="reset" class="btn btn-dark px-5 py-2" id="formNew" onclick="return confirm('Are you sure to reset the data?')">RESET</button>
                                        <button type="submit" class="btn btn-dark px-5 py-2" id="formNew" onclick="return confirm('Are you sure to add the data?')">SUBMIT</button>
                                    </div>
                                </div>
                            </form>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->

        </div>
    </body>

    </html>
</x-app-layout>