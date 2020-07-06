@extends('admin.index')
@section('admin_content')
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40 mg-t-50">
                <h6 class="card-body-title">Post </h6>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered table-primary mg-b-0">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Video</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td>{!! Embed::make($post->youtobe)->parseUrl()->getIframe() !!}</td>
                                <td>
                                    @if($post->status==1)
                                        <a href="{{route('unpublish',$post->id)}}" class="btn btn-danger">Publish</a>
                                    @else
                                        <a href="{{route('publish',$post->id)}}" class="btn btn-secondary">UnPublish</a>
                                    @endif

                                        <a href="{{route('delete',$post->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- table-responsive -->
            </div>
        </div><!-- sl-pagebody -->

    </div><!-- sl-mainpanel -->
@endsection
