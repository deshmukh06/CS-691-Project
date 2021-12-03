                                              <!DOCTYPE html>
<html>
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
                                        <h5>Messages For You..</h5>
                                            <table >
                                                <tr>
                                                <th style=" border: 1px solid black;">From</th>
                                                <th style="width:150%; border: 1px solid black; ">Messages</th>

                                                
                                                <tr>
                                                    <tr>
                                                        <td style=" border: 1px solid black;">Customer Support</td>
                                                        <td style=" border: 1px solid black; text-align:justify;">
                                                            Our valued customer! Check your recent booking. There is an update on your booking request. Your musician has accepted your booking. Go ahead and complete the payment in order to confirm your booking.
                                                        </td>
                                                        
                                                    </tr>
                                            </table>
                                               


                                                

                                        
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
                    <h5 class="widget_title">User Account</h5>

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
                </div>
            </div>
        </div>
    </div>
</div>
 <body>

                                                
                                                  
                                                 
 </html>