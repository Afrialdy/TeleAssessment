<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <title>Tele Assessment | Sign Up</title>
</head>
<body>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="border p-3 bg-white shadow box-area">
            <div class="box">
                <div class="align-items-center">
                    <div class="logo text-center">
                        <h1>Tele Asessment</h1>
                    </div>
                    <div class="header-text mb-4 text-center">
                        <h3>Sign Up</h3>
                        <p class="text-secondary">Signing up is easy. It only takes a few steps</p>
                    </div>
                    <!-- Alert Section -->
                    <form action="{{ route('postRegister')  }}" method="POST">
                        @csrf
                        <div id="signupAlert" class="alert alert-success d-none fs-6 text-center" role="alert">
                            Signup successful! You will be redirected to login page.
                        </div>
                        <!-- End Alert Section -->
                            <div class="input-group mb-3">
                                <input type="text" name="fullname" class="form-control form-control-lg fs-6" placeholder="Full Name" id="name" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="email" name="email" class="form-control form-control-lg fs-6" placeholder="Email address" id="email" required>
                            </div>
                            <div class="input-group mb-5">
                                <input type="password" name="password" class="form-control form-control-lg fs-6" placeholder="Password" id="password" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="submit" name="signup" class="btn btn-lg btn-dark w-100 fs-6 text-uppercase btn-signup" value="Sign up">
                            </div>
                            <div class="text-center signup">
                            <h6 class="fw-lighter">Already have an account? <a href="{{ route('login') }}">Login</a></h6>
                            </div>
                    </form>
                </div>
            </div> 
        </div>
    </div>

    <script src="{{ asset('js/auth.js') }}"></script>

</body>
</html>
