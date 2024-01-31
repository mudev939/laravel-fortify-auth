<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Password Confirmation</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <div class="container">
        <div class="login-container">
          <h2 class="text-center mb-4">Password Confirmation</h2>
          <form action="{{route('password.confirm')}}" method="POST" class="login-form">
            @csrf


            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">

              @error("password")
              <span class="text-danger">{{$message}}</span>

              @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-login">Confirm</button>
          </form>
        </div>
      </div>


    <script src="{{ asset('js/app.js') }}"></script>


</body>

</html>
