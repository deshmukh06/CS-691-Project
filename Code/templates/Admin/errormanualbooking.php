<?php

$userDetails = $this->getRequest()->getSession()->read('SESS_USER');
// app/View/Posts/view.ctp
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
                                                <center><h5>Booking Form</h5></center>

                                                <br><b>Customer Name: <input type="text" size= 80 name="company_name" required></br>
                                                 <p style="color:red;">Error:Empty input!</p>   
                                                <br>Music Company: &nbsp;&nbsp;&nbsp;<input type="text" size=80 name="services"></br>
                                                <p style="color:red;">Error:Empty input!</p>
                                                <br>Service needed <input type="text" size= 80 name="company_name"></br>
                                                <p style="color:red;">Error:Empty input!</p>

                                               <br>
                                                <br>Customer Contact No:&nbsp;&nbsp;<input type="number"  name="contact"></br>
                                                <p style="color:red;">Error:Empty input!</p>                                       
                                                <br>Event Location <input type="text" size= 80 name="company_name"></br><p style="color:red;">Error:Empty input!</p>
                                                <br><input type="date" size=80 ></br> <p style="color:red;">Error:Empty input!</p>                                              
                                                <br>Booking Time from<input type="Time" size= 80 name="company_name">to<input type="Time" size= 80 name="company_name"></br>
                                                <p style="color:red;">Error:Empty input!</p>
                                                <br><input type="Submit" value="Save" onclick="Success();">
                                               <script>

                                                    function Success(){
                                                        alert("Booking has been created successfully!");
                                                        window.location.href = "http://localhost/code/admin/upmanualbookings"
                                                    
                                                    }

                                                </script>
                                                &nbsp; <input type="Submit" value="Cancel" onclick= "window.location.href='http://localhost/code/admin/manualbookings';"></br>
                                                        <br></br>
                                                        <br></br>
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
                <div id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
                    <h5 class="widget_title">Dashboard</h5>

                    <?php if ($userDetails->role_id === CUSTOMER_ROLE_ID) { ?>

                        <ul class="product-categories">
                           <li class="cat-item cat-item-38"><a href="<?= $this->Url->Build(['controller' => 'Admin', 'action' => 'dashboard']) ?>">Back To Dashboard</a></li>
                           <li class="cat-item cat-item-38"><a href="<?= $this->Url->Build(['controller' => 'Admin', 'action' => 'managecustomers']) ?>">Manage Customers</a></li>
                            <li class="cat-item cat-item-36"><a href="#">Manage Musicians</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Admin', 'action' => 'cussum']) ?>">View Customer Booking Summary</a></li>

                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Admin', 'action' => 'mussum']) ?>">View Musicians Booking Summary</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Admin', 'action' => 'generate_promocode']) ?>">Generate promocode</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Admin', 'action' => 'manualbookings']) ?>">Manage Manual Booking</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Admin', 'action' => 'declinebookings']) ?>">Decline/Cancel Bookings</a></li>

                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Admin', 'action' => 'onlinebookings']) ?>">Manage Online Bookings</a></li>


                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Users', 'action' => 'logout']) ?>">Logout</a></li>
                        </ul>

                    <?php } else if ($userDetails->role_id === MUSICIAN_ROLE_ID) { ?>

                        <ul class="product-categories">
                            <li class="cat-item cat-item-38"><a href="<?= $this->Url->Build(['controller' => 'Admin', 'action' => 'dashboard']) ?>">Back To Dashboard</a></li>
                           <li class="cat-item cat-item-38"><a href="#">Manage Customers</a></li>
                            <li class="cat-item cat-item-36"><a href="#">Manage Musicians</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Admin', 'action' => 'cussum']) ?>">View Customer Booking Summary</a></li>

                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Admin', 'action' => 'mussum']) ?>">View Musicians Booking Summary</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Admin', 'action' => 'generate_promocode']) ?>">Generate Promo Code</a></li>

                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Admin', 'action' => 'generate_promocode']) ?>">Manage Manual Booking</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'ManageDetails', 'action' => 'upbookings']) ?>">Decline/Cancel Bookings</a></li>

                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Admin', 'action' => 'generate_promocode']) ?>">Manage Online Bookings</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Users', 'action' => 'logout']) ?>">Logout</a></li>
                        </ul>

                    <?php } else { } ?>
                </div>
            </div>
        </div>
    </div>
</div>