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
          <h2 class="text-center mb-4">Profile</h2>

          @if (session('status') == 'two-factor-authentication-enabled')
   <div class="alert alert-success">
        Two factor authentication enabled
    </div>
@endif

@if (session('status') == 'two-factor-authentication-disabled')
<div class="alert alert-danger">
     Two factor authentication disabled
 </div>
@endif


          <form action="{{route('two-factor.enable')}}" method="POST" class="login-form">
            @csrf

            @if(!auth()->user()->two_factor_secret)
            <button type="submit" class="btn btn-primary">Enable</button>
            @else

            {!! auth()->user()->twoFactorQrCodeSvg(); !!}
            @method('DELETE')
            <ul>
                @foreach((array) auth()->user()->recoveryCodes() as $code)
<li>{{$code}}</li>
                @endforeach
            </ul>
            <button type="submit" class="btn btn-danger">Disable</button>


            @endif





          </form>
        </div>
      </div>


    <script src="{{ asset('js/app.js') }}"></script>


</body>

</html>
