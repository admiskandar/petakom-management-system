<x-app-layout>


    <div class="page-content">
        <div clas="container-fluid">
            <div class="row">
                <div class="col-12">
                    <br>
                    <div class="card">
                        <div class="card-body">

                            <h4 class="header-title mt-0">List of Candidates</h4>

                            <br>
                            <br>
                            <br>
                            {{-- 
                            <form action="{{ route('election.filter2') }}" method="GET">
                                <div class="form-group">
                                    <label for="year">Filter by Year of Election:</label>
                                    <select class="form-control" name="year">
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                        <option value="2030">2030</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Filter</button>
                            </form> --}}

                            <br>

                            <br>

                            {{-- <form action="{{ route('election.voteedit') }}" method="POST"> --}}
                            @csrf
                            <div class="table-responsive dash-social">
                                <table id="datatable" class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Picture</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Faculty</th>
                                            <th class="text-center">Year</th>
                                            <th class="text-center">Course</th>
                                            <th class="text-center">Manifesto</th>
                                            <th class="text-center">Election Year</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                        <!--end tr-->
                                    </thead>

                                    <tbody>
                                        @forelse($election as $election)
                                            @if ($vote->vote_year != $date)
                                            {{-- <tr style="display: none;"> --}}
                                            <tr>
                                                <td><img src="{{ asset('uploads/candidates/' . $election->candidate_picture) }}"
                                                        alt="candidate_picture" width="50" height="50"></td>
                                                <td class="text-center">{{ $election->candidate_name }}</td>
                                                <td class="text-center">{{ $election->candidate_faculty }}</td>
                                                <td class="text-center">{{ $election->candidate_year }}</td>
                                                <td class="text-center">{{ $election->candidate_course }}</td>
                                                <td class="text-center">{{ $election->candidate_manifesto }}</td>
                                                <td class="text-center">{{ $election->election_year }}</td>
                                                <td>

                                                <form action="{{ route('election.voteedit', $election->id) }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure you want to vote this candidate?')">Vote</button>
                                                </form>
                                                </td>
                                            </tr>
                                            @endif
                                        @empty
                                            <p class="text-warning">No candidate registered</p>
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                            {{-- <a href="{{ route('election.vote') }}"><button
                                        class="btn btn-gradient-primary px-4 float-right mt-0 mb-3"style="margin-right: 30px;"><i
                                            class="mdi mdi-plus-circle-outline mr-2"></i>Vote</button> </a> --}}
                            {{-- </form> --}}
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
    </div>

</x-app-layout>
