<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>e-Directory</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cs-skin-elastic.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <h2 style="color: #fff;">eDirectory</h2>
            </div>
            <div class="login-form">
                @if(session('success'))
                    <div class="col-sm-12">
                        <div class="alert  alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                @endif
                <form method="post" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label>Names</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        @error('name')
                        <div style="color:#FF0000;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        @error('email')
                        <div style="color:#FF0000;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" >
                        @error('password')
                        <div style="color:#FF0000;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password Confirmation</label>
                        <input type="password" class="form-control" name="password_confirmation">

                    </div>

                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                    <div class="social-login-content">
                        <div class="social-button">
                            <button type="button" class="btn social google-plus btn-flat btn-addon mb-3"><i class="ti-google"></i>Sign in with Google</button>
                        </div>
                    </div>
                    <div class="register-link m-t-15 text-center">
                        <p>Already have account ? <a href="{{ route('login') }}"> Sign in</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>

