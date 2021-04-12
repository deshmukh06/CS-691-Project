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
                                        <h6 class="sc_item_subtitle sc_title_subtitle sc_align_center sc_item_title_style_default">Already have account?</h6>
                                        <h2 class="sc_item_title sc_title_title sc_align_center sc_item_title_style_default">Login here</h2>
                                    </div>

                                    <?php
                                        $flashRender = $this->Flash->render();

                                        if (!empty($flashRender)) {
                                            echo $flashRender;
                                        }
                                    ?>

                                    <div role="form" class="wpcf7" id="wpcf7-f1059-p144-o1" lang="en-US" dir="ltr">
                                        <div class="screen-reader-response" role="alert" aria-live="polite"></div>

                                        <?= $this->Form->create(null, ['id' => 'form_cust_login', 'class' => 'wpcf7-form init', 'method' => 'post', 'autocomplete' => 'off']) ?>
                                        <div style="display: none;">
                                            <input type="hidden" name="role_id" value="2">
                                        </div>
                                        <div class="contact_us">
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
                                                <button type="submit" class="wpcf7-form-control wpcf7-submit sc_button_hover_slide_left" name="login" value="Log in">Log in</button>
                                                <span class="ajax-loader"></span>
                                            </div>

                                            <div class="flex">
                                                <div class="row">
                                                    <p class="post_meta_item">
                                                        <a style="color: #ffa752" href="#">Lost your password?</a> |
                                                        <a style="color: #ffa752" href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'register', $roleId]) ?>">Don't have Account, Register Here!</a>
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
        $('#form_cust_login').validate({
            ignore: [],
            rules: {
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required: true
                }
            },
            messages: {
                email: {
                    required: 'Email is required!',
                    email: "Please enter a valid email address!"
                },
                password: {
                    required: 'Password is required!'
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
