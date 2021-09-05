<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>login</title>
  
  <!-- Google Font: Source Sans Pro -->
  <!-- Font Awesome -->
  <!-- Theme style -->
  <script src="{{url('target/js/jquery-1.11.1.min.js')}}"></script> 
  <script src="{{url('target/js/sweet.js')}}"></script>
  <script src="{{url('target/js/.js')}}"></script>
  <script src="{{url('jquery-ui/jquery-ui.min.js')}}"></script>
  <link rel="stylesheet" href="{{url('target/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('target/css/bootstrap.min.css')}}"> 
    <link rel="stylesheet" href="{{url('target/css/login.css')}}">
    <link rel="stylesheet" href="{{url('target/css/templatemo_misc.css')}}">
	<link rel="stylesheet" href="{{url('target/css/templatemo_style.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<!--issues design-->
<link rel="stylesheet" href="{{url('target/isu/css/templatemo-style.css')}}">
<script src="{{url('target/isu/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
<!--end of issues design-->

    
   	<!-- JavaScripts -->   
     <!-- lightbox -->
	<script src="{{url('target/js/templatemo_custom.js')}}"></script> <!-- lightbox -->
  <!-- overlayScrollbars -->
  <script>
  $('document').ready(function(){

 
 $('#login').click(function(d){

  d.preventDefault();

  var pass=$('#pass').val();
  var username=$('#user').val();
  swal(pass,username,"info");
  if(pass!="" && username!="")
  {
  $.get("eng/controllers/controller.login.php",
  {
    pass: pass,
    username: username
  },
  function(data){
 
  });
}
else{
     swal("all fields are required","","info");

}


 })

  })


  </script>
</head>
<body  class="hold-transition login-page">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
        <div class="card">
                <div class="card-header text-center"><img src="{{url('target/images/acc.png')}}" alt="login" class="brand-image img-circle elevation-1" style="opacity: 1"></div>

                <div class="card-body login-card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="input-group mb-4">
                            
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required autocomplete="email" autofocus>
                                <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fa fa-envelope"></span>
                               </div>
                               </div>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                       
                        </div>

                        <div class="input-group mb-4">

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required autocomplete="current-password">
                                <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fa fa-lock"></span>
                               </div>
                               </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
</div>

                        <div class="row">
                        <div class="col-ms-1">
                        <div class="form-check">
                                <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} >

                               
                                </div>
                            </div>
                            </div>
                            <div class="col-ms-3">
                                <button type="submit" class="btn btn-primary btn-block" >
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</htm>
