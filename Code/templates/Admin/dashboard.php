 <div class="sidebar sidebar_left widget_area" role="complementary" style="margin-top: 150px !important; margin-bottom: 150px !important;">
            <div class="sidebar_inner">
                <aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
                    <h5 class="widget_title">Admin Dashboard</h5>


                        <ul class="product-categories">
                            <li class="cat-item cat-item-38"><a href="#">Manage Customers</a></li>
                            <li class="cat-item cat-item-36"><a href="#">Manage Musicians</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Admin', 'action' => 'cussum']) ?>">View Customer Booking Summary</a></li>

                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Admin', 'action' => 'mussum']) ?>">View Musicians Booking Summary</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Users', 'action' => 'logout']) ?>">Logout</a></li>
                        </ul>

                </aside>
            </div>
        </div>