@extends('frontend.index')
@section('content')
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 border-right-1 border border-dark bg-danger">
                <h3>Section 1</h3>
                <div class="row">
                    <div class="col-md-6 bg-info">
                        <img src="{{asset('upload/img.jpg')}}" width="100%">
                        <h4>Body</h4>
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
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{asset('upload/img.jpg')}}" width="100%">
                                <h4>Body</h4>
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset('upload/img.jpg')}}" width="100%">
                                <h4>Body</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 bg-primary">
                <h4>Section 2</h4>
                <div class="row">
                    <div>
                        <img src="{{asset('upload/img.jpg')}}" width="100%">
                        <h2>Body</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{asset('upload/img.jpg')}}" width="100%">
                            <h4>Body</h4>
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('upload/img.jpg')}}" width="100%">
                            <h4>Body</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{asset('upload/img.jpg')}}" width="100%">
                            <h4>Body</h4>
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('upload/img.jpg')}}" width="100%">
                            <h4>Body</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
