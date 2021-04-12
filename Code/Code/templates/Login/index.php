<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-6" style="background-color: #e73c30;">
            <img src="<?= $this->Url->build('/img/white.png') ?>" style="padding: 5.2em 1em;">
        </div>

        <div class="wrap-login100 p-6">
            <?= $this->Form->create(null, ['id' => 'frm_login', 'autocomplete' => 'off', 'class' => 'login100-form']); ?>
                <span class="login100-form-title">SSKB PORTAL</span>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="user_name" id="user_name" placeholder="Username" autocomplete="off">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="zmdi zmdi-account" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="password" id="password" placeholder="Password" autocomplete="off">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="zmdi zmdi-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="errorTxt" style="color: #ffffff">
                    <?php $flashRender = $this->Flash->render();
                    if (!empty($flashRender)) { ?>
                        <?= $flashRender  ?>
                    <?php } ?>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn btn-primary">
                        Login
                    </button>
                </div>
            <?php echo $this->Form->end(); ?>
            <div class="text-right pt-1">
                <p class="mb-0"><a href="<?= $this->Url->Build(['controller' => 'UserMaster', 'action' => 'forgot_password']) ?>" class="text-primary ml-1" style="text-align: center !important;">Forgot Password?</a></p>
            </div>
            <div class="text-center pt-3">
                <p class="text-dark mb-0">Not a member?<a href="<?= $this->Url->Build(['controller' => 'UserMaster', 'action' => 'register']) ?>" class="text-primary ml-1">Register here</a></p>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $("#frm_login").validate({ // initialize the plugin
            rules: {
                user_name: {
                    required: true
                },
                password: {
                    required: true
                }
            },
            messages: {
                user_name: {
                    required: 'Username is required!'
                },
                password: {
                    required: 'Password is required!'
                }
            },
            errorElement : 'div',
            errorLabelContainer: '.errorTxt'
        });
    });
</script>
