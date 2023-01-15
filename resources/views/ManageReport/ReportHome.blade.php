<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- {{ __('Dashboard') }} -->
            Activity Proposal
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <button class="btn btn-gradient-primary px-4 float-right mt-0 mb-3"><i class="mdi mdi-plus-circle-outline mr-2"></i><a href="{{route('report.AddProposal')}}">Add Proposal</a></button>
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
                                        @foreach($reports as $report)
                                        @if ($report->user_id == auth()->user()->id)
                                        <tr>
                                            <td>{{$report->title}}</td>
                                            <td>{{$report->start_date}}</td>
                                            <td>{{$report->organizer}}</td>
                                            @if($report->status == 0)
                                            <?php
                                            $labelstatus = "Pending";
                                            $labelcolor = "badge badge-warning";
                                            ?>
                                            @elseif ($report->status == 1)
                                            <?php
                                            $labelstatus = "Approve";
                                            $labelcolor = "badge badge-success";
                                            ?>
                                            @elseif ($report->status == 2)
                                            <?php
                                            $labelstatus = "Reject";
                                            $labelcolor = "badge badge-danger";
                                            ?>
                                            @endif
                                            <td>
                                                <span class="{{ $labelcolor }}">{{ $labelstatus }}</span>
                                            </td>
                                            <td>
                                                @if ($report->user_id == auth()->user()->id)
                                                <form id="delete-frm" class="" action="{{ route('destroy', $report->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <a href="{{route('report.ViewReport',[$report->id])}}" class="mr-2"><i class="fas fa-eye text-info font-16"></i></a>
                                                    <a href="{{route('edit', ['id' => $report->id])}}" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <button type="submit"><i class="fas fa-trash-alt text-danger font-16"></i></button>
                                                </form>
                                                @else

                                                @endif
                                            </td>
                                        </tr>
                                        @endif
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