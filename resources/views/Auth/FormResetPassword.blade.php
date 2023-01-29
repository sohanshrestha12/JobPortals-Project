<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change Password</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @vite(['resources/js/app.js'])

</head>

<body>
    <header>
        <div class="container">
            <nav id="navbar">
                <h1 class="header1"><span class="header1" style="color: var(--main-color)">J</span>ob Portals</h1>
            </nav>
        </div>
    </header>
    <section id="ForgotPasswordForm">
        <div class="container">
            <div class="row justify-content-center align-content-center" style="height: 80vh">
                <div class="col-md-4 overflow-hidden shadow bg-white rounded p-4">
                    <form action="{{ route('ForgotResetPassword') }}" method="post">
                        @csrf
                        @if (Session::has('ResetFail'))
                            <div class="alert alert-danger" role="alert">
                                <p class="paragraph p-0 m-0">{{ Session::get('ResetFail') }}</p>
                            </div>
                        @endif
                        <h2 class="header2" style="color:var(--main-color);">Reset Password</h2>
                        <hr
                            style="margin-bottom:20px;background-color: rgb(171, 171, 171)!important;height: 0.7px;border:none;opacity: 0.5;margin-left: -15px;width: 511px;">
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="input-group has-validation mb-4">
                            <label for="email" class="paragraph">Email</label>
                            <input type="email" name="email"
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{ $email ?? old('email') }}" readonly>
                            @error('email')
                                <span class="invalid-feedback"
                                    style="margin-left:10px;font-size:1.3rem">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-group has-validation mb-4">
                            <label for="password" class="paragraph">Password</label>
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                                <span class="invalid-feedback"
                                    style="margin-left:10px;font-size:1.3rem">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-group has-validation">
                            <label for="password_confirmation" class="paragraph">Confirm Password</label>
                            <input type="password" name="password_confirmation"
                                class="form-control @error('password_confirmation') is-invalid @enderror">
                            @error('password_confirmation')
                                <span class="invalid-feedback"
                                    style="margin-left:10px;font-size:1.3rem">{{ $message }}</span>
                            @enderror
                        </div>
                        <hr
                            style="margin-bottom:23px;margin-top:28px;background-color: rgb(171, 171, 171)!important;height: 0.7px;border:none;opacity: 0.5;margin-left: -15px;width: 511px;">
                        <div class="ResetButton">
                            <button type="submit">Reset Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="box-1">
                <h1>JobPortals</h1>
            </div>
            <hr>
            <div class="box-2">
                <div class="box-2-1">
                    <h2 class="header2">Need Help?</h2>
                    <i class="uil uil-phone"></i>
                    <span class="paragraph">Call Us: 98********</span>
                </div>
                <div class="box-2-2">
                    <h2 class="header2">Email:</h2>
                    <i class="uil uil-message"></i>
                    <span class="paragraph">info@test.com / support@test.com</span>
                </div>
                <div class="box-2-3">
                    <h2 class="header2">Follow Us</h2>
                    <a href="#"><i class="uil uil-facebook"></i></a>
                    <a href="#"><i class="uil uil-twitter"></i></a>
                    <a href="#"><i class="uil uil-linkedin"></i></a>
                    <a href="#"><i class="uil uil-instagram-alt"></i></a>
                    <a href="#"><i class="uil uil-github"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
