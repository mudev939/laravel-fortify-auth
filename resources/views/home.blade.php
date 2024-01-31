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
          <h2 class="text-center mb-4">Home</h2>
          <div   class="login-form">


            <p>Welcome {{auth()->user()->name}}<p>

            <a href="{{route('profile')}}">Go to Profile</a>


          </div>
        </div>
      </div>


    <script src="{{ asset('js/app.js') }}"></script>


</body>

</html>
