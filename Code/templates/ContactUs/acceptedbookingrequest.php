<?php

$userDetails = $this->getRequest()->getSession()->read('SESS_USER');
?>

<div class="page_content_wrap scheme_default">
    <div class="content_wrap">
        <div class="content" style="float: right !important; width: 800px;">
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
                                                <div class="content">
                                                
                                                <h5>Hello, <?= ucfirst($userDetails->first_name)?>! These are your recent booking requests:</h5>
                                                <br>
                                                <table> 
                                                 
                                                <tr> 
                                                        <th>Id</th>
                                                        <th>Location</th>
                                                        <th>Date</th>
                                                        <th>Timings</th>
                                                        <th>Amount</th>
                                                        <th>Customer Contact</th>
                                                        <th>Booked For</th>
                                                        <th>Service Needed</th>
                                                        <th>Actions</th>                                                 
                                                    

                                                    
                                                </tr> 
                                                <tr> 
                                                    
                                                    <td contentEditable="true">110</td>
                                                    <td contentEditable="true">HK Hall New Jersey 07029</td>
                                                    <td contentEditable="true">10/12/2021</td>
                                                    <td contentEditable="true">5pm-12am</td>
                                                    <td>$1200</td>
                                                    <td contentEditable="true">9735369240</td>

                                                    <td>Peter Wayne</td>
                                                    
                                                    <td>Reception Party Live Music</td> 
                                                    <td>Accepted</td>
                                                    
                                                </tr> 
                                                <tr> 
                                                     
                                                    <td>112</td> 
                                                    <td>Varsity Hall New Jersey</td>
                                                    <td>21/12/2021</td>
                                                    <td>11pm-6am</td>
                                                    <td>$15000</td>
                                                    <td>887601800</td>
                                                    <td>Diana Estrella</td>
                                                    <td>Rock Concert</td>
                                                    <td><br><button type="Button" style="height:20px;width:10px text-align:center;">Accept</button></br>
                                                    <p><br><button type="Button" style="height:20px;width:10px text-align:center;" onclick="Delete();">Decline</button></br></td></p>
                                                    <script>
                                                        function Delete(){
                                                        alert("This booking has been cancelled successfully!");
                                                        window.location.href = "http://localhost/code/ContactUs/declinebooking"
                                                    
                                                    }
                                                    
                                                </script>
                                                </tr>
                                            </table>

                                              </div>  
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

        <div align="left" class="sidebar sidebar_left widget_area" role="complementary" style="margin-top: 100px !important; margin-bottom: 200px !important; margin-left: 0px">
            <div class="sidebar_inner">
                <aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
                    <h5 class="widget_title">Account</h5>

                    <?php if ($userDetails->role_id === CUSTOMER_ROLE_ID) { ?>

                        <ul class="product-categories">
                            <li class="cat-item cat-item-38"><a href="<?= $this->Url->Build(['controller' => 'ManageDetails', 'action' => 'view_details']) ?>">Manage Account Details</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'ContactUs', 'action' => 'search']) ?>">Search for services</a></li>
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
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'ContactUs', 'action' => 'bookingrequest']) ?>">Accept/Decline Booking Requests</a></li>

                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'ManageDetails', 'action' => 'view_booking_history']) ?>">View Booking History</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Users', 'action' => 'logout']) ?>">Logout</a></li>
                        </ul>

                    <?php } else { } ?>
                </aside>
            </div>
        </div>
    </div>
</div>
