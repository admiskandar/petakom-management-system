<x-app-layout>
<body class="dark-topbar">
        <div class="page-content">

            <!-- Page-Title -->
            <div class="row">
                        <div class="col-sm-12">
                                <div class="page-title-box">
                                    <div class="float-right">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('activity.ActivityInterface') }}">Calendar</a></li>
                                    <li class="breadcrumb-item active">Updated Activity</li>
                                </ol>
                                    </div>
                                <h4 class="page-title">MANAGE PETAKOM ACTIVITIES</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="mt-0 header-title">UPDATE PETAKOM ACTIVITIES</h4>
                            <form action="{{ route ('updateactivity', $activityPost->id)}}" id="activityUpdate" method="post">
                                @csrf
                                @method('post')
                                <div class="row">
                                    <div class="col-lg-12">

                                    @if(session()->has('message'))
                                        <div class="alert alert-success">
                                            {{ session()->get('message') }}
                                        </div>
                                    @endif

                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            <div class="form-group row">
                                            <label for="activity" class="col-sm-2 col-form-label text-right">Activity Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="activity_name" value="{{$activityPost->activity_name}}" id="activity_name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="date" class="col-sm-2 col-form-label text-right">Date</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="date" name="activity_date" value="{{$activityPost->activity_date}}" id="activity_date">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="details" class="col-sm-2 col-form-label text-right">Activity Details</label>
                                            <div class="col-sm-10">
                                                <input class="form-control"  type="text" name="activity_notes" value="{{$activityPost->activity_notes}}" id="activity_notes">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="venue" class="col-sm-2 col-form-label text-right">Venue</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="activity_venue" value="{{$activityPost->activity_venue}}" id="activity_venue">
                                            </div>
                                        </div>
                                        
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12 text-right">
                                        <button type="submit" class="btn btn-gradient-primary px-5 py-2" id="activityUpdate">UPDATE</button>
                                    </div>
                                </div>
                            </form>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->
        </div>
    </body>
</x-app-layout>