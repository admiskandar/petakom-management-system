<x-app-layout>
    <h2>Edit Post</h2>
    <div class="page-content">
        <!-- Start of the form -->
        <form action="">
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
                                            <input class="form-control" type="text" value="Artisanal kale" id="bulletin_name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bulletin_date" class="col-sm-2 col-form-label text-right">Date</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="date" value="2011-08-19" id="bulletin_date">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-right">Category</label>
                                        <div class="col-sm-10">
                                            <select class="bulletin_category">
                                                <option selected="">Choose the bulletin type</option>
                                                <option value="petakom">PETAKOM</option>
                                                <option value="fkom">FKOM</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-right">Tag</label>
                                        <div class="col-sm-10">
                                            <select class="bulletin_tag">
                                                <option selected="">Choose the bulletin tag</option>
                                                <option value="general">GENERAL</option>
                                                <option value="class">CLASS</option>
                                                <option value="event">EVENT</option>
                                                <option value="webinar">WEBINAR</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bulletin_link" class="col-sm-2 col-form-label text-right">URL</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="url" value="" id="bulletin_link">
                                        </div>
                                    </div>    
                                    <div class="form-group">
                                        <label for="bulletin_excerpt" class="col-sm-2 col-form-label text-right">Excerpt</label>
                                        <div>
                                            <textarea class="form-control" rows="4" id="bulletin_excerpt"></textarea>
                                        </div>
                                    </div>                                                                
                                </div>

                                <div class="col-lg-6">
                                    
                                    <div class="form-group">
                                        <label for="bulletin_detail">Details</label>
                                        <div>
                                            <textarea class="form-control" rows="4" id="bulletin_detail"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="bulletin_image">Images</label>
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" id="bulletin_image">
                                            <label class="custom-file-label" for="bulletin_image">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="bulletin_video">Videos</label>
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" id="bulletin_video">
                                            <label class="custom-file-label" for="bulletin_video">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="bulletin_pdf">PDF</label>
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" id="bulletin_pdf">
                                            <label class="custom-file-label" for="bulletin_pdf">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div>
                                            {{--<button type="submit" class="btn btn-gradient-primary"><a href="{{ route('bulletin.update') }}">Submit</a></button>--}}
                                            {{--<button type="button" class="btn btn-gradient-danger"><a href="{{ route('bulletin.destroy', $bulletin->id) }}">Delete</a></button>--}}
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