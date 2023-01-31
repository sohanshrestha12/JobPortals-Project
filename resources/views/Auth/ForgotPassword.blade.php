<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>
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
                <form action="login" method="post">
                    @csrf
                    <div class="ResetFormLogin">
                        <div style="display:inline-block">
                            <input type="email" class="form-control @error('logemail') is-invalid @enderror"  name="logemail" placeholder="Email address">
                        </div>
                        <div style="display:inline-block">
                            <input type="password" class="form-control  @error('logpassword') is-invalid @enderror"  name="logpassword"  name="logpassword" placeholder="Password">
                        </div>
                        <div class="ResetFormLoginButton">
                            <button type="submit">Login</button>
                        </div>
                    </div>
                </form>
            </nav>
        </div>
    </header>
    <section id="ForgotPasswordForm">
        <div class="container">
            <div class="row justify-content-center align-content-center" style="height: 80vh">
                <div class="col-md-4 overflow-hidden shadow bg-white rounded p-4">
                    <form action="{{ route('ForgotPassword/link') }}" method="post">
                        @csrf
                        @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                <p class="paragraph m-0">{{Session::get('success')}}</p>
                            </div>
                        @endif
                        <h2 class="header2" style="color:var(--main-color);">Find Your Account</h2>
                        <hr
                            style="margin-bottom:20px;background-color: rgb(171, 171, 171)!important;height: 0.7px;border:none;opacity: 0.5;margin-left: -15px;width: 511px;">
                        <p class="paragraph mb-4">Enter your email address and we will send you a link to reset your
                            password.</p>
                        <div class="input-group has-validation">
                            <input type="email" name="ForgotEmail"
                                class="form-control @error('ForgotEmail') is-invalid @enderror">
                            @error('ForgotEmail')
                                <span class="invalid-feedback"
                                    style="margin-left:10px;font-size:1.3rem">{{ $message }}</span>
                            @enderror
                        </div>
                        <hr
                            style="margin-bottom:23px;margin-top:28px;background-color: rgb(171, 171, 171)!important;height: 0.7px;border:none;opacity: 0.5;margin-left: -15px;width: 511px;">
                        <div class="ForgotButtons">
                            <a href="{{ route('Cancel') }}">Cancel</a>
                            <button type="submit">Send Reset link</button>
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
