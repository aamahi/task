<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Signup</title>

    <!-- vendor css -->
    <link href="{{asset('admin/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('admin/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('admin/lib/select2/css/select2.min.css')}}" rel="stylesheet">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{asset('admin/css/starlight.css')}}">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-md-100v">

      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Signup <span class="tx-info tx-normal">admin</span></div>
     <br>
     <br>
          <form action="{{route('register')}}" method="post">
              @csrf
              <div class="form-group">
                  <input type="text" name="name" class="form-control" placeholder="Enter your Name" required>
              </div><!-- form-group -->
              <div class="form-group">
                  <input type="email"  name="email" class="form-control" placeholder="Enter your Email" required>
              </div><!-- form-group -->
              <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Enter your Password" required>
              </div><!-- form-group -->
              <div class="form-group">
                  <input type="password" name="password_confirmation" class="form-control" placeholder="Enter your Confirm Pasword" required>
              </div><!-- form-group -->
              <button type="submit" class="btn btn-info btn-block">Sign Up</button>
          </form>

        <div class="mg-t-40 tx-center">Already have an account? <a href="{{url('/login')}}" class="tx-info">Sign In</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->
  </body>
</html>
