<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>LOGIN</title>

    <!-- vendor css -->
    <link href="{{asset('admin/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('admin/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{asset('admin/css/starlight.css')}}">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Admin <span class="tx-info tx-normal">Login</span></div>
          <br>
          <br>
          <form method="POST" action="{{ route('login') }}">
              @csrf
            <div class="form-group">
              <input type="text" class="form-control" name="email" placeholder="Enter your Email Address">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Enter your password">
            </div><!-- form-group -->
            <button type="submit" class="btn btn-info btn-block">Sign In</button>
        </form>
        <div class="mg-t-60 tx-center">Not yet a member? <a href="{{url('/register')}}" class="tx-info">Sign Up</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

  </body>
</html>
