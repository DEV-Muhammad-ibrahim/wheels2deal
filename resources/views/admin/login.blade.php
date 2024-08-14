<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon"
        href="https://www.creativethemes.co.in/buy-creativetheme-html-template/organicfood-store/image-html/html/ecommerce/assets/images/favicon.ico">
    <title>Organic Admin Panel</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/assets2/vendors/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- page css -->
    <link href="{{ asset('css/pages/login-register-lock.css" rel="stylesheet') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('css/master-stylesheet.css') }}" rel="stylesheet">

    <!-- You can change the theme colors from here -->
    <link href="{{ asset('css/colors/default.css') }}" id="theme" rel="stylesheet">

</head>

<body class="card-no-border login-register">

    <div class="preloader">
        <div class="loader">
            <div class="lds-roller">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div>
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" id="loginform" action="{{ Route('login') }}"
                        method="POST">
                        @csrf
                        @method('POST')
                        <h3 class="box-title mb-20 text-center text-uppercase text-blue">ADMIN Template</h3>
                        @error('username')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <div class="form-group mb-30">
                            <div class="col-xs-12">
                                <input class="form-control text-center" type="email" required placeholder="email"
                                    name="email">
                            </div>
                        </div>

                        <div class="form-group mb-30">
                            <div class="col-xs-12">
                                <input class="form-control text-center" type="password" required=""
                                    placeholder="Password" name="password">
                            </div>
                        </div>

                        <div class="form-group row mb-30">
                            <div class="col-md-12">
                                <div class="checkbox checkbox-info pull-left pt-0">


                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="col-xs-12">
                                <button class="  btn-block btn-rounded2 waves-effect waves-light"
                                    type="submit">LogIn</button>
                            </div>
                        </div>




                    </form>

                </div>
            </div>
        </div>
    </section>



    <script src="../assets/vendors/jquery/jquery.min.js"></script>

    <script src="../assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="js/authentication.js"></script>

</body>



</html>
