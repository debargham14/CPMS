<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">

        <div class="row">
            <div class="col"></div>

            <!-- Grid Column for Form -->
            <div class="col-7 align-self-center">

                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">

                    <!-- Login Tab -->
                    <li class="nav-item">
                        <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login"
                           aria-selected="true"><h4 class="h4-responsive"><strong>Login</strong></h4></a>
                    </li>

                    <!-- Register Tab -->
                    <li class="nav-item">
                        <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register"
                           aria-selected="false"><h4 class="h4-responsive"><strong>Register</strong></h4></a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <!-- Login Form -->
                        <form class="text-center border border-light p-5" action="#!">

                            <!-- Email -->
                            <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

                            <!-- Password -->
                            <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

                            <div class="d-flex justify-content-around">
                                <div>
                                    <!-- Remember me -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                                        <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                                    </div>
                                </div>
                                <div>
                                    <!-- Forgot password -->
                                    <a href="">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Login button -->
                            <button class="btn btn-info btn-block my-4" type="submit">Login</button>

                            <!-- Register -->
                            <p>Not a member?
                                <a href="">Register</a>
                            </p>

                            <!-- Social login -->
                            <p>or login with:</p>

                            <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
                            <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
                            <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
                            <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

                        </form>
                        <!-- Login Form -->

                    </div>
                    <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">

                        <!-- Register Form -->
                        <form class="text-center border border-light p-5" action="#!">
                            <div class="form-row mb-4">
                                <div class="col"></div>
                                <div class="col">
                                    <!-- Register as Student-->
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="defaultInline1" name="inlineDefaultRadiosExample" checked>
                                        <label class="custom-control-label" for="defaultInline1">Student</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Register as Teacher-->
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="defaultInline2" name="inlineDefaultRadiosExample">
                                        <label class="custom-control-label" for="defaultInline2">Teacher</label>
                                    </div>
                                </div>
                                <div class="col"></div>
                            </div>

                            <div class="form-row mb-4">
                                <div class="col">
                                    <!-- First name -->
                                    <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name">
                                </div>
                                <div class="col">
                                    <!-- Last name -->
                                    <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name">
                                </div>
                            </div>

                            <!-- E-mail -->
                            <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

                            <!-- Password -->
                            <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                            <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                                At least 8 characters and 1 digit
                            </small>

                            <!-- Phone number -->
                            <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
                            <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                                Optional - for two step authentication
                            </small>

                            <!-- Newsletter -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
                                <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>
                            </div>

                            <!-- Register button -->
                            <button class="btn btn-info my-4 btn-block" type="submit">Register</button>

                            <!-- Social register -->
                            <p>or register with:</p>

                            <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
                            <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
                            <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
                            <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

                            <hr>

                            <!-- Terms of service -->
                            <p>By clicking
                                <em>Sign up</em> you agree to our
                                <a href="" target="_blank">terms of service</a>

                        </form>
                        <!-- Register Form -->

                    </div>

                </div>

            </div>
            <div class="col"></div>
        </div>

    </div>


<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>
</html>
