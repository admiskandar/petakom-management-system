<x-app-layout>
    <h2>New Post</h2>
    <div class="page-content">
        <!-- Start of the form -->
        <form action="{{ route('bulletin.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">        
                            <h4 class="mt-0 header-title">New Post</h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <label for="bulletin_name" class="col-sm-2 col-form-label text-right">Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="bulletin_name" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bulletin_date" class="col-sm-2 col-form-label text-right">Date</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="date" name="bulletin_date" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-right">Category</label>
                                        <div class="col-sm-10">
                                            <select class="bulletin_category" name="bulletin_category" required>
                                                <option value="GENERAL">GENERAL</option>
                                                <option value="CLASS">CLASS</option>
                                                <option value="EVENT">EVENT</option>
                                                <option value="WEBINAR">WEBINAR</option>                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-right">Tag</label>
                                        <div class="col-sm-10">
                                            <select class="bulletin_tag" name="bulletin_tag" required>
                                                <option value="PETAKOM">PETAKOM</option>
                                                <option value="FKOM">FKOM</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bulletin_link" class="col-sm-2 col-form-label text-right">URL</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="url" value="" name="bulletin_link">
                                        </div>
                                    </div>    
                                    <div class="form-group">
                                        <label for="bulletin_excerpt" class="col-sm-2 col-form-label text-right">Excerpt</label>
                                        <div>
                                            <textarea class="form-control" rows="4" name="bulletin_excerpt" required></textarea>
                                        </div>
                                    </div>                                                                
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="bulletin_detail">Details</label>
                                        <div>
                                            <textarea class="form-control" rows="4" name="bulletin_detail" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="bulletin_image">Images</label>
                                        <input type="file" name="bulletin_image" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="bulletin_video">Videos</label>
                                        <input type="file" name="bulletin_video" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="bulletin_pdf">PDF</label>
                                        <input type="file" name="bulletin_pdf" class="form-control">
                                    </div>
                                    <div class="form-group row">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light"><a href="{{ route('bulletin.index') }}" style="color: #ffffff !important;">Cancel</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>                                                                      
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->
        </form>
        <!-- End of the form -->
    </div>
</x-app-layout>
<!-- refer file:///C:/Users/iski/Documents/light-material-vertical/others/forms-elements.html -->