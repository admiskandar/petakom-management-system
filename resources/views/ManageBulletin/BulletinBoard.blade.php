<x-app-layout>
        {{-- <button class="btn btn-gradient-primary"><a href="{{ route('bulletin.show', $bulletin->id) }}">View More</a></button> --}}


    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-right">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item active">Bulletin Board</li>
                            </ol>
                        </div>
                        <!-- <h4 class="page-title">Bulletin Board</h4> -->
                        <h2>Bulletin Board</h2>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <!-- <h5 class="mt-0">Here the list of all posted bulletins. <span class="badge badge-pink">6</span></h5> -->
                            <h5 class="mt-0">Here the list of all posted bulletins.</h5>
                        </li>
                    </ul>
                </div>
                <!--end col-->

                <div class="col-lg-6 text-right">
                    <div class="text-right">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <div class="input-group">
                                    <form action="{{ route('bulletin.searchBulletin') }}" method="GET">
                                        @csrf
                                        <ul class="list-inline-item">
                                            <li class="list-inline-item">
                                            <input type="text" name="search" class="form-control">
                                            </li>
                                            <li class="list-inline-item">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light" value="Search">Search</button>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <!-- <button type="button" class="btn btn-gradient-primary"><a href="{{ route('bookmark') }}">My Bookmark</a></button> -->
                                <button type="button" class="btn btn-primary waves-effect waves-light"><a href="{{ route('bulletin.ViewBookmark') }}" style="color: #ffffff !important;">Bookmark</a></button>
                            </li>
                            <li class="list-inline-item">
                                <form action="{{ route('bulletin.filterBulletinCategory')}}" method="GET">
                                    <div class="form-group">
                                        <label for="category">Filter by Category</label>
                                        <select class="form-control" name="category" onchange="this.form.submit()">
                                            <option selected>CATEGORY</option>
                                            <option value="GENERAL">GENERAL</option>
                                            <option value="CLASS">CLASS</option>
                                            <option value="EVENT">EVENT</option>
                                            <option value="WEBINAR">WEBINAR</option>                                                
                                        </select>
                                    </div>
                                </form>
                            </li>
                            <li class="list-inline-item">
                                <form action="{{ route('bulletin.filterBulletinTag')}}" method="GET">
                                    <div class="form-group">
                                        <label for="tag">Filter by Tag</label>
                                        <select class="form-control" name="tag" onchange="this.form.submit()">
                                            <option selected>TAG</option>
                                            <option value="PETAKOM">PETAKOM</option>
                                            <option value="FKOM">FKOM</option>                                                
                                        </select>
                                    </div>
                                </form>
                            </li>
                            <li class="list-inline-item">
                                <form action="{{ route('bulletin.sortBulletin')}}" method="GET">
                                    <div class="form-group">
                                        <label for="date">Sort by Date</label>
                                        <select class="form-control" name="sort" onchange="this.form.submit()">
                                            <option value="asc">ASC</option>
                                            <option value="desc">DESC</option>                                                
                                        </select>
                                    </div>
                                </form>
                            </li>
                            
                            @if(Auth::user()->user_type == "Petakom Committee")
                            <li class="list-inline-item">
                                <button type="button" class="btn btn-primary waves-effect waves-light"><a href="{{ route('bulletin.create') }}" style="color: #ffffff !important;">New</a></button>
                            </li>
                            @else

                            @endif
                        </ul>
                    </div>                            
                </div><!--end col-->
            </div><!--end row-->

            <!-- Start of Bulletin Post -->
            <div class="row">
                @foreach($bulletins as $bulletin)
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="blog-card">
                                <img src="{{ asset('uploads/images/'.$bulletin->bulletin_image) }}"  width="70px" height="70px" alt="" class="img-fluid"/>
                                <!-- <img src="{{ asset('build/assets/images/widgets/p-1.svg') }}" alt="" class="img-fluid"/> -->
                                <div class="meta-box">
                                    <ul class="p-0 mt-4 list-inline">
                                        <li class="list-inline-item"><span class="badge badge-warning px-3">{{$bulletin->bulletin_category}}</span></li>
                                        <li class="list-inline-item">{{$bulletin->bulletin_date}}</li>
                                        <li class="list-inline-item">{{$bulletin->bulletin_tag}}</li>
                                    </ul>
                                </div><!--end meta-box-->            
                                <h4 class="mt-2 mb-3">
                                    <a href="">{{$bulletin->bulletin_name}}</a>
                                </h4>
                                <p class="text-muted">{{$bulletin->bulletin_excerpt}}</p>
                                <div class="button-items mb-4">
                                    <ul class="p-0 mt-4 list-inline">
                                        <li class="list-inline-item">
                                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                                <a href="{{ route('bulletin.show', [$bulletin->id])}}" class="text-primary" style="color: #ffffff !important;">Continue Reading</a>
                                            </button>
                                        </li>
                                        <li class="list-inline-item">
                                            <form action="{{ route('bulletin.AddBookmark', [$bulletin->id])}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <button class="btn btn-secondary waves-effect" type="submit">Add To Bookmark</button>
                                            </form> 
                                        </li>
                                    </ul>
                                </div>       
                            </div><!--end blog-card-->                                   
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->    
                @endforeach                 
            </div><!--end row-->
            <!-- End of Bulletin Post --> 
        </div><!-- container -->


        <footer class="footer text-center text-sm-left">
            &copy; 2019 Metrica <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
        </footer><!--end footer-->
    </div>
        <!-- end page content -->
</x-app-layout>

        <!-- refer file:///C:/Users/iski/Documents/light-material-vertical/projects/projects-project.html -->
        <!-- refer file:///C:/Users/iski/Documents/light-material-vertical/pages/pages-blogs.html -->
