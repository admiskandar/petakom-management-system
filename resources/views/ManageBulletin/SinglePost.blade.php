<x-app-layout>
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
                                <li class="breadcrumb-item active">Single Post</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Single Post</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="../assets/images/products/2.jpg" alt="" class=" mx-auto  d-block" height="400">                                           
                                </div><!--end col-->
                                <div class="col-lg-6 align-self-center">
                                    <div class="single-pro-detail">
                                        <p class="mb-1"><span class="badge badge-secondary px-3">{{$bulletin->bulletin_category}}</span></p>
                                        <div class="custom-border mb-3"></div>
                                        <h3 class="pro-title">{{$bulletin->bulletin_name}}</h3>
                                        <h6 class="text-muted font-13">Tag :</h6> 
                                        <p class="text mb-2">{{$bulletin->bulletin_tag}}</p>                                         
                                        <h6 class="text-muted font-13">Details :</h6> 
                                        <p class="text mb-4">{{$bulletin->bulletin_detail}}</p>                                             
                                        <h6 class="text-muted font-13">Link :</h6> 
                                        <p class="text-muted mb-4"><a href="{{$bulletin->bulletin_link}}">{{$bulletin->bulletin_link}}</a>  </p>
                                        <button type="button" class="btn btn-gradient-primary waves-effect waves-light"><a href="{{ route('bulletin.edit', [$bulletin->id])}}" class="text-primary">Edit</a></button>                                     
                                        <button type="button" class="btn btn-gradient-primary waves-effect waves-light">Add to Bookmark</button>
                                        <br>
                                        <form action="{{ route('bulletin.destroy', [$bulletin->id])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit" class="btn btn-gradient-danger">Delete</button>
                                        </form>                                     
                                    </div>
                                </div><!--end col-->                                            
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="pro-order-box">
                                        <i class="mdi mdi-truck-fast text-success"></i>
                                        <h4 class="header-title">bulletin_image</h4>
                                        <p class="text-muted mb-0">
                                            It is a long established fact that a reader will be distracted.
                                            Contrary to popular belief.
                                        </p>
                                    </div>
                                </div><!--end col-->
                                <div class="col-lg-4">
                                    <div class="pro-order-box">
                                        <i class="mdi mdi-refresh text-danger"></i>
                                        <h4 class="header-title">bulletin_video</h4>
                                        <p class="text-muted mb-0">
                                            It is a long established fact that a reader will be distracted.
                                            Contrary to popular belief.
                                        </p>
                                    </div>
                                </div><!--end col-->
                                <div class="col-lg-4">
                                    <div class="pro-order-box">
                                        <i class="mdi mdi-headset text-warning"></i>
                                        <h4 class="header-title">bulletin_pdf</h4>
                                        <p class="text-muted mb-0">
                                            It is a long established fact that a reader will be distracted.
                                            Contrary to popular belief.
                                        </p>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!-- container -->

        <footer class="footer text-center text-sm-left">
            &copy; 2019 Metrica <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
        </footer><!--end footer-->
        </div>
        <!-- end page content -->
</x-app-layout>

<!-- refer C:/Users/iski/Documents/light-material-vertical/ecommerce/ecommerce-product-detail.html -->