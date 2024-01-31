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
            <h2 class="text-center mb-4">Update Password</h2>
            <form action="{{ route('password.update') }}" method="POST" class="login-form">
                @csrf

                <input type="hidden" value="{{request()->route('token')}}" name="token"/>

                @if (session()->has('status'))
                    <div class="alert alert-success">{{ session()->get('status') }}</div>
                @endif

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" value="{{ request()->email }}" class="form-control" id="email" name="email"
                        placeholder="Enter your email">

                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password"  class="form-control" id="password" name="password"
                        placeholder="Enter your password">

                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>

                <div class="form-group">
                    <label for="password-confirmation">Password Confirmation:</label>
                    <input type="password"  class="form-control" id="password-confirmation" name="password_confirmation"
                        placeholder="Enter your password confirmation">

                    @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>

                <button type="submit" class="btn btn-primary btn-login">Update Password</button>
            </form>
        </div>
    </div>


    <script src="{{ asset('js/app.js') }}"></script>


</body>

</html>
