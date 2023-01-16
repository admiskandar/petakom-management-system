<x-app-layout>

<!DOCTYPE html>
<html lang="en">
    <head>
       
    </head>

    <body class="dark-topbar">
            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('activity.ActivityInterface') }}">Calendar</a></li>
                                    <li class="breadcrumb-item active">Add Activity</li>
                                </ol>
                                </div>
                                <h4 class="page-title">MANAGE PETAKOM ACTIVITIES</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- Page-Title -->
              
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">ADD PETAKOM ACTIVITIES</h4>
                                   <form action="{{route('store')}}" method="POST" id="activityNew" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            <div class="form-group row">
                                                <label for="activity" class="col-sm-2 col-form-label text-right">Activity</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" id="activity_name" name="activity_name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="date" class="col-sm-2 col-form-label text-right">Date</label>
                                                <div class="col-sm-10">
                                                <input type="date" class="form-control" id="activity_date" name="activity_date">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="details" class="col-sm-2 col-form-label text-right">Details</label>
                                                <div class="col-sm-10">
                                                <textarea class="form-control" rows="5" id="activity_notes" name="activity_notes"></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                            <label for="activityVenue" class="col-sm-2 col-form-label text-right">Venue</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" id="activity_venue" name="activity_venue">
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-gradient-primary" id="activityNew">Submit</button>
                                    </div>
                                </form>                                                                      
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

       
        <!-- jQuery  -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/metisMenu.min.js"></script>
        <script src="../assets/js/waves.min.js"></script>
        <script src="../assets/js/jquery.slimscroll.min.js"></script>

        <!-- App js -->
        <script src="../assets/js/app.js"></script>

    </body>
</html>
</x-app-layout>