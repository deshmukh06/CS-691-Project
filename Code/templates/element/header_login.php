<?php
$userDetails = $this->getRequest()->getSession()->read('SESS_USER');
?>
<header class="top_panel top_panel_custom top_panel_custom_12 top_panel_custom_header-fullwidth without_bg_image scheme_default">
    <div class="vc_row wpb_row vc_row-fluid vc_custom_1505986743260 vc_row-o-equal-height vc_row-o-content-middle vc_row-flex sc_layouts_row sc_layouts_row_type_compact sc_layouts_row_fixed">
        <div class="wpb_column vc_column_container vc_col-sm-4 sc_layouts_column sc_layouts_column_align_left sc_layouts_column_icons_position_left">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="vc_empty_space  vc_custom_1505997620932 height_tiny"   style="height: 32px">
                        <span class="vc_empty_space_inner"></span>
                    </div>

                    <div class="sc_layouts_item">
                        <a href="<?= $this->Url->build(['controller' => 'Home', 'action' => 'index']) ?>" id="sc_layouts_logo_1525368472" class="sc_layouts_logo sc_layouts_logo_default  vc_custom_1510924255840">
                            <img class="logo_image" src="<?= $this->Url->build('/images/logo.png') ?>" alt="" width="500" height="128">
                        </a><!-- /.sc_layouts_logo -->
                    </div>
                </div>
            </div>
        </div>

        <div class="wpb_column vc_column_container vc_col-sm-8 sc_layouts_column sc_layouts_column_align_right sc_layouts_column_icons_position_left">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="sc_layouts_item">
                        <nav class="sc_layouts_menu sc_layouts_menu_default menu_hover_fade hide_on_mobile inited" id="sc_layouts_menu_1409259290" data-animation-in="fadeInUpSmall" data-animation-out="fadeOutDownSmall"		>
                            <ul id="menu-main-menu" class="sc_layouts_menu_nav">
                                <li id="menu-item-149" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-149">
                                    <a href="<?= $this->Url->build(['controller' => 'Home', 'action' => 'index']) ?>"><span>Home</span></a>
                                </li>

                                <li id="menu-item-353" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-353">
                                    <a href="about.html"><span>About</span></a>

                                    <ul class="sub-menu">
                                        <li id="menu-item-354" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-354">
                                            <a href="#"><span>Our Team</span></a>
                                        </li>
                                        <li id="menu-item-355" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-355">
                                            <a href="#"><span>Our Features</span></a>
                                        </li>
                                    </ul>
                                </li>

                                <li id="menu-item-280" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-280">
                                    <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'login',md5(MUSICIAN_ROLE_ID)]) ?>"><span>Join as a Pro</span></a>
                                </li>

                                <li id="menu-item-175" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-175">
                                    <a href="#"><span>Contact Us</span></a>
                                </li>
                            </ul>
                        </nav><!-- /.sc_layouts_menu -->

                        <div class="sc_layouts_iconed_text sc_layouts_menu_mobile_button">
                            <a class="sc_layouts_item_link sc_layouts_iconed_text_link" href="#">
                                <span class="sc_layouts_item_icon sc_layouts_iconed_text_icon trx_addons_icon-menu"></span>
                            </a>
                        </div>
                    </div>

                    <div class="sc_layouts_item sc_layouts_hide_on_mobile sc_layouts_hide_on_tablet">
                        <a href="<?= (isset($userDetails->first_name) && !empty($userDetails->first_name)) ? $this->Url->build(['controller' => 'Users', 'action' => 'account', $userDetails->id]) : $this->Url->build(['controller' => 'Users', 'action' => 'login',md5(CUSTOMER_ROLE_ID)]) ?>" id="sc_button_1175329750" class="sc_button hide_on_mobile hide_on_tablet color_style_default sc_button_alter  vc_custom_1506676602676 sc_button_size_normal sc_button_icon_top">
                            <?php
                            if (isset($userDetails->first_name) && !empty($userDetails->first_name)) { ?>
                                <span class="sc_button_icon">
                                        <span class="icon-icon_user"> Welcome, <?= $userDetails->first_name ?></span>
                                    </span>
                            <?php    } else { ?>
                                <span class="sc_button_icon">
                                    <span class="icon-icon_user"></span>
                                </span>
                            <?php } ?>
                        </a><!-- /.sc_button -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--<div class="sc_layouts_row_fixed_placeholder" style="background-color:rgb(255, 255, 255);"></div>-->

    <!--<div class="vc_row wpb_row vc_row-fluid vc_custom_1499261556171 vc_row-has-fill sc_layouts_row sc_layouts_row_type_normal scheme_dark">
        <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column sc_layouts_column_align_center sc_layouts_column_icons_position_left">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div id="sc_content_1696278655" class="sc_content color_style_default sc_content_default sc_content_width_1_1 sc_float_center">
                        <div class="sc_content_container">
                            <div class="vc_empty_space  vc_custom_1506001076261 height_large" style="height: 32px">
                                <span class="vc_empty_space_inner"></span>
                            </div>
                            <div class="sc_layouts_item">
                                <div id="sc_layouts_title_1681221399" class="sc_layouts_title with_content">
                                    <div class="sc_layouts_title_content">
                                        <div class="sc_layouts_title_title">
                                            <h1 class="sc_layouts_title_caption">Login</h1>
                                        </div>
                                        <div class="sc_layouts_title_breadcrumbs">
                                            <div class="breadcrumbs">
                                                <a class="breadcrumbs_item home" href="<?/*= $this->Url->build(['controller' => 'Home', 'action' => 'index']) */?>">Home</a>
                                                <span class="breadcrumbs_delimiter"></span>
                                                <span class="breadcrumbs_item current">Login</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_empty_space  vc_custom_1506001163947 height_large" style="height: 32px">
                                <span class="vc_empty_space_inner"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
</header>

<div class="menu_mobile_overlay" style="display: none;"></div>

<div class="menu_mobile menu_mobile_fullscreen scheme_dark">
    <div class="menu_mobile_inner">
        <a class="menu_mobile_close icon-cancel"></a>
        <a class="sc_layouts_logo" href="#">
            <img src="<?= $this->Url->build('/images/logo.png') ?>" alt="Image" width="420" height="128">
        </a>
        <nav class="menu_mobile_nav_area">
            <ul id="menu_mobile-main-menu" class="">
                <li id="menu_mobile-item-149" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-149">
                    <a href="<?= $this->Url->build(['controller' => 'Home', 'action' => 'index']) ?>"><span>Home</span></a>
                </li>

                <li id="menu_mobile-item-353" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-353">
                    <a href="#"><span>About</span></a>
                    <ul class="sub-menu">
                        <li id="menu_mobile-item-354" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-354">
                            <a href="#"><span>Our Team</span></a>
                        </li>
                        <li id="menu_mobile-item-355" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-355">
                            <a href="#"><span>Our Features</span></a>
                        </li>
                    </ul>
                </li>

                <li id="menu_mobile-item-280" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-280">
                    <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'login',md5(MUSICIAN_ROLE_ID)]) ?>"><span>Join as a Pro</span></a>
                </li>

                <li id="menu_mobile-item-175" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-175">
                    <a href="#"><span>Contact Us</span></a>
                </li>

                <li id="menu-item-310" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-310">
                    <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'login',md5(CUSTOMER_ROLE_ID)]) ?>"><span>Login</span></a>
                </li>
            </ul>
        </nav>
    </div>
</div>
