 <div class="sidebar sidebar_left widget_area" role="complementary" style="margin-top: 150px !important; margin-bottom: 150px !important;">
            <div class="sidebar_inner">
                <aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
                    <h5 class="widget_title">Helpdesk Tickets</h5>

                        <center>
                            <table> 
                                                <h3>Helpdesk Tickets</h3> 
                                                <tr> 
                                                    <th>Ticket Id</th>
                                                    <th>Customer Name</th> 
                                                    <th>Customers Email</th>
                                                    <th>Contact Number</th>
                                                    <th>Issue</th>
                                                    <th>Date of creation</th> 
                                                    <th>Solution recommended</th> 
                                                    <th>Status</th>
                                                    <th></th>
                                                </tr> 
                                                <tr> 
                                                    <td>110</td> 
                                                    <td>Kimeth Williams</td> 
                                                    <td>kimeth54@gmail.com</td>
                                                    <td>9876542378</td>
                                                    <td><textarea id="ticket" name="ticket" rows="4" cols="50"></textarea></td> 
                                                    <td>12/10/2021</td>
                                                    <td></td>
                                                    <td><select>
                                                          <option value="volvo">Resolved</option>
                                                          <option value="saab">Unresolved/closed</option>
                                                          <option value="mercedes">Escalated</option>
                                                          <option value="audi">Open</option>
                                                        </select></td> 
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


                     <ul class="product-categories">
                            <li class="cat-item cat-item-38"><a href="#">Manage Customers</a></li>
                            <li class="cat-item cat-item-36"><a href="#">Manage Musicians</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Admin', 'action' => 'cussum']) ?>">View Customer Booking Summary</a></li>

                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Admin', 'action' => 'mussum']) ?>">View Musicians Booking Summary</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Admin', 'action' => 'managetickets']) ?>">Manage Helpdesk Tickets</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Users', 'action' => 'logout']) ?>">Logout</a></li>
                        </ul>
