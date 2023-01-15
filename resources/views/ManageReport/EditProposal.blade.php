<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- {{ __('Dashboard') }} -->
            Update Activity Proposal
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
                                        <form class="form form-horizontal" action="{{route('update' , ['id' => $reports->id])}}" method="POST" enctype="multipart/form-data" id="form-edit">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="fas fa-file-alt">&nbsp;&nbsp;&nbsp;</i>Program Details</h4>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control">Program Name</label>
                                                            <div class="col-md-9 mx-auto">
                                                                <input type="text" class="form-control border-primary" placeholder="Program name" value="{{ old('title', $reports->title) }}" id="title" name="title">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control">Objective</label>
                                                            <div class="col-md-9 mx-auto">
                                                                <input type="text" class="form-control border-primary" placeholder="Objective of the program" value="{{ old('objective', $reports->objective) }}" name="objective" id="objective">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control">Organizer</label>
                                                            <div class="col-md-9 mx-auto">
                                                                <input type="text" class="form-control border-primary" placeholder="Organizer" value="{{ old('organizer', $reports->organizer) }}" name="organizer" id="organizer">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control">Location</label>
                                                            <div class="col-md-9 mx-auto">
                                                                <input type="text" class="form-control border-primary" placeholder="Program's Location" value="{{ old('location', $reports->location) }}" name="location" id="location">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control">Paticipation</label>
                                                            <div class="col-md-9 mx-auto">
                                                                <input class="form-control border-primary" type="number" placeholder="Number of participation" value="{{ old('participation', $reports->participation) }}" name="participation" id="participation">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h4 class="form-section"><i class="fas fa-calendar-alt">&nbsp;&nbsp;&nbsp;</i>Time and Date Details</h4>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">Start Date</label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="date" class="form-control border-primary" value="{{ old('start_date', $reports->start_date) }}" placeholder="" id="start_date" name="start_date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">End Date</label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="date" class="form-control border-primary" value="{{ old('end_date', $reports->end_date) }}" placeholder="" name="end_date" id="end_date">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">Start Time</label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="time" class="form-control border-primary" placeholder="" value="{{ old('start_time', $reports->start_time) }}" id="start_time" name="start_time">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">End Date</label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="time" class="form-control border-primary" placeholder="" value="{{ old('end_time', $reports->end_time) }}" name="end_time" id="end_time">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <h4 class="form-section"><i class="fas fa-money-bill-wave">&nbsp;&nbsp;&nbsp;</i>Budget Details</h4>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">Estimate Budget</label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input class="form-control border-primary" type="text" placeholder="Amount of the budget" value="{{ old('budget', $reports->budget) }}" name="budget" id="budget">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-actions text-center">
                                                <button class="btn btn-primary float-md-right" type="submit" id="edit">
                                                    <i class="fa fa-dot-circle-o"></i>Update</button>&nbsp;&nbsp;
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

<script>
    ! function($) {
        "use strict";

        var SweetAlert = function() {};

        SweetAlert.prototype.init = function() {

                //Parameter
                $('#edit').click(function(e) {
                    e.preventDefault(); // prevent the form from submitting
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You want to update this data!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '$success',
                        cancelButtonColor: '$danger',
                        confirmButtonText: 'Yes, update it!'
                    }).then((result) => {
                        if (result.value) {
                            //submit the form here
                            $("#form-edit").submit();
                            Swal.fire({
                                title: 'Success!',
                                text: 'Your data has been updated.',
                                type: 'success',
                                timer: 50000,
                                showConfirmButton: false
                            })
                        }
                    })
                });


            },
            //init
            $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
    }(window.jQuery),

    //initializing
    function($) {
        "use strict";
        $.SweetAlert.init()
    }(window.jQuery);
</script>