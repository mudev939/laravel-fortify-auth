<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Two Factor Auth Challenge</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <div class="container">
        <div class="login-container">
          <h2 class="text-center mb-4">Two Factor Auth Challenge</h2>
          <form action="{{route('two-factor.login')}}" method="POST" class="login-form">
            @csrf

            <div class="form-group">
              <label for="username">Code:</label>
              <input type="text" value="{{old('code')}}" class="form-control" id="code" name="recovery_code" placeholder="Enter your code">

              @error("code")
              <span class="text-danger">{{$message}}</span>

              @enderror

            </div>

            <button type="submit" class="btn btn-primary btn-login">Submit</button>
          </form>
        </div>
      </div>


    <script src="{{ asset('js/app.js') }}"></script>


</body>

</html>
