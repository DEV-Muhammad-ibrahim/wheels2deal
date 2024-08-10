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
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <title>Organic Admin Panel</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- page css -->
    <link href="css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/master-stylesheet.css" rel="stylesheet">

    <!-- You can change the theme colors from here -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">

</head>

<body class="card-no-border">

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

    <section id="wrapper">
        <div class="login-register">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" id="loginform" action="{{ Route('register') }}"
                        method="POST">
                        @csrf
                        @method('POST')
                        <h3 class="box-title mb-20 text-center">Register</h3>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control text-center" type="text" required placeholder="Username"
                                    name="name">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control text-center" type="email" required placeholder="Email"
                                    name="email">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control text-center" type="password" required placeholder="Password"
                                    name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control text-center" type="password" required
                                    placeholder="Confirm Password" name="confirm_password">
                            </div>
                        </div>

                </div>
                <div class="form-group text-center pb-20">
                    <div class="col-xs-12">
                        <button class="btn-block btn-rounded2" type="submit">Sign Up</button>
                    </div>
                </div>

                </form>
            </div>
        </div>
        </div>
    </section>

    <script src="../assets/vendors/jquery/jquery.min.js"></script>

    <script src="../assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/authentication.js"></script>

</body>

</html>
