<!doctype html>
<html class="no-js" lang="en">
    <head>
        @include('layouts.head')
    </head>

    <body>

        <div class="auth-wrapper">
            <div class="container-fluid h-100">
                <div class="row flex-row h-100 bg-white">
                    <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                        <div class="lavalite-bg">
                            <img class="w-100 h-100" src="{{asset('assets/img/auth/register-bg.jpg')}}">
                            <div class="lavalite-overlay"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                        <div class="authentication-form mx-auto">
                            <div>
                                <a href="register"><img src="{{asset('assets/src/img/logo_item.png')}}" style="display: block;margin-left: auto;margin-right: auto;margin-bottom: 25px;" alt=""></a>
                            </div>
                            <h3>Register</h3>
                            <p>Join us today! It takes only few steps</p>
                            <form action="../index.html">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email" required="">
                                    <i class="ik ik-user"></i>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" required="">
                                    <i class="ik ik-lock"></i>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password" required="">
                                    <i class="ik ik-eye-off"></i>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-left">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
                                            <span class="custom-control-label">&nbsp;I Accept <a href="#">Terms and Conditions</a></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="sign-btn text-center">
                                    <button class="btn btn-theme">Create Account</button>
                                </div>
                            </form>
                            <div class="register">
                                <p>Already have an account? <a href="login">Sign In</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
       @include('layouts.javascript')
    </body>
</html>
