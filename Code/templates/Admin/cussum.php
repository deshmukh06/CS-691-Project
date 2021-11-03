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
                                                <table> 
												<h3>Customer Booking Summary</h3> 
												<tr> 
													<th>User Id</th>
													<th>Customer Name</th> 
													<th>Booking Id</th>
													<th>Band Booked</th>
													<th>Booking Date</th> 
													<th>Total Revenue</th>
													<th>Commission earned</th> 
													<th>Status</th>
												</tr> 
												<tr> 
													<td rowspan="3">110</td> 
													<td rowspan="3">Kimeth Williams</td> 
													<td>A453</td>
													<td>Fransisco Rockers</td>
													<td>October 12 2021</td> 
													<td>$1200</td>
													<td>$150</td>
													<td>Booking Completed</td> 
												</tr> 
												<tr> 
													 
													<td>A546</td>
													<td>Highlanders</td>
													<td>July 20 2021</td> 
													<td>$2100</td>
													<td>$350</td>
													<td>Booking Completed</td>
												</tr> 
													<tr> 
														<td>E593</td>
														<td>Crocket Nights</td>
														<td>Feb 08 2021</td> 
														<td>$2900</td>
														<td>$850</td>
														<td>Cancelled</td>
													</tr> 
													<tr> 
														<td rowspan="2">107</td> 
														<td rowspan="2">Rose Tylor</td> 
														<td>U765</td>
														<td>Blinding Stage</td>
														<td>October 21 2021</td> 
														<td>$1500</td>
														<td>$200</td> 
														<td>Booking Completed</td>
													</tr>
													<tr>
														<td>E593</td>
														<td>Tune Wings </td>
														<td>Jan 25 2021</td> 
														<td>$2900</td>
														<td>$250</td>
														<td>Booking Completed</td>
													</tr>
													<tr> 
														<td rowspan="5">116</td> 
														<td rowspan="5">Tom Jose</td> 
														<td>G265</td>
														<td>Fantastic Four</td>
														<td>April 19 2021</td> 
														<td>$5500</td>
														<td>$500</td> 
														<td>Booking Completed</td>
													</tr>
													<tr> 
														<td>D432</td>
														<td>Fransisco Rockers</td>
														<td>June 20 2021</td> 
														<td>$4500</td>
														<td>$300</td> 
														<td>Booking Completed</td>
													</tr>
													<tr> 
														<td>A132</td>
														<td>Highlanders</td>
														<td>July 25 2021</td> 
														<td>$1500</td>
														<td>$100</td> 
														<td>Booking Completed</td>
													</tr>
 													<tr> 
														<td>B332</td>
														<td>Tunes of Peace</td>
														<td>August 25 2021</td> 
														<td>$3500</td>
														<td>$300</td> 
														<td>Booking Completed</td>
													</tr>
													<tr> 
														<td>R332</td>
														<td>Heavenly Melodies</td>
														<td>September 16 2021</td> 
														<td>$2500</td>
														<td>$200</td> 
														<td>Booking Completed</td>
													</tr>
												</table>

												</center>
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
                <div id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
                    <h5 class="widget_title">Customer Booking Summary</h5>

                    <?php if ($userDetails->role_id === CUSTOMER_ROLE_ID) { ?>

                        <ul class="product-categories">
                           <li class="cat-item cat-item-38"><a href="#">Manage Customers</a></li>
                            <li class="cat-item cat-item-36"><a href="#">Manage Musicians</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Admin', 'action' => 'cussum']) ?>">View Customer Booking Summary</a></li>

                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Admin', 'action' => 'mussum']) ?>">View Musicians Booking Summary</a></li>
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





