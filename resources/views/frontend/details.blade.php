@extends('frontend.index')
@section('content')
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div>
                    <img src="{{asset('upload/img.jpg')}}" width="100%">
                    <h2>Body</h2>
                    <p>To nest your content with the default grid, add a new .row and set of .col-sm-* columns within an existing .col-sm-* column. Nested rows should include a set of columns that add up to 12 or fewer (it is not required that you use all 12 available columns).</p>
                    <i>icon</i>
                </div>
            </div>
        </div>
    </main>
@endsection
