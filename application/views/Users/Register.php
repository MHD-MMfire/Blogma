<div id="firstElementBody" class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="<?php echo base_url() ?>Public/third_party/Login/images/img-01.png" alt="IMG">
            </div>
            <?= form_open_multipart("Register/submit", array("class" => "login100-form validate-form")) ?>
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

                <div class="wrap-input100 validate-input" data-validate = "Blog name is required">
                    <input class="input100" type="text" name="blogname" value="<?= set_value('blogname'); ?>" placeholder="Your Blog name">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-address-card" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01" style="width: 4.3rem">Image</span>
                    </div>
                    <div class="custom-file">
                        <input class="input100 custom-file-input" accept=".png,.jpg,.gif" size="1" id="inputGroupFile01" type="file" name="userimg" />
                        <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
                    </div>
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