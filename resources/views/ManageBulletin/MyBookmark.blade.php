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
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Bulletin Board</a></li>
                                <li class="breadcrumb-item active">My Bookmark</li>
                            </ol>
                        </div>
                        <!-- <h4 class="page-title">Bulletin Board</h4> -->
                        <h2>My Bookmark</h2>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <!-- <h5 class="mt-0">Here the list of all posted bulletins. <span class="badge badge-pink">6</span></h5> -->
                            <h5 class="mt-0">Here the list of all your bookmarked post.</h5>
                        </li>
                    </ul>
                </div>
                <!--end col-->

                <div class="col-lg-6 text-right">
                    <div class="text-right">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <div class="input-group">                               
                                    <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
                                    <span class="input-group-append">
                                        <button type="button" class="btn btn-gradient-primary"><i class="fas fa-search">Search</i></button>
                                    </span>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <button type="button" class="btn btn-gradient-primary">Filter</button>
                            </li>
                            <li class="list-inline-item">
                                <button type="button" class="btn btn-gradient-primary">Sort</button>
                            </li>
                        </ul>
                    </div>                            
                </div><!--end col-->
            </div><!--end row-->

            <!-- Start of Bulletin Post -->
            <div class="row">
                @foreach($bookmarks as $bookmark)
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="blog-card">
                                <img src="{{ asset('uploads/images/'.$bookmark->bulletin->bulletin_image) }}"  width="70px" height="70px" alt="" class="img-fluid"/>
                                <!-- <img src="{{ asset('build/assets/images/widgets/p-1.svg') }}" alt="" class="img-fluid"/> -->
                                <div class="meta-box">
                                    <ul class="p-0 mt-4 list-inline">
                                        <li class="list-inline-item"><span class="badge badge-secondary px-3">{{$bookmark->bulletin->bulletin_category}}</span></li>
                                        <li class="list-inline-item">{{$bookmark->bulletin->bulletin_date}}</li>
                                        <li class="list-inline-item">{{$bookmark->bulletin->bulletin_tag}}</li>
                                    </ul>
                                </div><!--end meta-box-->            
                                <h4 class="mt-2 mb-3">
                                    <a href="">{{$bookmark->bulletin->bulletin_name}}</a>
                                </h4>
                                <p class="text-muted">{{$bookmark->bulletin->bulletin_excerpt}}</p>
                                <a href="{{ route('bulletin.show', [$bookmark->bulletin->id])}}" class="text-primary">Continue Reading<i class="fas fa-long-arrow-alt-right"></i></a>

                                <form action="{{ route('bulletin.AddBookmark', [$bookmark->bulletin->id])}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <button class="btn btn-danger" type="submit" class="btn btn-gradient-danger"> Add To Bookmark</button>
                                </form>     
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
