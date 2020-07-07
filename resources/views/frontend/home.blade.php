@extends('frontend.index')
@section('content')
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 mr-0" style="border-right: 1px solid #000000">
                <h3>Section 1</h3>
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('upload/'.$section1Last->photo)}}" width="100%" height="220px;">
{{--                        <i class="fa fa-user" style="position: absolute" ></i>--}}
                        <a href="{{route('details',$section1Last->id)}}"><h5>{{$section1Last->title}}</h5></a>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            @foreach($section1 as $post)
                                <div class="col-md-6">
                                    <img src="{{asset('upload/'.$post->photo)}}" height="120px;" width="100%">
                                    <a href="{{route('details',$post->id)}}"><p>{{$post->title}}</p></a>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-left:10px;">
                <h4>Section 2</h4>
                <div class="row">
                    <div>
{{--                        @if($section2Last->youtobe =='')--}}
                            <img src="{{asset('upload/'.$section2Last->photo)}}" width="100%" height="210px;">
{{--                        @else--}}
{{--                            {!! Embed::make($section2Last->youtobe)->parseUrl()->getIframe() !!}--}}
{{--                        @endif--}}
                        <a href="{{route('details',$section2Last->id)}}"><h5>{{$section2Last->title}}</h5></a>
                    </div>
                    <div class="row">
                        @foreach($section2 as $post)
                                <div class="col-md-6">
{{--                                    @if($post->youtobe =='')--}}
                                        <img src="{{asset('upload/'.$post->photo)}}" height="120px;" width="100%">
{{--                                    @else--}}
{{--                                        <div style="height: 1px;">--}}
{{--                                            {!! Embed::make($post->youtobe)->parseUrl()->getIframe() !!}--}}
{{--                                        </div>--}}
{{--                                    @endif--}}
                                    <a href="{{route('details',$post->id)}}"><p>{{$post->title}}</p></a>
                                </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
