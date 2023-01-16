<x-app-layout>
    <div class="page-content">

        <div clas="container-fluid">
            <br>
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="Post"
                action="{{ route('election.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Add New Candidate</h4>


                                <div class="row">

                                    <div class="col-lg-6">


                                        <div class="form-group row">
                                            <label for="example-text-input"
                                                class="col-sm-2 col-form-label text-right">Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="candidate_name" type="text">
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="mt-0 header-title">Upload Candidate Image</h4>
                                                    <input type="file" id="candidate_picture"  name="candidate_picture" class="dropify"
                                                        data-height="500" />
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
                                                <input class="form-control" type="text" name="candidate_course">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input"
                                                class="col-sm-2 col-form-label text-right">Year</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="candidate_year">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label text-right">Faculty</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="candidate_faculty">
                                                    <option value="FKOM">FKOM</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group mb-0">
                                            <label for="exampleFormControlTextarea1">Manifesto</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" type="text" name="candidate_manifesto"></textarea>
                                        </div>

                                        <br>
                                        <br>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label text-right">Election Year</label>
                                            <div class="col-sm-10">
                                                <select class="custom-select" name="election_year">
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
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-body-->
                        <button class="btn btn-gradient-primary px-4 float-right mt-0 mb-3"><i
                                class="mdi mdi-plus-circle-outline mr-2"></i>Add candidate</button>
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </form>
        </div>
        <!--end row-->
    </div>
</x-app-layout>