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
                                                <h5><a href="http://localhost/code/admin/newpromocode">+Generate new promocode</a></h5>
                                                
                                                <table>
                                                    <th>Promocode_id</th>
                                                    <th>Promocode</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                    <th></th>

                                                    <tr>
                                                        <td>001</td>
                                                        <td>AF6TJ38K</td>
                                                        <td>Inactive</td>
                                                        <td><button type="Button" style="height:20px;width:10px text-align:center;" onclick="Success();">Activate</button></td>
                                                        <script>
                                                            function Success(){
                                                                alert("Promocode is activated!");
                                                            }
                                                        </script>
                                                        <td><button type="Button" style="height:20px;width:10px text-align:center;">Deactivate</button></td>


                                                    </tr>
                                                     <td>002</td>
                                                        <td>JH65ESD7</td>
                                                        <td>Inactive</td>
                                                        <td><button type="Button" style="height:20px;width:10px text-align:center;" onclick="Success();">Activate</button></td>
                                                        <script>
                                                            function Success(){
                                                                alert("Promocode is activated!");
                                                                window.location.href = 'http://localhost/code/admin/activepromocode';
                                                            }
                                                        </script>
                                                        <td><button type="Button" style="height:20px;width:10px text-align:center;" onclick="window.location.href = 'http://localhost/code/admin/deletecustomers';">Deactivate</button></td>
                                                    <tr>
                                                    </tr>
                                                </table>
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
                    <h5 class="widget_title">Customer Booking Summary</h5>

                    <?php if ($userDetails->role_id === CUSTOMER_ROLE_ID) { ?>

                        <ul class="product-categories">
                           <li class="cat-item cat-item-38"><a href="<?= $this->Url->Build(['controller' => 'Admin', 'action' => 'managecustomers']) ?>">Manage Customers</a></li>
                            <li class="cat-item cat-item-36"><a href="#">Manage Musicians</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Admin', 'action' => 'cussum']) ?>">View Customer Booking Summary</a></li>

                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Admin', 'action' => 'mussum']) ?>">View Musicians Booking Summary</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Admin', 'action' => 'generate_promocode']) ?>">Generate promocode</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Users', 'action' => 'logout']) ?>">Logout</a></li>
                        </ul>

                    <?php } else if ($userDetails->role_id === MUSICIAN_ROLE_ID) { ?>

                        <ul class="product-categories">
                           <li class="cat-item cat-item-38"><a href="#">Manage Customers</a></li>
                            <li class="cat-item cat-item-36"><a href="#">Manage Musicians</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Admin', 'action' => 'cussum']) ?>">View Customer Booking Summary</a></li>

                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Admin', 'action' => 'mussum']) ?>">View Musicians Booking Summary</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Users', 'action' => 'logout']) ?>">Logout</a></li>
                        </ul>

                    <?php } else { } ?>
                </div>
            </div>
        </div>
    </div>
</div>