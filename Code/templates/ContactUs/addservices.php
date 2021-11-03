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
                                                <table><br>Music Company: <input type="text" size= 100 name="company_name"></br>
                                                <br>Services: &nbsp;&nbsp;&nbsp;<input type="text" size=100 name="services"></br>
                                                <br>Musicians: <input type="text" size= 100 name="company_name"></br>
                                                <br>Contact No:&nbsp;&nbsp;<input type="number" size=100 name="contact"></br>
                                                <br>E-mail: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email"></br>
                                                <br>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="price"></br>
                                                <br>Upload Image of your Band: <input type="file" id="myFile" name="filename"></br>
                                                
                                                <br><input type="Submit" value="Save" onclick="Success();">
                                                <script>
                                                    function Success(){
                                                        alert("Your service listed successfully!");
                                                        window.location.href = "http://localhost/code/contact-us/previewservices"
                                                    
                                                    }

                                                </script>
                                                &nbsp; <input type="Submit" value="Cancel" onclick= "window.location.href='http://localhost/code/contact-us/addservices';"></br></table>
                                                
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
                    <h5 class="widget_title">Add Services</h5>

                    <?php if ($userDetails->role_id === CUSTOMER_ROLE_ID) { ?>
                       <ul class="product-categories">
                            <li class="cat-item cat-item-38"><a href="<?= $this->Url->Build(['controller' => 'ManageDetails', 'action' => 'view_details']) ?>">Manage Account Details</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'ManageDetails', 'action' => 'payment']) ?>">Manage Payment Method</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'ContactUs', 'action' => 'pay']) ?>">Checkout</a></li>

                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'ManageDetails', 'action' => 'view_booking_history']) ?>">View Booking History</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Users', 'action' => 'logout']) ?>">Logout</a></li>
                        </ul>

                    <?php } else if ($userDetails->role_id === MUSICIAN_ROLE_ID) { ?>

                        <ul class="product-categories">
                            <li class="cat-item cat-item-38"><a href="<?= $this->Url->Build(['controller' => 'ManageDetails', 'action' => 'view_details']) ?>">Manage Account Details</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'ManageDetails', 'action' => 'payment']) ?>">Manage Payment Method</a></li>
                            
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'ContactUs', 'action' => 'addservices']) ?>">Add services</a></li>

                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'ManageDetails', 'action' => 'view_booking_history']) ?>">View Booking History</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Users', 'action' => 'logout']) ?>">Logout</a></li>
                        </ul>

                    <?php } else { } ?>
                </aside>
            </div>
        </div>
    </div>
</div>
