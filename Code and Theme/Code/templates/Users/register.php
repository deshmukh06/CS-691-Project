<div class="page_content_wrap scheme_default">
    <div class="content_wrap">
        <div class="content">
            <article id="post-144" class="post_item_single post_type_page post-144 page type-page status-publish hentry">
                <div class="post_content entry-content">
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-8 vc_col-lg-offset-2 vc_col-md-offset-2 vc_col-sm-offset-2 sc_layouts_column_icons_position_left">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div id="sc_title_139639600" class="sc_title color_style_default sc_title_default" style="margin-bottom: 5.5em !important;">
                                        <h6 class="sc_item_subtitle sc_title_subtitle sc_align_center sc_item_title_style_default">Don't have account?</h6>
                                        <h2 class="sc_item_title sc_title_title sc_align_center sc_item_title_style_default">Register here</h2>
                                    </div>

                                    <?php
                                        $role_id = (isset($roleId) && !empty($roleId)) ? $roleId : "";

                                        $flashRender = $this->Flash->render();

                                        if (!empty($flashRender)) {
                                            echo $flashRender;
                                        }
                                    ?>

                                    <div role="form" class="wpcf7" id="wpcf7-f1059-p144-o1" lang="en-US" dir="ltr">
                                        <div class="screen-reader-response" role="alert" aria-live="polite"></div>

                                        <?= $this->Form->create(null, ['id' => 'form_cust_registration', 'class' => 'wpcf7-form init', 'method' => 'post', 'autocomplete' => 'off']) ?>
                                            <div style="display: none;">
                                                <input type="hidden" name="role_id" value="<?= $role_id ?>">
                                            </div>
                                            <div class="contact_us">
                                                <div class="flex">
                                                    <div class="itm row">
                                                        <span class="wpcf7-form-control-wrap">
                                                            <input type="text" name="first_name" autocomplete="off" id="first_name" size="40" class="wpcf7-form-control wpcf7-text" placeholder="First Name *">
                                                        </span>
                                                    </div>
                                                    <div class="itm row">
                                                        <span class="wpcf7-form-control-wrap">
                                                            <input type="text" name="last_name" autocomplete="off" id="last_name" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Last Name *">
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="flex">
                                                    <div class="itm row">
                                                        <span class="wpcf7-form-control-wrap">
                                                            <input type="email" name="email" id="email" autocomplete="off" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Email *">
                                                        </span>
                                                    </div>
                                                    <div class="itm row">
                                                        <span class="wpcf7-form-control-wrap">
                                                            <input type="password" name="password" autocomplete="off" id="password" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Password *">
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="sc_form_field sc_form_field_button sc_form_field_submit" style="text-align: left !important;">
                                                    <input type="submit" value="Register" class="wpcf7-form-control wpcf7-submit sc_button_hover_slide_left">
                                                    <span class="ajax-loader"></span>
                                                </div>

                                                <div class="flex">
                                                    <div class="row">
                                                        <p class="post_meta_item">
                                                            <a style="color: #ffa752" href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'login', $role_id]) ?>">Already have Account, Login Here!</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
                                        <?= $this->Form->end() ?>

                                    </div>

                                    <div class="vc_empty_space  vc_custom_1504180345287 height_large" style="height: 32px">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>

<script>
    jQuery(function ($) {

        $.validator.addMethod(
            "passwordRequirements",
            function(value, element) {
                var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\\$%\\^&\\*])(?=.{9,})")
                console.log(value);
                console.log(strongRegex.test(value));
                return strongRegex.test(value);
            },
            "Password must contain at least 9 characters including uppercase and lowercase letters, numbers and at least one special characters from (!,@,#,$,%,^,&,*)"
        );

        $('#form_cust_registration').validate({
            ignore: [],
            rules: {
                first_name: {
                    required: true
                },
                last_name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required: true,
                    minlength: 9,
                    passwordRequirements: true
                }
            },
            messages: {
                first_name: {
                    required: "First Name is required!"
                },
                last_name: {
                    required: "Last Name is required!"
                },
                email: {
                    required: 'Email is required!',
                    email: "Please enter a valid email address!"
                },
                password: {
                    required: 'Password is required!',
                    minlength: 'Password must contain at least 9 characters!',
                    passwordRequirements: 'Password must contain at least 9 characters including uppercase and lowercase letters, numbers and at least one special characters from (!,@,#,$,%,^,&,*).'
                }
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('wpcf7-not-valid-tip');
                element.closest('.wpcf7-form-control-wrap').append(error);
            }
        });
    });
</script>
