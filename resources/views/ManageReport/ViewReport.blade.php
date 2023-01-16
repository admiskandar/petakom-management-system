<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- {{ __('Dashboard') }} -->
            Report Proposal
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{route('report.ReportHomePage')}}"><button class="btn btn-gradient-primary px-4 float-right mt-0 mb-3"><i class="fas fa-chevron-left"></i></button></a>
                            @if(Auth::user()->user_type == "Petakom Committee" && Auth::user()->user_type == "Coordinator" && Auth::user()->user_type == "Head of Program")
                            <div class="card" hidden>
                                <div class="card-body invoice-head">
                                    <div class="row">
                                        <div class="col-md-4 align-self-center">
                                            <img src="../build/assets/images/fk.png" alt="logo-small" class="logo-sm" height="26">
                                        </div>
                                        <div class="col-md-8">

                                            <ul class="list-inline mb-0 contact-detail float-right">
                                                <li class="list-inline-item">
                                                    <div class="pl-3">
                                                        <i class="mdi mdi-web"></i>
                                                        <p class="text-muted mb-0">https://www.instagram.com/petakom_ump/</p>
                                                        <p class="text-muted mb-0">https://www.facebook.com/petakomump/</p>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="pl-3">
                                                        <i class="mdi mdi-phone"></i>
                                                        <p class="text-muted mb-0">+609 431 5011</p>
                                                        <p class="text-muted mb-0">fk@ump.edu.my</p>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="pl-3">
                                                        <i class="mdi mdi-map-marker"></i>
                                                        <p class="text-muted mb-0">Faculty of Computing
                                                        </p>
                                                        <p class="text-muted mb-0"> Universiti Malaysia Pahang
                                                            26600 Pekan, Pahang</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="">
                                                <h5 class="mb-0"><b>Activity Date :</b>{{ $proposal->start_date }}</h5>
                                                <h5><b>Proposal ID :</b>{{ $proposal->id }}</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="float-left">
                                                <h5 class="mb-0"><b>Program Name :</b>
                                                    <br>{{ $proposal->title }}
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="float-left">
                                                <h5 class="mb-0"><b>Organizer :</b>
                                                    <br>{{ $proposal->organizer }}
                                                </h5>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="float-left">
                                                <h5 class="mb-0"><b>Program Director :</b>
                                                    <br>{{ $proposal->name }}
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><b>PROGRAM NAME</b></td>
                                                        <td>{{ $proposal->title }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>OBJECTIVE</b></td>
                                                        <td>{{ $proposal->objective }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>ORGANIZER</b></td>
                                                        <td>{{ $proposal->organizer }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>DATE</b></td>
                                                        <td>START DATE: {{ $proposal->start_date }} <br>
                                                            END DATE: {{ $proposal->end_date }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>LOCATION</b></td>
                                                        <td>{{ $proposal->location }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>NUMBER OF PARTICIPATION</b></td>
                                                        <td>{{ $proposal->participation }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <h6 class="mt-4"><b>PROGRAM ADVISOR :</b></h6>
                                        <ul class="pl-3">
                                            <li>MUHAMMAD ZULFAHMI TOH BIN ABDULLAH</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 align-self-end">
                                        <div class="w-25 float-right">
                                            <small>Program Advisor</small>
                                            <img src="../build/assets/images/sir-zul.png" alt="" class="" height="30">
                                            <p class="border-top">Signature</p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-12 col-xl-4 ml-auto align-self-center">
                                        <div class="text-center text-muted"><small>Petakom Activity Proposal Report</small></div>
                                    </div>
                                    <div class="col-lg-12 col-xl-4">
                                        <div class="float-right d-print-none">
                                            <a href="javascript:window.print()" class="btn btn-gradient-info"><i class="fa fa-print"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                            <!--begin::Tab-->
                            @if(Auth::user()->user_type == "Dean")
                            <div class="tab-pane show active px-7" id="kt_user_edit_tab_1" role="tabpanel">
                                <!--begin::Row-->
                                <div>
                                    <h2 class="card-title">Program Information</h2>
                                </div>
                                <div class="card-content collpase show">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="fas fa-file-alt">&nbsp;&nbsp;&nbsp;</i>Program Details</h4>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">Program Name</label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="text" class="form-control border-primary" placeholder="Program name" value="{{ old('title', $proposal->title) }}" id="title" name="title" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">Objective</label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="text" class="form-control border-primary" placeholder="Objective of the program" value="{{ old('objective', $proposal->objective) }}" name="objective" id="objective" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">Organizer</label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="text" class="form-control border-primary" placeholder="Organizer" value="{{ old('organizer', $proposal->organizer) }}" name="organizer" id="organizer" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">Location</label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="text" class="form-control border-primary" placeholder="Program's Location" value="{{ old('location', $proposal->location) }}" name="location" id="location" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">Paticipation</label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input class="form-control border-primary" type="number" placeholder="Number of participation" value="{{ old('participation', $proposal->participation) }}" name="participation" id="participation" disabled>
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
                                                        <input type="date" class="form-control border-primary" value="{{ old('start_date', $proposal->start_date) }}" placeholder="" id="start_date" name="start_date" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control">End Date</label>
                                                    <div class="col-md-9 mx-auto">
                                                        <input type="date" class="form-control border-primary" value="{{ old('end_date', $proposal->end_date) }}" placeholder="" name="end_date" id="end_date" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control">Start Time</label>
                                                    <div class="col-md-9 mx-auto">
                                                        <input type="time" class="form-control border-primary" placeholder="" value="{{ old('start_time', $proposal->start_time) }}" id="start_time" name="start_time" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control">End Date</label>
                                                    <div class="col-md-9 mx-auto">
                                                        <input type="time" class="form-control border-primary" placeholder="" value="{{ old('end_time', $proposal->end_time) }}" name="end_time" id="end_time" disabled>
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
                                                        <input class="form-control border-primary" type="text" placeholder="Amount of the budget" value="{{ old('budget', $proposal->budget) }}" name="budget" id="budget" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-actions text-center">
                                            @if ($proposal->status != 1 && $proposal->status != 2)
                                            <form id="approve" class="form form-horizontal" action="{{route('updateStatusApproved' , ['id' => $proposal->id])}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <input value="1" name="statusApproved" hidden>
                                                <button id="approve-button" class="btn btn-primary float-md-right" type="submit" class="card hidden">Approve</button>
                                            </form>
                                            <form id="reject" class="form form-horizontal" action="{{route('updateStatusReject' , ['id' => $proposal->id])}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <input value="2" name="statusReject" hidden>
                                                <button id="reject-button" class="btn btn-danger float-md-right mx-3  type=" submit" class="card hidden">Reject</button>
                                            </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div><!--end card-->
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
                $('#approve-button').click(function(e) {
                    e.preventDefault(); // prevent the form from submitting
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You want to approve this proposal!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '$success',
                        cancelButtonColor: '$danger',
                        confirmButtonText: 'Yes, approve it!'
                    }).then((result) => {
                        if (result.value) {
                            //submit the form here
                            $("#approve").submit();
                            Swal.fire({
                                title: 'Success!',
                                text: 'The proposal has been approved.',
                                type: 'success',
                                timer: 2000,
                                showConfirmButton: false
                            })
                        }
                    })
                });

                //Parameter
                $('#reject-button').click(function(e) {
                    e.preventDefault(); // prevent the form from submitting
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You want to reject this proposal!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '$success',
                        cancelButtonColor: '$danger',
                        confirmButtonText: 'Yes, reject it!'
                    }).then((result) => {
                        if (result.value) {
                            //submit the form here
                            $("#reject").submit();
                            Swal.fire({
                                title: 'Success!',
                                text: 'The proposal has been rejected.',
                                type: 'success',
                                timer: 2000,
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