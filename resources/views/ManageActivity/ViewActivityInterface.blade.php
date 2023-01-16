<x-app-layout>
<!DOCTYPE html>
    <html lang="en">

    <body class="dark-topbar">
        <div class="page-content">
            <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    
                                </div>
                                <h4 class="page-title">MANAGE PETAKOM ACTIVITIES</h4>
                                </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
            </div>

        <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
    
                                    <h4 class="mt-0 header-title">LIST OF PETAKOM ACTIVITIES</h4>

    
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Activity Name</th>
                                            <th>Activity Date</th>
                                            <th>Activity Details</th>
                                            <th>Venue</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>    

                                        <tbody>

                                        @foreach($post as $activityPost)
                                        <tr>
                                            <td>{{$activityPost->activity_name}}</td>
                                            <td>{{$activityPost->activity_date}}</td>
                                            <td>{{$activityPost->activity_notes}}</td>
                                            <td>{{$activityPost->activity_venue}}</td>
                                            <td>
                                                <a href="{{ route('editActivity' , $activityPost->id) }}"><i class="far fa-edit text-info mr-1"></i></a>
                                                <a href="{{ route('destroyActivity' , $activityPost->id )  }}"><i class="far fa-trash-alt text-danger"></i></a>
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