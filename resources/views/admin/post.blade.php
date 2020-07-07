@extends('admin.index')
@section('admin_content')
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40 mg-t-50">
                <h6 class="card-body-title">Post </h6>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                @if ($message = Session::get('warning'))
                    <div class="alert alert-warning alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-hover table-bordered table-primary mg-b-0">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Video</th>
                            <th>Publish</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td>
                                    @if($post->youtobe == '')
                                        <img src="{{asset('/upload/'.$post->photo)}}" width="400">
                                    @else
                                        {!! Embed::make($post->youtobe)->parseUrl()->getIframe() !!}

                                    @endif
                                </td>
                                <td>
                                    @if($post->status==1)
                                        <a href="{{route('unpublish',$post->id)}}" class="btn btn-danger">Publish</a>
                                    @else
                                        <a href="{{route('publish',$post->id)}}" class="btn btn-secondary">UnPublish</a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('delete',$post->id)}}" class="btn btn-danger"><i class="fa fa-trash-o"></i></a><br/>
                                    <a href="{{route('post_details',$post->id)}}" class="btn btn-success"><i class="fa fa-eye"></i></a>
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
