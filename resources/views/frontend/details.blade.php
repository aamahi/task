@extends('frontend.index')
@section('content')
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div>
                    <h2>{{$post->title}}</h2>
                    @if($post->youtobe =='')--}}
                        <img src="{{asset('upload/'.$section2Last->photo)}}" width="100%" height="210px;">
                    @else
                        {!! Embed::make($post->youtobe)->parseUrl()->getIframe() !!}
                    @endif
{{--                    <img src="{{asset('upload/'.$post->photo)}}" width="100%">--}}
<br/>
                    <p>{{$post->description}}</p>

                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                    <div class="addthis_inline_share_toolbox_h1mm"></div>

                    <!-- Go to www.addthis.com/dashboard to customize your tools -->

                </div>
            </div>
        </div>
    </main>
@endsection
