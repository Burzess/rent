<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
    <style>
        .invalid-feedback {
            color: #e3342f;
            font-size: 0.875em;
            margin-top: -15px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    @if (session('signupSuccess'))
        <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
        <script>
            iziToast.success({
                title: 'Success',
                message: 'Signup berhasil! Silakan melakukan login.',
                position: 'topRight',
                timeout: 5000
            });
        </script>
    @endif

    <div class="container">
        <div class="banner-section">
            <img src="{{ asset('img/luffy_face.png') }}" alt="Banner">
            <div class="text">Welcome to GOKGOK. The best rental places in East Java.</div>
        </div>
        <div class="form-section">
            <h2>Sign In</h2>
            @session('error')
                <div class="error invalid-feedback" role="alert">
                    {{ $value }}
                </div>
            @endsession
            <form id="login-form" action="{{ route('login.post') }}" method="post">
                @csrf
                <div>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                    @error('email')
                        <span class="error invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    @error('password')
                        <span class="error invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <button type="submit" class="signin">Sign In</button>
            </form>
            <p class="mb-1">
                <a href="#">Forgot Your Password?</a>
            </p>
            <p>Don't have an account? <a href="{{ route('signup') }}">Sign Up</a></p>
        </div>
    </div>

    <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>

</body>

</html>
