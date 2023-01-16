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
                            <div class="card">
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
                        </div><!--end card-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
        </div><!--end row-->
    </div>
</x-app-layout>
