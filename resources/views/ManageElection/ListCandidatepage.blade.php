<x-app-layout>
    <div class="page-content">
        <div clas="container-fluid">
            <div class="row">
                <div class="col-12">
                    <br>
                    <div class="card">                     
                        <div class="card-body">

                            <a href="{{route('election.create')}}"><button class="btn btn-gradient-primary px-4 float-right mt-0 mb-3"><i class="mdi mdi-plus-circle-outline mr-2"></i>Add new candidate</button> </a>
                            
                            <a href="{{route('election.leaderboard')}}"><button class="btn btn-gradient-primary px-4 float-right mt-0 mb-3"style="margin-right: 30px;"><i class="mdi mdi-plus-circle-outline mr-2"></i>View Leaderboard</button> </a>

                            <a href="{{route('election.vote')}}"><button class="btn btn-gradient-primary px-4 float-right mt-0 mb-3"style="margin-right: 30px;"><i class="mdi mdi-plus-circle-outline mr-2"></i>Vote</button> </a>

                            <h4 class="header-title mt-0">List of Candidates</h4> 

                            <br>
                            <br>

                            <form action="{{ route('election.search') }}" method="GET">
                                @csrf
                                
                                <input type="text" name="search" placeholder="Search by name" style="border: none; border-bottom: 1px solid black;">
                                <button type="submit" class="fas fa-search" value="Search"></button>
                                
                            </form>

                            <br>
                            <br>
                            <br>
                            
                            <form action="{{ route('election.filter') }}" method="GET">
                                <div class="form-group">
                                    <label for="year">Filter by Year of Election:</label>
                                    <select class="form-control" name="year">
                                        <option>Change Year</option>
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
                            </form>

                            <br>

                            <br>

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
                                        <th >Action</th>
                                    </tr><!--end tr-->
                                    </thead>

                                    <tbody>
                                    @forelse($election as $election)
                                    <tr>
                                        <td><img src="{{ asset('uploads/candidates/'.$election->candidate_picture) }}" alt="candidate_picture" width="50" height="50"></td>
                                        <td class="text-center">{{ $election->candidate_name}}</td>
                                        <td class="text-center">{{ $election->candidate_faculty}}</td>
                                        <td class="text-center">{{ $election->candidate_year}}</td>
                                        <td class="text-center">{{ $election->candidate_course}}</td>
                                        <td class="text-center">{{ $election->candidate_manifesto}}</td>
                                        <td class="text-center">{{ $election->election_year}}</td>
                                        <td>
                                            <a href="{{route('election.show', $election->id)}}"> <button class="dripicons-preview" ><i></i></button></a>
                                            <br>

                                            <a href="{{route('election.edit', $election->id)}}"> <button class="dripicons-document-edit" ><i></i></button></a>
                                            <br>

                                            <form action="{{route('election.destroy', $election->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')                                
                                                <button type="submit" button class="dripicons-trash" onclick="return confirm('Are you sure you want to delete this candidate?')"></button>
                                                {{-- <a href="{{route('election.destroy', $election->id)}}" onclick="return confirm('Are you sure you want to delete this candidate?')"><i class="fas fa-trash-alt text-danger font-16"></i></a> --}}
                                            </form>                                    
                                        </td>
                                    </tr><!--end tr-->
                                    @empty
                                        <p class="text-warning">No candidate registered</p>
                                    @endforelse
                                                                                       
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
