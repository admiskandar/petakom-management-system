<x-app-layout>
    <h2>Edit Post</h2>

    <div class="page-content">
        <!-- Start of the form -->
        <form action="{{ route('bulletin.update', [$bulletin->id])}}" method="post" enctype="multipart/form-data">
            @method('PATCH') 
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">        
                            <h4 class="mt-0 header-title">{{$bulletin->bulletin_name}}</h4>
                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <label for="bulletin_name" class="col-sm-2 col-form-label text-right">Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="bulletin_name" value="{{$bulletin->bulletin_name}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bulletin_date" class="col-sm-2 col-form-label text-right">Date</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="date" name="bulletin_date" value="{{$bulletin->bulletin_date}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-right">Category</label>
                                        <div class="col-sm-10">
                                            <select class="bulletin_category" name="bulletin_category">
                                                <option value="GENERAL" {{ old('bulletin_category', $bulletin->bulletin_category) == 'GENERAL' ? 'selected' : '' }}>GENERAL</option>
                                                <option value="CLASS" {{ old('bulletin_category', $bulletin->bulletin_category) == 'CLASS' ? 'selected' : '' }}>CLASS</option>
                                                <option value="EVENT" {{ old('bulletin_category', $bulletin->bulletin_category) == 'EVENT' ? 'selected' : '' }}>EVENT</option>
                                                <option value="WEBINAR" {{ old('bulletin_category', $bulletin->bulletin_category) == 'WEBINAR' ? 'selected' : '' }}>WEBINAR</option>                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-right">Tag</label>
                                        <div class="col-sm-10">
                                            <select class="bulletin_tag" name="bulletin_tag">
                                            <option value="PETAKOM" {{ old('bulletin_tag', $bulletin->bulletin_tag) == 'PETAKOM' ? 'selected' : '' }}>PETAKOM</option>
                                            <option value="FKOM" {{ old('bulletin_tag', $bulletin->bulletin_tag) == 'FKOM' ? 'selected' : '' }}>FKOM</option>
                                            </select>
                                            <!-- refer  https://stackoverflow.com/questions/38461677/what-is-the-best-practice-to-show-old-value-when-editing-a-form-in-laravel-->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bulletin_link" class="col-sm-2 col-form-label text-right">URL</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="url" name="bulletin_link" value="{{$bulletin->bulletin_link}}">
                                        </div>
                                    </div>    
                                    <div class="form-group">
                                        <label for="bulletin_excerpt" class="col-sm-2 col-form-label text-right">Excerpt</label>
                                        <div>
                                            <textarea class="form-control" rows="4" name="bulletin_excerpt">{{$bulletin->bulletin_excerpt}}</textarea>
                                        </div>
                                    </div>                                                                
                                </div>

                                <div class="col-lg-6">
                                    
                                    <div class="form-group">
                                        <label for="bulletin_detail">Details</label>
                                        <div>
                                            <textarea class="form-control" rows="4" name="bulletin_detail">{{$bulletin->bulletin_detail}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="bulletin_image">Images</label>
                                        <div class="custom-file mb-3">
                                            <!-- <input type="file" class="custom-file-input" name="bulletin_image">
                                            <label class="custom-file-label" for="bulletin_image">Choose file</label> -->
                                            <div class="image">
                                                <label><h4>Add image</h4></label>
                                                <input type="file" name="bulletin_image" class="form-control">
                                                <img src="{{ asset('uploads/images/'.$bulletin->bulletin_image) }}" width="70px" height="70px" alt="Image">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
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
                                    </div> -->
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