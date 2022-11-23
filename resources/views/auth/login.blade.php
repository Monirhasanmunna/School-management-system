<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('auth_assets/fonts/icomoon/style.css') }}">

    <!-- <link rel="stylesheet" href="css/owl.carousel.min.css"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('auth_assets/css/bootstrap.min.css')}}">
    
    <!-- Style -->

    <link rel="stylesheet" href="{{ asset('auth_assets/css/style.css') }}">

    <title>Education Login</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{asset('auth_assets/images/undraw_remotely_2j6y.svg')}}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Welcome Back</h3>
              <p class="mb-4">For getting your educational information enter your email and password</p>
            </div>
            <form action="{{ route('login') }}" method="post">
              @csrf
              <div class="form-group first">
                <label for="username">E-mail or Username</label>
                <input type="email" class="form-control" id="username" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" required autocomplete="current-password">
                
              </div>
              
              <div class="d-flex mb-4 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <input type="submit" value="Log In" class="btn btn-block btn-primary">
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>


    <script src="{{asset('auth_assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('auth_assets/js/popper.min.js')}}"></script>
    <script src="{{asset('auth_assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('auth_assets/js/main.js')}}"></script>
  </body>
</html>

