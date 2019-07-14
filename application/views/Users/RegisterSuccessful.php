<?php defined('BASEPATH') OR exit('No direct script access allowed');  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>suc</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>Public/third_party/Login/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Public/third_party/Login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Public/third_party/Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Public/third_party/Login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Public/third_party/Login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Public/third_party/Login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Public/third_party/Login/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Public/third_party/Login/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="<?php echo base_url() ?>Public/third_party/Login/images/img-01.png" alt="IMG">
            </div>
            <?= form_open("Register/submit", array("class" => "login100-form validate-form")) ?>
            <span class="login100-form-title">
						Member Register
					</span>

            <div class="wrap-input100 validate-input" data-validate = "Username is required">
                <input class="input100" type="text" name="username" placeholder="Username">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Password is required">
                <input class="input100" type="password" name="pass" placeholder="Password">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Please confirm your password">
                <input class="input100" type="password" name="confirmpass" placeholder="Confirm Password">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <input class="input100" type="text" name="email" placeholder="Email">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
            </div>

            <div class="container-login100-form-btn">
                <input type="submit" value="Register" class="login100-form-btn" />
            </div>

            <div class="text-center p-t-136">
                <a class="txt2" href="Login">
                    Already have an account?
                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                </a>
            </div>
            </form>
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="<?php echo base_url() ?>Public/third_party/Login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url() ?>Public/third_party/Login/vendor/bootstrap/js/popper.js"></script>
<script src="<?php echo base_url() ?>Public/third_party/Login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url() ?>Public/third_party/Login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url() ?>Public/third_party/Login/vendor/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })

</script>
<!--===============================================================================================-->
<script src="<?php echo base_url() ?>Public/third_party/Login/js/main.js"></script>

</body>
</html>