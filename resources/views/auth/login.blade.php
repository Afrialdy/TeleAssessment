<!-- login.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <title>Tele Assessment | Login</title>
    <link rel="icon" href="../img/logo/ta.png" type="image/x-icon">
</head>
<body>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="border p-3 bg-white shadow box-area">
            <div class="box">
                <div class="align-items-center">
                    <div class="logo text-center">
                        <h1>Tele Assessment</h1>
                    </div>
                    <div class="header-text mb-4 text-center">
                        <h3>Login</h3>
                        <p class="text-secondary">Sign in to continue.</p>
                    </div>
                    <form action="{{ route('postLogin') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="username" class="form-control form-control-lg fs-6" placeholder="Username" id="username" value="{{ old('username', session('username')) }}" required>
                        </div>
                        <div class="input-group mb-1">
                            <input type="password" name="password" class="form-control form-control-lg fs-6" placeholder="Password" id="password" required>
                        </div>
                        <div class="mb-3">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <div class="mba input-group mb-5 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck" name="remember" {{ old('remember') || session('remember') ? 'checked' : '' }}>
                                <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                            </div>
                            <div class="forgot">
                                <small><a href="#">Forgot Password?</a></small>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="submit" class="btn btn-lg btn-dark w-100 fs-6 text-uppercase btn-login" value="Login">
                        </div>
                        <div class="text-center signup">
                            <h6 class="fw-lighter">Don't have an account? <a href="{{ route('signup') }}">Sign Up</a></h6>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
