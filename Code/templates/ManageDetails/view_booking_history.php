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
                                                <h5>Hello <?= ucfirst($userDetails->first_name) ?>, these are your past booking details</h5>
                                               
                                                      <table>
 
                                                        <tr>
                                                        <th>Booking Id</th>
                                                        <th>Music Company</th>
                                                        <th>Event Location</th>
                                                        <th>Booking Date</th>
                                                        <th>Show timings</th>
                                                        <th>Booking Ammount</th>
                                                        <th>Contact number</th>
                                                        
                                                        </tr>
                                                    <tbody>
                                               
  
  
                                                        <tr>
                                                            <td>112</td>
                                                            <td>Francisco Rockers</td>
                                                            <td>Times Square</td>
                                                            <td>22/08/2021</td>
                                                            <td>11pm-3am</td>
                                                            <td>$1050</td>
                                                            <td>8745638946</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>113</td>
                                                            <td>High Standards</td>
                                                            <td>76 Hardrock Cafe</td>
                                                            <td>22/09/2021</td>
                                                            <td>11pm-3am</td>
                                                            <td>$1560</td>
                                                            <td>8745638946</td>
                                                            
                                                        </tr>
                                                      <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                      </tr>
                                                    </table>
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
                    <h5 class="widget_title">Past Booking History</h5>

                    <?php if ($userDetails->role_id === CUSTOMER_ROLE_ID) { ?>
                        <ul class="product-categories">
                        
                            <li class="cat-item cat-item-39"><a href="<?= $this->Url->Build(['controller' => 'ManageDetails', 'action' => 'upbookings']) ?>">Manage upcoming bookings</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Users', 'action' => 'logout']) ?>">Logout</a></li>
                        </ul>

                    <?php } else if ($userDetails->role_id === MUSICIAN_ROLE_ID) { ?>

                        <ul class="product-categories">
                            
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'ManageDetails', 'action' => 'upbookings']) ?>">Manage upcoming bookings</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Users', 'action' => 'logout']) ?>">Logout</a></li>
                        </ul>

                    <?php } else { } ?>
                </aside>
            </div>
        </div>
    </div>
</div>
