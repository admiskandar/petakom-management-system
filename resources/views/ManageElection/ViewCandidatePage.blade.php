<x-app-layout>
    <div class="page-content">

        <div clas="container-fluid">
            <br>
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="Post"
                action="', $election->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">View Candidate</h4>

                                <div class="row">

                                    <div class="col-lg-6">


                                        <div class="form-group row">
                                            <label for="example-text-input"
                                                class="col-sm-2 col-form-label text-right">Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" disabled="disabled" name="candidate_name" type="text" value="{{ $election->candidate_name}}">
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="card">
                                                <div class="card-body">
                                                        <img src="{{ asset('uploads/candidates/'.$election->candidate_picture) }}" alt="candidate_picture"></td>
                                                </div>
                                                <!--end card-body-->
                                            </div>
                                            <!--end card-->
                                        </div>
                                        <!--end col-->

                                        <div class="form-group row">
                                            <label for="example-text-input"
                                                class="col-sm-2 col-form-label text-right">Course</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" disabled="disabled" name="candidate_course" value="{{ $election->candidate_course}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input"
                                                class="col-sm-2 col-form-label text-right">Year</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="candidate_year" disabled="disabled" value="{{ $election->candidate_year}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label text-right">Faculty</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="candidate_faculty" disabled="disabled">
                                                    <option value="FKOM" {{ old('candidate_faculty', $election->candidate_faculty) == 'FKOM' ? 'selected' : '' }}>FKOM</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group mb-0">
                                            <label for="exampleFormControlTextarea1">Manifesto</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" type="text" name="candidate_manifesto" disabled="disabled">{{ $election->candidate_manifesto}}</textarea>
                                        </div>

                                        <br>
                                        <br>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label text-right">Election Year</label>
                                            <div class="col-sm-10">
                                                <select class="custom-select" name="election_year" disabled="disabled">
                                                    <option value="2022" {{ old('election_year', $election->election_year) == '2022' ? 'selected' : '' }}>2022</option>
                                                    <option value="2023" {{ old('election_year', $election->election_year) == '2023' ? 'selected' : '' }}>2023</option>
                                                    <option value="2024" {{ old('election_year', $election->election_year) == '2024' ? 'selected' : '' }}>2024</option>
                                                    <option value="2025" {{ old('election_year', $election->election_year) == '2025' ? 'selected' : '' }}>2025</option>
                                                    <option value="2026" {{ old('election_year', $election->election_year) == '2026' ? 'selected' : '' }}>2026</option>
                                                    <option value="2027" {{ old('election_year', $election->election_year) == '2027' ? 'selected' : '' }}>2027</option>
                                                    <option value="2028" {{ old('election_year', $election->election_year) == '2028' ? 'selected' : '' }}>2028</option>
                                                    <option value="2029" {{ old('election_year', $election->election_year) == '2029' ? 'selected' : '' }}>2029</option>
                                                    <option value="2030" {{ old('election_year', $election->election_year) == '2030' ? 'selected' : '' }}>2030</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-body-->

                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </form>
        </div>
        <!--end row-->
    </div>
</x-app-layout>
