@extends('admin.index')
@section('admin_content')
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40 mg-t-25">
                <h6 class="card-body-title">{{$post_details->title}}</h6>

                <dl class="row">
                    <dt class="col-sm-3 tx-inverse">Description</dt>
                    <dd class="col-sm-9">{{$post_details->description}}</dd>
                    <br/>
                    <br/>
                    <br/>
                    <dt class="col-sm-3 text-truncate tx-inverse">Youtobe / PHOTO</dt>
                    <dd class="col-sm-9">
                        @if($post_details->youtobe == '')
                            <img src="{{asset('/upload/'.$post_details->photo)}}" width="400">
                        @else
                            {!! Embed::make($post_details->youtobe)->parseUrl()->getIframe() !!}
                        @endif
                    </dd>

                </dl>
            </div><!-- card -->
        </div><!-- sl-pagebody -->

    </div><!-- sl-mainpanel -->
@endsection
