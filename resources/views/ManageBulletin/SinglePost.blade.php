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
                                    <img src="{{ asset('uploads/images/'.$bulletin->bulletin_image) }}"  alt="" class=" mx-auto  d-block" height="400">                                       
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
                                        <p class="text-muted mb-4">
                                            <a href="{{$bulletin->bulletin_link}}">{{$bulletin->bulletin_link}}</a>
                                        </p>
                                        <ul class="p-0 mt-4 list-inline">
                                            <li class="list-inline-item">
                                                <button type="button" class="btn btn-primary waves-effect waves-light"><a href="{{ route('bulletin.edit', [$bulletin->id])}}" class="text-primary" style="color: #ffffff !important;">Edit</a></button>                                     
                                            </li> 
                                            <li class="list-inline-item">
                                                <form action="{{ route('bulletin.AddBookmark', [$bulletin->id])}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <button class="btn btn-secondary waves-effect waves-light" type="submit" > Add To Bookmark</button>
                                                </form> 
                                            
                                            <li class="list-inline-item">
                                                <form action="{{ route('bulletin.destroy', [$bulletin->id])}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger waves-effect waves-light" type="submit" >Delete</button>
                                                </form> 
                                            </li>    
                                        </ul>                                 
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
                                        <i class="text-success">Image</i>
                                        <iframe src="{{ asset('uploads/images/'.$bulletin->bulletin_image) }}" height="413" width="413" title="{{ asset('uploads/images/'.$bulletin->bulletin_image) }}"></iframe>
                                        <br>
                                        <h4 class="header-title"><a href="{{ asset('uploads/images/'.$bulletin->bulletin_image) }}" target="_blank">{{$bulletin->bulletin_image}}</a></h4>                                     
                                        <!-- <p class="text-muted mb-0">
                                            This post has an image attachment. Click the text to view/download the image.
                                        </p> -->
                                        
                                    </div>
                                </div><!--end col-->
                                <div class="col-lg-4">
                                    <div class="pro-order-box">
                                        <i class="text-warning">Video</i>
                                        <iframe src="{{ asset('uploads/videos/'.$bulletin->bulletin_video) }}" height="413" width="413" title="{{ asset('uploads/videos/'.$bulletin->bulletin_video) }}"></iframe>
                                        <br>
                                        <h4 class="header-title"><a href="{{ asset('uploads/videos/'.$bulletin->bulletin_video) }}" target="_blank">{{$bulletin->bulletin_video}}</a></h4>
                                        <!-- <p class="text-muted mb-0">
                                            This post has a video attachment. Click the text to view/download the video.
                                        </p> -->
                                    </div>
                                </div><!--end col-->
                                <div class="col-lg-4">
                                    <div class="pro-order-box">
                                        <i class="text-danger">PDF</i>
                                        <iframe src="{{ asset('uploads/pdf/'.$bulletin->bulletin_pdf) }}" height="413" width="413" title="{{ asset('uploads/images/'.$bulletin->bulletin_pdf) }}"></iframe>
                                        <br>
                                        <h4 class="header-title"><a href="{{ asset('uploads/pdf/'.$bulletin->bulletin_pdf) }}" target="_blank">{{$bulletin->bulletin_pdf}}</a></h4>
                                        <!-- <p class="text-muted mb-0">
                                            This post has a pdf attachment. Click the text to view/download the pdf.
                                        </p> -->
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