<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- {{ __('Dashboard') }} -->
            Activity Proposal
        </h2>
    </x-slot>

    <head>
        <!-- DataTables -->
        <link href="../public/build/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="../public/build/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="../public/build/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    </head>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <button class="btn btn-gradient-primary px-4 float-right mt-0 mb-3"><i class="mdi mdi-plus-circle-outline mr-2"></i><a href="{{route('report.create')}}">Add Proposal</a></button>
                            <h4 class="header-title mt-0">Proposal Details</h4>
                            <div class="table-responsive dash-social">
                                <table id="datatable" class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Title</th>
                                            <th>Date</th>
                                            <th>Organizer</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr><!--end tr-->
                                    </thead>

                                    <tbody>
                                        @foreach($reports as $data)
                                        <tr>
                                            <td>{{$data->title}}</td>
                                            <td>{{$data->start_date}}</td>
                                            <td>{{$data->organizer}}</td>
                                            @if($data->status == 0)
                                            <?php
                                            $labelstatus = "Pending";
                                            $labelcolor = "badge badge-warning";
                                            ?>
                                            @elseif ($data->status == 1)
                                            <?php
                                            $labelstatus = "Approve";
                                            $labelcolor = "badge badge-success";
                                            ?>
                                            @elseif ($data->status == 2)
                                            <?php
                                            $labelstatus = "Reject";
                                            $labelcolor = "badge badge-danger";
                                            ?>
                                            @endif
                                            <td>
                                                <span class="{{ $labelcolor }}">{{ $labelstatus }}</span>
                                            </td>
                                            <td>
                                                @if ($data->user_id == auth()->user()->id)
                                                <a href="{{route('report.edit', [$data->id], 'report.edit')}}" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                @else
                                                @endif
                                                <a href="{{route('report.destroy', $data->id)}}"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        <!--end tr-->
                                    </tbody>
                                </table>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->
        </div>
    </div>
</x-app-layout>