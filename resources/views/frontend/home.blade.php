@extends('frontend.index')
@section('content')
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 mr-0" style="border-right: 1px solid red">
                <h3>Section 1</h3>
                <div class="row">
                    <div class="col-md-6 bg-info">
                        <img src="{{asset('upload/img.jpg')}}" width="100%">
                        <h4>Body</h4>
                        <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content</p>
                    </div>
                    <div class="col-md-6 bg-success">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{asset('upload/img.jpg')}}" width="100%">
                                <h4>Body</h4>
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset('upload/img.jpg')}}" width="100%">
                                <h4>Body</h4>
                            </div> <div class="col-md-6">
                                <img src="{{asset('upload/img.jpg')}}" width="100%">
                                <h4>Body section </h4>
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset('upload/img.jpg')}}" width="100%">
                                <h4>Heo second section </h4>
                            </div>
                        </div>
{{--                        <div class="row">--}}
{{--                            <div class="col-md-6">--}}
{{--                                <img src="{{asset('upload/img.jpg')}}" width="100%">--}}
{{--                                <h4>Body</h4>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <img src="{{asset('upload/img.jpg')}}" width="100%">--}}
{{--                                <h4>Body</h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-md-4 bg-primary ml-0">
                <h4>Section 2</h4>
                <div class="row">
                    <div>
                        <img src="{{asset('upload/img.jpg')}}" width="100%">
                        <h2>Body</h2>
                        <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{asset('upload/img.jpg')}}" width="100%">
                            <h4>Body</h4>
                        </div>
                        <div class="col-md-6">
                            <iframe width="100%" src="https://www.youtube.com/watch?v=5thGK7SQ2R0">
                            </iframe>
                            <h4>Body</h4>
                        </div> <div class="col-md-6">
                            <img src="{{asset('upload/img.jpg')}}" width="100%">
                            <h4>Body section </h4>
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('upload/img.jpg')}}" width="100%">
                            <h4>Heo second section </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
