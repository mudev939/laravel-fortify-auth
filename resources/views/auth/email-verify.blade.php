<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <div class="container">
        <div class="login-container">
          <h2 class="text-center mb-4">Login</h2>
          <form action="{{route('verification.send')}}" method="POST" class="login-form">
            @csrf

            @if(session()->has('status'))
<div class="alert alert-success">{{session()->get('status')}}</div>
            @endif


            <h5>You must verify your email address</h5>


            <button type="submit" class="btn btn-primary btn-login">Re-send email verification</button>
          </form>
          <p class="text-muted text-center footer-text">Don't have an account? <a href="{{route('register')}}">Sign Up</a></p>
        </div>
      </div>


    <script src="{{ asset('js/app.js') }}"></script>


</body>

</html>
