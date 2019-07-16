<div id="firstElementBody" class="limiter">
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
                    <input class="input100" type="text" name="username" value="<?= set_value('username'); ?>" placeholder="Username">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="pass" <?= set_value('pass'); ?> placeholder="Password">
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
                    <input class="input100" type="text" name="email" value="<?= set_value('email'); ?>"  placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="container-login100-form-btn">
                    <input type="submit" name="submit" value="Register" class="login100-form-btn" />
                </div>

                <ul class="mt-4" style="color: red; list-style-type: circle">
                    <?php
                    $e = validation_errors();
                    $e = str_replace('<p>', '<li>', $e);
                    $e = str_replace('</p>', '</li>', $e);
                    echo $e;
                    ?>
                </ul>


                <div class="text-center p-t-136">
                    <a class="txt2" href="<?= base_url() ?>Login">
                        Already have an account?
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>