<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link rel="stylesheet" href="{{ asset('loginPage/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('loginPage/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('loginPage/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('loginPage/css/style.css') }}">

    <title>Pendaftaran Siswa Baru - Darul Ulum Rembang</title>
</head>

<body>


    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('loginPage/images/bg-1.jpg');"></div>
        <div class="contents order-2 order-md-1">
            <div class="container">
                
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <h3><strong>PSB Darul Ulum Rembang</strong></h3>
                        <p class="mb-4">Silahkan masukkan username dan password.</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group first">
                                <label for="username">Username</label>
                                <input type="text" name="email"
                                    class="form-control @error('email') is-invalid @enderror" placeholder="Username"
                                    id="username">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group last mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                                    id="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-block btn-success">
                                {{ __('Login') }}
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>



    <script src="{{ asset('loginPage/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('loginPage/js/popper.min.js') }}"></script>
    <script src="{{ asset('loginPage/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('loginPage/js/main.js') }}"></script>
</body>

</html>
