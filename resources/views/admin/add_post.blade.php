@extends('admin.index')
@section('admin_content')
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Add Post </h6>
                @if ($message = Session::get('warning'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-warning alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $error }}</strong>
                        </div>
                    @endforeach
                @endif
                <div class="form-layout">
                    <form action="{{route('add_post')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mg-b-25">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Title<span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="title"  placeholder="Enter Title">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Photo <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="file" name="photo" >
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Youtobe Video <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="youtobe" placeholder="Enter Youtobe link">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-8">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Description <span class="tx-danger">*</span></label>
                                    <textarea name="description" class="form-control">Enter Post Description</textarea>
                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Select Seciton <span class="tx-danger">*</span></label>
                                    <select class="form-control select2" name="section" data-placeholder="Choose country">
                                        <option disabled selected>Select Section</option>
                                        <option value="1">Section 1</option>
                                        <option value="2">Section 2</option>
                                    </select>
                                </div>
                            </div><!-- col-4 -->
                        </div><!-- row -->

                        <div class="form-layout-footer">
                            <button type="submit" class="btn btn-info mg-r-5">Submit Form</button>
                            <button class="btn btn-secondary">Cancel</button>
                        </div><!-- form-layout-footer -->
                    </form>
                </div><!-- form-layout -->
            </div><!-- card -->
        </div><!-- sl-pagebody -->

    </div><!-- sl-mainpanel -->
@endsection
