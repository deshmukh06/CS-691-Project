<?php

$userDetails = $this->getRequest()->getSession()->read('SESS_USER');
// app/View/Posts/view.ctp
?>

<div class="page_content_wrap scheme_default">
    <div class="content_wrap">
        <div class="content" style="float: right !important; width: 770px;">
            <div class="list_products shop_mode_thumbs">

               

                <article id="post-49" class="post_item_single post_type_page post-49 page type-page status-publish hentry">
                    <div class="post_content entry-content">
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                                <div class="vc_column-inner vc_custom_1477912247150">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                
    
    <style>
      html, body {
      min-height: 50%;
      padding: 0;
      margin: 0;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      }
     
      p {
      margin: 0 0 5px;
      }
      
      form {
      padding: 10px;
      margin: 10px;
       
      background: #f5f5f5; 
      }
      .fas {
      margin: 25px 10px 0;
      font-size: 72px;
      color: #fff;
      }
      
      input, textarea {
      width: calc(100% - 18px);
      padding: 8px;
      margin-bottom: 20px;
      border: 1px solid #1c87c9;
      outline: none;
      }
      input::placeholder {
      color: #666;
      }
      button {
      width: 100%;
      padding: 10px;
      border: none;
      background: #1c87c9; 
      font-size: 16px;
      font-weight: 400;
      color: #fff;
      }
      button:hover {
      background: #2371a0;
      }    
      @media (min-width: 100px) {
      .main-block {
      flex-direction:right;
      }
      .left-part, form {
      width: 100%;
      }
      .fa-envelope {
      margin-top: 0;
      margin-left: 20%;
      }
      .fa-at {
      margin-top: -10%;
      margin-left: 65%;
      }
      .fa-mail-bulk {
      margin-top: 2%;
      margin-left: 28%;
      }
      }
    </style>
  </head>
 
          
        <h5>Send message to Revati Deshmukh...</h5>
        
        <p>Message</p>
        
          <textarea rows="4"></textarea>
        
        <button type="submit" onclick="Success();">Send</button>
        <script>
            function Success(){
                   alert("Message sent Successfully!");
                   window.location.href = "http://localhost/code/customersupportportal/communicate";
                      }
            </script>
            
      
      <br></br>
      <br></br>
      <br></br>

    
   
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
                    <h5 class="widget_title">Support Dashboard</h5>

                    <?php if ($userDetails->role_id === CUSTOMER_ROLE_ID) { ?>

                         <ul class="product-categories">
                            <li class="cat-item cat-item-38"><a href="<?= $this->Url->Build(['controller' => 'Customersupportportal', 'action' => 'supportdashboard']) ?>">Back To Dashboard</a></li>
                           <li class="cat-item cat-item-38"><a href="https://unitedtunes.atlassian.net/jira/servicedesk/projects/DESK/queues/custom/1" target="_blank">Create and Monitor Support Tickets</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Customersupportportal', 'action' => 'communicate']) ?>">Communicate with End User</a></li>
                           

                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Customersupportportal', 'action' => 'customeracc']) ?>">Access Customer Account Information</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Users', 'action' => 'logout']) ?>">Logout</a></li>
                        </ul>

                    <?php } else if ($userDetails->role_id === MUSICIAN_ROLE_ID) { ?>

                        <ul class="product-categories">
                            <li class="cat-item cat-item-38"><a href="<?= $this->Url->Build(['controller' => 'Admin', 'action' => 'dashboard']) ?>">Back To Dashboard</a></li>
                           <li class="cat-item cat-item-38"><a href="#">Create and Monitor Support Tickets</a></li>
                            <li class="cat-item cat-item-36"><a href="#">Communicate with End User</a></li>
                           

                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Admin', 'action' => 'generate_promocode']) ?>">Access Customer Account Information</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Users', 'action' => 'logout']) ?>">Logout</a></li>
                        </ul>

                    <?php } else { } ?>
                </div>
            </div>
        </div>
    </div>
</div>