<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- {{ __('Dashboard') }} -->
            Add Activity Proposal
        </h2>
    </x-slot>

    <head>
        <!-- DataTables -->
        <link href="../public/build/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="../public/build/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="../public/build/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    </head>
    <!-- Required datatable js -->
    <script src="../public/build/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../public/build/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="../public/build/assets/plugins/peity-chart/jquery.peity.min.js"></script>
    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <button class="btn btn-gradient-primary px-4 float-right mt-0 mb-3"><i class="mdi mdi-plus-circle-outline mr-2"></i>Add Proposal</button>
                            <h4 class="header-title mt-0">Proposal Details</h4>
                            <div class="table-responsive dash-social">
                                <table id="datatable" class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Customer Name</th>
                                            <th>Email</th>
                                            <th>Phone No</th>
                                            <th>Country</th>
                                            <th>Action</th>
                                        </tr><!--end tr-->
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td><img src="../assets/images/users/user-10.jpg" alt="" class="thumb-sm rounded-circle mr-2">Donald Gardner<small class="badge badge-soft-pink ml-1">New</small></td>
                                            <td>xyx@gmail.com</td>
                                            <td>+123456789</td>
                                            <td>Tokyo, JAP</td>
                                            <td>
                                                <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                            </td>
                                        </tr><!--end tr-->
                                        <tr>
                                            <td><img src="../assets/images/users/user-9.jpg" alt="" class="thumb-sm rounded-circle mr-2">Matt Rosales</td>
                                            <td>xyx@gmail.com</td>
                                            <td>+123456789</td>
                                            <td>San Francisco USA</td>
                                            <td>
                                                <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                            </td>
                                        </tr><!--end tr-->
                                        <tr>
                                            <td><img src="../assets/images/users/user-8.jpg" alt="" class="thumb-sm rounded-circle mr-2">Michael Hill<small class="badge badge-soft-blue ml-1">New</small></td>
                                            <td>xyx@gmail.com</td>
                                            <td>+123456789</td>
                                            <td>Sydeny AUS</td>
                                            <td>
                                                <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                            </td>
                                        </tr><!--end tr-->
                                        <tr>
                                            <td><img src="../assets/images/users/user-7.jpg" alt="" class="thumb-sm rounded-circle mr-2">Nancy Flanary</td>
                                            <td>xyx@gmail.com</td>
                                            <td>+123456789</td>
                                            <td>Berlin GER</td>
                                            <td>
                                                <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                            </td>
                                        </tr><!--end tr-->
                                        <tr>
                                            <td><img src="../assets/images/users/user-6.jpg" alt="" class="thumb-sm rounded-circle mr-2">Dorothy Key</td>
                                            <td>xyx@gmail.com</td>
                                            <td>+123456789</td>
                                            <td>New York USA</td>
                                            <td>
                                                <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                            </td>
                                        </tr><!--end tr-->
                                        <tr>
                                            <td><img src="../assets/images/users/user-5.jpg" alt="" class="thumb-sm rounded-circle mr-2">Joseph Cross</td>
                                            <td>xyx@gmail.com</td>
                                            <td>+123456789</td>
                                            <td>Tokyo JAP</td>
                                            <td>
                                                <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                            </td>
                                        </tr><!--end tr-->

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