<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- {{ __('Dashboard') }} -->
            Add Activity Proposal
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <!--begin::Tab-->
                            <div class="tab-pane show active px-7" id="kt_user_edit_tab_1" role="tabpanel">
                                <!--begin::Row-->
                                <div class="card-header">
                                    <h2 class="card-title">Program Information</h2>
                                </div>
                                <div class="card-content collpase show">
                                    <div class="card-body">
                                        <form class="form form-horizontal" action="{{route('report.store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="mdi mdi-emoticon">&nbsp;&nbsp;&nbsp;</i>Program Details</h4>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control">Program Name</label>
                                                            <div class="col-md-9 mx-auto">
                                                                <input type="text" class="form-control border-primary" placeholder="Program name" id="title" name="title">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control">Objective</label>
                                                            <div class="col-md-9 mx-auto">
                                                                <input type="text" class="form-control border-primary" placeholder="Objective of the program" name="objective" id="objective">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control">Organizer</label>
                                                            <div class="col-md-9 mx-auto">
                                                                <input type="text" class="form-control border-primary" placeholder="Organizer" name="organizer" id="organizer">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control">Location</label>
                                                            <div class="col-md-9 mx-auto">
                                                                <input type="text" class="form-control border-primary" placeholder="Program's Location" name="location" id="location">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control">Paticipation</label>
                                                            <div class="col-md-9 mx-auto">
                                                                <input class="form-control border-primary" type="number" placeholder="Number of participation" name="participation" id="participation">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h4 class="form-section"><i class="flaticon-email">&nbsp;&nbsp;&nbsp;</i>Time and Date Details</h4>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">Start Date</label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="date" class="form-control border-primary" placeholder="" id="start_date" name="start_date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">End Date</label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="date" class="form-control border-primary" placeholder="" name="end_date" id="end_date">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">Start Time</label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="time" class="form-control border-primary" placeholder="" id="start_time" name="start_time">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">End Date</label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="time" class="form-control border-primary" placeholder="" name="end_time" id="end_time">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <h4 class="form-section"><i class="la la-briefcase">&nbsp;&nbsp;&nbsp;</i>Budget Details</h4>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">Estimate Budget</label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input class="form-control border-primary" type="text" placeholder="Amount of the budget" value=" " name="budget" id="budget">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-actions text-center">
                                                <button class="btn btn-primary float-md-right" type="submit">
                                                    <i class="fa fa-dot-circle-o"></i>Save</button>&nbsp;&nbsp;
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
        </div><!--end row-->
    </div>
</x-app-layout>