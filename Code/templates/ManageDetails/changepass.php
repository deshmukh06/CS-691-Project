<?php

$userDetails = $this->getRequest()->getSession()->read('SESS_USER');
?>

<div class="page_content_wrap scheme_default">
    <div class="content_wrap">
        <div class="content" style="float: right !important; width: 770px;">
            <div class="list_products shop_mode_thumbs">

                <div class="woocommerce-notices-wrapper"></div>

                <article id="post-49" class="post_item_single post_type_page post-49 page type-page status-publish hentry">
                    <div class="post_content entry-content">
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                                <div class="vc_column-inner vc_custom_1477912247150">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <h5>Verify your identity first to change your password</h5>
                                                Please enter your email address to verify your identity                                                                   
                                                <br><input type="email" size=50>
                                                <br>
                                                <br>Security question: Whats your mother's maiden name:
                                                <br><input type="email" size=50></br>
                                                <br><input type="Submit" value="verify" onclick="Success();">
                                                <script>
                                                     function Success(){
                                                        alert("Verification otp sent to your registered email address!");
                                                        
                                                        }
                                                </script>
                                                <br>
                                                <br>Please enter OTP sent your email address:
                                                <br><input type="number" size=40 name="otp">
                                                <br>
                                                <br><input type="Submit" value="Verify OTP" onclick= "window.location.href='http://localhost/code/manage-details/editpass';">
                                                <br>
                                                <br>
                                                <br>
                                                







                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>

        <div class="sidebar sidebar_left widget_area" role="complementary" style="margin-top: 150px !important; margin-bottom: 150px !important;">
            <div class="sidebar_inner">
                <aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
                    <h5 class="widget_title">Change Password</h5>

                    <?php if ($userDetails->role_id === CUSTOMER_ROLE_ID) { ?>
                        <ul class="product-categories">
                        <li class="cat-item cat-item-38"><a href="<?= $this->Url->Build(['controller' => 'ManageDetails', 'action' => 'view_details']) ?>">Manage Account Details</a></li>
                            <li class="cat-item cat-item-39"><a href="<?= $this->Url->Build(['controller' => 'ManageDetails', 'action' => 'changepass']) ?>">Change Password</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Users', 'action' => 'logout']) ?>">Logout</a></li>
                        </ul>

                    <?php } else if ($userDetails->role_id === MUSICIAN_ROLE_ID) { ?>

                        <ul class="product-categories">
                            <li class="cat-item cat-item-38"><a href="<?= $this->Url->Build(['controller' => 'ManageDetails', 'action' => 'view_details']) ?>">Manage Account Details</a></li>
                           <li class="cat-item cat-item-39"><a href="<?= $this->Url->Build(['controller' => 'ManageDetails', 'action' => 'changepass']) ?>">Change Password</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Users', 'action' => 'logout']) ?>">Logout</a></li>
                        </ul>

                    <?php } else { } ?>
                </aside>
            </div>
        </div>
    </div>
</div>
