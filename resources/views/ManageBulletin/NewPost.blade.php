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
                            <p class="text-muted mb-3">Here are examples of <code class="highlighter-rouge">.form-control</code> applied to each
                                textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code class="highlighter-rouge">type</code>.
                            </p>
                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <label for="bulletin_name" class="col-sm-2 col-form-label text-right">Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="bulletin_name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bulletin_date" class="col-sm-2 col-form-label text-right">Date</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="date" name="bulletin_date">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-right">Category</label>
                                        <div class="col-sm-10">
                                            <select class="bulletin_category" name="bulletin_category">
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
                                            <select class="bulletin_tag" name="bulletin_tag">
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
                                            <textarea class="form-control" rows="4" name="bulletin_excerpt"></textarea>
                                        </div>
                                    </div>                                                                
                                </div>

                                <div class="col-lg-6">
                                    
                                    <div class="form-group">
                                        <label for="bulletin_detail">Details</label>
                                        <div>
                                            <textarea class="form-control" rows="4" name="bulletin_detail"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="bulletin_image">Images</label>
                                        <!-- <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" name="bulletin_image">
                                            <label class="custom-file-label" for="bulletin_image">Choose file</label>
                                        </div> -->
                                        <div class="image">
                                            <label><h4>Add image</h4></label>
                                            <input type="file" name="bulletin_image" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="bulletin_video">Videos</label>
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" name="bulletin_video">
                                            <label class="custom-file-label" for="bulletin_video">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="bulletin_pdf">PDF</label>
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" name="bulletin_pdf">
                                            <label class="custom-file-label" for="bulletin_pdf">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div>
                                            <button type="submit" class="btn btn-gradient-primary">Submit</button>
                                            <button type="button" class="btn btn-gradient-danger">Cancel</button>
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