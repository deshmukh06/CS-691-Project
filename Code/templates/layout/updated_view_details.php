<!DOCTYPE html>
<html lang="en-US" class="no-js scheme_default">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">
        <link rel="profile" href="//gmpg.org/xfn/11">
        <link rel="pingback" href="http://casamia.ancorathemes.com/xmlrpc.php">
        <title>UnitedTunes &#8211; Serving all your music needs</title>
        <meta name='robots' content='noindex,nofollow' />

        <?= $this->Html->css(['admin_icon.css?ver=5.5.1', 'style.min.css?ver=5.5.1', 'vendors-style.css?ver=3.4.0', 'theme.css?ver=3.4.0', 'styles.css?ver=5.2.2', 'settings.css?ver=3.0.7', 'fontello.css?ver=3.0.7',
            'jquery-ui.css?ver=5.5.1', 'jquery-ui-v.css?ver=5.5.1', 'style_1.css?ver=5.5.1', 'rs6.css?ver=6.2.23', 'trx_addons_icons-embedded.css?ver=5.5.1', 'swiper.min.css', 'magnific-popup.min.css',
            'trx_addons.css', 'trx_addons.animation.css?ver=5.5.1', 'trx_demo_icons.css', 'animation.css', 'trx_demo_panels.css', 'woocommerce-layout.css?ver=4.6.0', 'woocommerce-smallscreen.css?ver=4.6.0', 'woocommerce.css?ver=4.6.0',
            ]) ?>


        <style id='woocommerce-inline-inline-css' type='text/css'>
            .woocommerce form .form-row .required { visibility: visible; }
        </style>

        <?= $this->Html->css(['js_composer.min.css?ver=6.4.1', 'fontello-embedded.css?ver=5.5.1' ]) ?>

        <link property="stylesheet" rel='stylesheet' id='casamia-font-google_fonts-css'  href='http://fonts.googleapis.com/css?family=Montserrat%3A300%2C400%2C500%2C700%7CSatisfy%3A400&#038;subset=latin%2Clatin-ext&#038;ver=5.5.1' type='text/css' media='all' />

        <?= $this->Html->css(['theme_1.css', '__styles.css?ver=5.5.1', '__colors.css?ver=5.5.1', 'mediaelementplayer-legacy.min.css?ver=4.2.13-9993131', 'wp-mediaelement.min.css?ver=5.5.1', 'responsive.css?ver=5.5.1']) ?>

        <?= $this->Html->script(['jquery.js?ver=1.12.4-wp', 'core.min.js?ver=1.11.4', 'widget.min.js?ver=1.11.4', 'position.min.js?ver=1.11.4', 'menu.min.js?ver=1.11.4', 'wp-polyfill.min.js?ver=7.4.4']) ?>

        <script type='text/javascript' id='wp-polyfill-js-after'>
            ( 'fetch' in window ) || document.write( '<script src="js/wp-polyfill-fetch.min.js?ver=3.0.0"></scr' + 'ipt>' );( document.contains ) || document.write( '<script src="js/wp-polyfill-node-contains.min.js?ver=3.42.0"></scr' + 'ipt>' );( window.DOMRect ) || document.write( '<script src="js/wp-polyfill-dom-rect.min.js?ver=3.42.0"></scr' + 'ipt>' );( window.URL && window.URL.prototype && window.URLSearchParams ) || document.write( '<script src="js/wp-polyfill-url.min.js?ver=3.6.4"></scr' + 'ipt>' );( window.FormData && window.FormData.prototype.keys ) || document.write( '<script src="js/wp-polyfill-formdata.min.js?ver=3.0.12"></scr' + 'ipt>' );( Element.prototype.matches && Element.prototype.closest ) || document.write( '<script src="js/wp-polyfill-element-closest.min.js?ver=2.0.2"></scr' + 'ipt>' );
        </script>

        <?= $this->Html->script(['dom-ready.min.js?ver=db63eb2f693cb5e38b083946b14f0684', 'i18n.min.js?ver=bb7c3c45d012206bfcd73d6a31f84d9e']) ?>

        <script type='text/javascript' id='wp-a11y-js-translations'>
            ( function( domain, translations ) {
                var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
                localeData[""].domain = domain;
                wp.i18n.setLocaleData( localeData, domain );
            } )( "default", { "locale_data": { "messages": { "": {} } } } );
        </script>

        <?= $this->Html->script(['a11y.min.js?ver=13971b965470c74a60fa32d392c78f2f', 'rbtools.min.js?ver=6.2.23', 'rs6.min.js?ver=6.2.23', 'jquery.blockUI.min.js?ver=2.70']) ?>
        <link rel="icon" href="<?= $this->Url->Build('/images/favicon.png') ?>" sizes="32x32" />

        <!-- jquery-validation -->
        <script src="<?= $this->Url->build('/js/jquery-validation/jquery.validate.min.js')?> "></script>
        <script src="<?= $this->Url->build('/js/jquery-validation/additional-methods.min.js')?> "></script>

        <style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1505305837892{background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1499261556171{background-color: #1d2023 !important;}.vc_custom_1504853772801{background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1499259445332{background-color: #efefef !important;}.vc_custom_1505732164038{background-color: #1d2023 !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1505819010683{background-image: url(http://casamia.ancorathemes.com/wp-content/uploads/2017/07/bg_hotspot.jpg?id=282) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1506672963224{margin-top: -7.5rem !important;}.vc_custom_1506523581510{margin-bottom: 2.9rem !important;}.vc_custom_1504879172738{margin-bottom: -1.2rem !important;}.vc_custom_1504879194049{margin-bottom: -0.4rem !important;}.vc_custom_1504879237801{margin-bottom: 3rem !important;}.vc_custom_1505309206253{margin-right: -38.5rem !important;}.vc_custom_1505305706620{background-image: url(http://casamia.ancorathemes.com/wp-content/uploads/2017/07/bg_hotspot.jpg?id=282) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1505309134990{padding-right: 22rem !important;padding-left: 46rem !important;}.vc_custom_1505310010747{margin-bottom: 4rem !important;}.vc_custom_1505309384366{margin-bottom: -1rem !important;}.vc_custom_1505743509374{margin-bottom: 1rem !important;}.vc_custom_1505743571599{margin-bottom: -2.5rem !important;}.vc_custom_1505743600445{margin-bottom: 1rem !important;}.vc_custom_1505747148418{margin-bottom: -24.1rem !important;}.vc_custom_1505745637159{margin-bottom: 1rem !important;}.vc_custom_1505746402128{margin-bottom: 3.3rem !important;}.vc_custom_1506936390775{margin-bottom: 0rem !important;}.vc_custom_1505747129225{padding-top: 25rem !important;}.vc_custom_1504855812848{padding-right: 46rem !important;padding-left: 23rem !important;background-image: url(http://casamia.ancorathemes.com/wp-content/uploads/2017/07/bg_hotspot.jpg?id=282) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1504861925258{margin-left: -38.5rem !important;}.vc_custom_1504855854557{margin-bottom: 0.5rem !important;}.vc_custom_1504855909926{margin-bottom: -0.7rem !important;}.vc_custom_1504861794717{margin-bottom: 5.2rem !important;}.vc_custom_1504880100402{margin-bottom: 1rem !important;}.vc_custom_1504880148202{margin-bottom: -1.2rem !important;}.vc_custom_1504882584219{margin-bottom: 2rem !important;}.vc_custom_1505813302999{margin-bottom: 2.9rem !important;}.vc_custom_1505813319840{margin-bottom: -1.5rem !important;}.vc_custom_1505813934607{margin-bottom: 1.7rem !important;}.vc_custom_1505732856876{margin-bottom: 1.1rem !important;}.vc_custom_1506937185094{margin-bottom: 0rem !important;}.vc_custom_1505732876038{margin-bottom: 0.9rem !important;}.vc_custom_1505732849163{margin-bottom: 1.3rem !important;}.vc_custom_1505819922832{margin-bottom: 3rem !important;}.vc_custom_1505817421536{margin-bottom: -1.5rem !important;}.vc_custom_1506934303671{margin-bottom: 0rem !important;}.vc_custom_1505819954512{margin-bottom: 0.3rem !important;}.vc_custom_1504873217921{margin-bottom: 2rem !important;}</style><noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript><style type="text/css" id="trx_addons-inline-styles-inline-css">.vc_custom_1505986743260{padding-top: 0px !important;padding-bottom: 0px !important;}.vc_custom_1506000698913{background: #f7f7f7 url(//casamia.ancorathemes.com/wp-content/uploads/2017/07/bg_hotspot.jpg?id=282) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1505997620932{margin-bottom: -1.4rem !important;}.vc_custom_1510924255840{padding-left: 2rem !important;}.vc_custom_1548851036288{padding-right: 1.4rem !important;padding-left: 1.2rem !important;}.vc_custom_1506676602676{margin-top: -0.5em !important;margin-bottom: -0.5em !important;}.vc_custom_1506001076261{margin-bottom: -1.1rem !important;}.vc_custom_1506001163947{margin-bottom: -1rem !important;}.casamia_inline_638530966{background-image: url(http://casamia.ancorathemes.com/wp-content/uploads/2017/07/post-2-1540x762.jpg);}.casamia_inline_1295238453{background-image: url(http://casamia.ancorathemes.com/wp-content/uploads/2017/07/post-3-1540x762.jpg);}.vc_custom_1506932000852{padding-bottom: 0px !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1505821408329{margin-bottom: 2.8rem !important;}.vc_custom_1505821656305{margin-bottom: -2rem !important;}.vc_custom_1505821696574{margin-right: -5px !important;margin-left: -5px !important;}.vc_custom_1506673957789{margin-top: -17rem !important;background-image: url(//casamia.ancorathemes.com/wp-content/uploads/2017/09/footer_bg.jpg?id=585) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1505827951313{margin-bottom: -0.1rem !important;padding-top: 13.3rem !important;}.vc_custom_1505831238009{margin-bottom: 0.2rem !important;}.vc_custom_1505831326257{margin-bottom: 1rem !important;}.vc_custom_1505831356353{margin-bottom: 3.5rem !important;}.vc_custom_1506932043727{margin-bottom: 2.5rem !important;}</style><style>' + htmlDivCss + '</style><style>' + htmlDivCss + '</style>
    </head>

    <body class="home page-template-default page page-id-394 theme-casamia frontpage woocommerce-no-js body_tag scheme_default blog_mode_front body_style_wide  is_stream blog_style_excerpt sidebar_hide expand_content remove_margins header_style_header-custom-12 header_position_default menu_style_top no_layout wpb-js-composer js-comp-ver-6.4.1 vc_responsive">

        <div class="body_wrap">
            <div class="page_wrap">
                <?php
                    $userDetails = $this->getRequest()->getSession()->read('SESS_USER');
                ?>
                <?= $this->element('header_login') ?>

                <?= $this->fetch('content') ?>

                <?= $this->element('footer') ?>
            </div>
        </div>

        <link href="https://fonts.googleapis.com/css?family=Satisfy:400%7CMontserrat:300" rel="stylesheet" property="stylesheet" media="all" type="text/css" >

        <link property="stylesheet" rel='stylesheet' id='font-awesome-css'  href="<?= $this->Url->Build('/css/font-awesome.min.css?ver=5.5.1') ?>" type='text/css' media='all' />
        <script type='text/javascript' src='http://casamia.ancorathemes.com/wp-includes/js/jquery/ui/mouse.min.js?ver=1.11.4' id='jquery-ui-mouse-js'></script>
        <script type='text/javascript' src='http://casamia.ancorathemes.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=4.6.0' id='wc-cart-fragments-js'></script>
        <script type='text/javascript' src='http://casamia.ancorathemes.com/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=6.4.1' id='wpb_composer_front_js-js'></script>
        <script type='text/javascript' src='http://casamia.ancorathemes.com/wp-content/plugins/vc-extensions-bundle/hotspot/../profilecard/js/jquery.tooltipster.min.js?ver=5.5.1' id='tooltipster-js'></script>
        <script type='text/javascript' src='http://casamia.ancorathemes.com/wp-content/plugins/vc-extensions-bundle/hotspot/js/script.min.js?ver=5.5.1' id='vc_hotspot_cq_script-js'></script>

        <script type='text/javascript' src='http://casamia.ancorathemes.com/wp-content/plugins/instagram-feed/js/sbi-scripts.min.js?ver=2.5' id='sb_instagram_scripts-js'></script>
        <script type='text/javascript' src='http://casamia.ancorathemes.com/wp-content/plugins/mailchimp-for-wp/assets/js/forms.min.js?ver=4.8.1' id='mc4wp-forms-api-js'></script>
        <a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up" title="Scroll to top"></a>
    </body>
</html>