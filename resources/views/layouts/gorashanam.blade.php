<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- go rakshanam headers -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"><!-- /Added by HTTrack -->

    <link rel="stylesheet" id="mec-select2-style-css"
        href="wp-content/plugins/modern-events-calendar-lite/assets/packages/select2/select2.minb430.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="mec-font-icons-css"
        href="wp-content/plugins/modern-events-calendar-lite/assets/css/iconfonts6fda.css" type="text/css" media="all">
    <link rel="stylesheet" id="mec-frontend-style-css"
        href="wp-content/plugins/modern-events-calendar-lite/assets/css/frontend.minb430.css" type="text/css"
        media="all">
    <link rel="stylesheet" id="mec-tooltip-style-css"
        href="wp-content/plugins/modern-events-calendar-lite/assets/packages/tooltip/tooltip6fda.css" type="text/css"
        media="all">
    <link rel="stylesheet" id="mec-tooltip-shadow-style-css"
        href="wp-content/plugins/modern-events-calendar-lite/assets/packages/tooltip/tooltipster-sideTip-shadow.min6fda.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="mec-featherlight-style-css"
        href="wp-content/plugins/modern-events-calendar-lite/assets/packages/featherlight/featherlight6fda.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="mec-google-fonts-css"
        href="../external.html?link=http://fonts.googleapis.com/css?family=Montserrat%3A400%2C700%7CRoboto%3A100%2C300%2C400%2C700&amp;ver=5.6.9"
        type="text/css" media="all">

    <link rel="stylesheet" id="mec-lity-style-css"
        href="wp-content/plugins/modern-events-calendar-lite/assets/packages/lity/lity.min6fda.css" type="text/css"
        media="all">
    <link rel="stylesheet" id="wp-block-library-css" href="wp-includes/css/dist/block-library/style.min6fda.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="rs-plugin-settings-css" href="wp-content/plugins/revslider/public/assets/css/rs649c2.css"
        type="text/css" media="all">
    <style id="rs-plugin-settings-inline-css" type="text/css">
    #rs-demo-id {}
    </style>
    <link rel="stylesheet" id="ba-module-core-css" href="wp-content/plugins/addons-for-divi/assets/css/coref269.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="ba-module-plugins-css"
        href="wp-content/plugins/addons-for-divi/assets/vendor/tippyf269.css" type="text/css" media="all">
    <link rel="stylesheet" id="ba-slick-css" href="wp-content/plugins/addons-for-divi/assets/vendor/slick/slickf269.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="ba-slick-theme-css"
        href="wp-content/plugins/addons-for-divi/assets/vendor/slick/slick-themef269.css" type="text/css" media="all">
    <link rel="stylesheet" id="widget-for-eventbrite-api-css"
        href="wp-content/plugins/widget-for-eventbrite-api/frontend/css/frontenda038.css" type="text/css" media="all">
    <link rel="stylesheet" id="parent-style-css" href="wp-content/themes/Divi/style6fda.css" type="text/css"
        media="all">
    <link rel="stylesheet" id="divi-fonts-css"
        href="../external.html?link=http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,latin-ext&amp;display=swap"
        type="text/css" media="all">
    <link rel="stylesheet" id="divi-style-css" href="wp-content/themes/Divi-Child/style67d0.css" type="text/css"
        media="all">
    <link rel="stylesheet" id="addons-for-divi-styles-css"
        href="wp-content/plugins/addons-for-divi/styles/style.minf269.css" type="text/css" media="all">
    <link rel="stylesheet" id="divi-styles-css"
        href="wp-content/plugins/modern-events-calendar-lite/app/addons/divi/styles/style.min8a54.css" type="text/css"
        media="all">
    <link rel="stylesheet" id="et-builder-googlefonts-cached-css"
        href="../external.html?link=http://fonts.googleapis.com/css?family=Open+Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%7CShare+Tech%3Aregular&amp;subset=latin%2Clatin-ext&amp;display=swap&amp;ver=5.6.9"
        type="text/css" media="all">
    <link rel="stylesheet" id="dashicons-css" href="wp-includes/css/dashicons.min6fda.css" type="text/css" media="all">
    <script type="text/javascript" src="wp-includes/js/jquery/jquery.min9d52.js" id="jquery-core-js"></script>
    <script type="text/javascript" src="wp-includes/js/jquery/jquery-migrate.mind617.js" id="jquery-migrate-js">
    </script>
    <script type="text/javascript" id="mec-frontend-script-js-extra">
    /* <![CDATA[ */
    var mecdata = {
        "day": "day",
        "days": "days",
        "hour": "hour",
        "hours": "hours",
        "minute": "minute",
        "minutes": "minutes",
        "second": "second",
        "seconds": "seconds",
        "elementor_edit_mode": "no",
        "recapcha_key": "",
        "ajax_url": "http:\/\/gorakshana.org\/wp-admin\/admin-ajax.php",
        "fes_nonce": "bf761508ed",
        "current_year": "2022",
        "current_month": "09",
        "datepicker_format": "yy-mm-dd&Y-m-d"
    };
    /* ]]> */
    </script>
    <script type="text/javascript" src="wp-content/plugins/modern-events-calendar-lite/assets/js/frontendb430.js"
        id="mec-frontend-script-js"></script>
    <script type="text/javascript" src="wp-content/plugins/modern-events-calendar-lite/assets/js/eventsb430.js"
        id="mec-events-script-js"></script>
    <script type="text/javascript" src="wp-content/plugins/revslider/public/assets/js/rbtools.min49c2.js"
        id="tp-tools-js"></script>
    <script type="text/javascript" src="wp-content/plugins/revslider/public/assets/js/rs6.min49c2.js" id="revmin-js">
    </script>
    <script type="text/javascript" src="wp-content/plugins/widget-for-eventbrite-api/frontend/js/frontenda038.js"
        id="widget-for-eventbrite-api-js"></script>
    <script type="text/javascript" src="wp-content/themes/Divi/core/admin/js/es6-promise.auto.min6fda.js"
        id="es6-promise-js"></script>
    <script type="text/javascript" id="et-core-api-spam-recaptcha-js-extra">
    /* <![CDATA[ */
    var et_core_api_spam_recaptcha = {
        "site_key": "",
        "page_action": {
            "action": "gorakshana_org"
        }
    };
    /* ]]> */
    </script>
    <script type="text/javascript" src="wp-content/themes/Divi/core/admin/js/recaptcha6fda.js"
        id="et-core-api-spam-recaptcha-js"></script>
    <link rel="https://api.w.org/" href="wp-json/index.html">
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/78.json">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml">
    <meta name="generator" content="WordPress 5.6.9">
    <link rel="canonical" href="index.html">
    <link rel="shortlink" href="index.html">
    <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed311d.json">
    <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embedb458">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="generator"
        content="Powered by Slider Revolution 6.2.22 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface.">
    <link rel="icon" href="wp-content/uploads/2021/01/cropped-New-Project-65-32x32.png" sizes="32x32">
    <link rel="icon" href="wp-content/uploads/2021/01/cropped-New-Project-65-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="wp-content/uploads/2021/01/cropped-New-Project-65-180x180.png">
    <meta name="msapplication-TileImage"
        content="http://gorakshana.org/wp-content/uploads/2021/01/cropped-New-Project-65-270x270.png">

    <style id="et-divi-customizer-global-cached-inline-styles">
    .et_header_style_centered .mobile_nav .select_page,
    .et_header_style_split .mobile_nav .select_page,
    .et_nav_text_color_light #top-menu>li>a,
    .et_nav_text_color_dark #top-menu>li>a,
    #top-menu a,
    .et_mobile_menu li a,
    .et_nav_text_color_light .et_mobile_menu li a,
    .et_nav_text_color_dark .et_mobile_menu li a,
    #et_search_icon:before,
    .et_search_form_container input,
    span.et_close_search_field:after,
    #et-top-navigation .et-cart-info {
        color: #120033
    }

    .et_search_form_container input::-moz-placeholder {
        color: #120033
    }

    .et_search_form_container input::-webkit-input-placeholder {
        color: #120033
    }

    .et_search_form_container input:-ms-input-placeholder {
        color: #120033
    }

    #top-menu li a {
        font-size: 15px
    }

    body.et_vertical_nav .container.et_search_form_container .et-search-form input {
        font-size: 15px !important
    }

    #top-menu li.current-menu-ancestor>a,
    #top-menu li.current-menu-item>a,
    .et_color_scheme_red #top-menu li.current-menu-ancestor>a,
    .et_color_scheme_red #top-menu li.current-menu-item>a,
    .et_color_scheme_pink #top-menu li.current-menu-ancestor>a,
    .et_color_scheme_pink #top-menu li.current-menu-item>a,
    .et_color_scheme_orange #top-menu li.current-menu-ancestor>a,
    .et_color_scheme_orange #top-menu li.current-menu-item>a,
    .et_color_scheme_green #top-menu li.current-menu-ancestor>a,
    .et_color_scheme_green #top-menu li.current-menu-item>a {
        color: #f8b271
    }

    #main-footer {
        background-color: #00022b
    }

    #footer-widgets .footer-widget a,
    #footer-widgets .footer-widget li a,
    #footer-widgets .footer-widget li a:hover {
        color: #ffffff
    }

    .footer-widget {
        color: #ffffff
    }

    #footer-bottom {
        background-color: #ffffff
    }

    #footer-info,
    #footer-info a {
        color: #000000
    }

    #footer-bottom .et-social-icon a {
        font-size: 22px
    }

    #footer-bottom .et-social-icon a {
        color: #d11c08
    }

    .et_slide_in_menu_container,
    .et_slide_in_menu_container .et-search-field {
        letter-spacing: px
    }

    .et_slide_in_menu_container .et-search-field::-moz-placeholder {
        letter-spacing: px
    }

    .et_slide_in_menu_container .et-search-field::-webkit-input-placeholder {
        letter-spacing: px
    }

    .et_slide_in_menu_container .et-search-field:-ms-input-placeholder {
        letter-spacing: px
    }

    @media only screen and (min-width:981px) {

        .et_header_style_left #et-top-navigation,
        .et_header_style_split #et-top-navigation {
            padding: 43px 0 0 0
        }

        .et_header_style_left #et-top-navigation nav>ul>li>a,
        .et_header_style_split #et-top-navigation nav>ul>li>a {
            padding-bottom: 43px
        }

        .et_header_style_split .centered-inline-logo-wrap {
            width: 85px;
            margin: -85px 0
        }

        .et_header_style_split .centered-inline-logo-wrap #logo {
            max-height: 85px
        }

        .et_pb_svg_logo.et_header_style_split .centered-inline-logo-wrap #logo {
            height: 85px
        }

        .et_header_style_centered #top-menu>li>a {
            padding-bottom: 15px
        }

        .et_header_style_slide #et-top-navigation,
        .et_header_style_fullscreen #et-top-navigation {
            padding: 34px 0 34px 0 !important
        }

        .et_header_style_centered #main-header .logo_container {
            height: 85px
        }

        #logo {
            max-height: 80%
        }

        .et_pb_svg_logo #logo {
            height: 80%
        }

        .et_header_style_centered.et_hide_primary_logo #main-header:not(.et-fixed-header) .logo_container,
        .et_header_style_centered.et_hide_fixed_logo #main-header.et-fixed-header .logo_container {
            height: 15.3px
        }

        .et_header_style_left .et-fixed-header #et-top-navigation,
        .et_header_style_split .et-fixed-header #et-top-navigation {
            padding: 43px 0 0 0
        }

        .et_header_style_left .et-fixed-header #et-top-navigation nav>ul>li>a,
        .et_header_style_split .et-fixed-header #et-top-navigation nav>ul>li>a {
            padding-bottom: 43px
        }

        .et_header_style_centered header#main-header.et-fixed-header .logo_container {
            height: 86px
        }

        .et_header_style_split #main-header.et-fixed-header .centered-inline-logo-wrap {
            width: 86px;
            margin: -86px 0
        }

        .et_header_style_split .et-fixed-header .centered-inline-logo-wrap #logo {
            max-height: 86px
        }

        .et_pb_svg_logo.et_header_style_split .et-fixed-header .centered-inline-logo-wrap #logo {
            height: 86px
        }

        .et_header_style_slide .et-fixed-header #et-top-navigation,
        .et_header_style_fullscreen .et-fixed-header #et-top-navigation {
            padding: 34px 0 34px 0 !important
        }

        .et-fixed-header #top-menu a,
        .et-fixed-header #et_search_icon:before,
        .et-fixed-header #et_top_search .et-search-form input,
        .et-fixed-header .et_search_form_container input,
        .et-fixed-header .et_close_search_field:after,
        .et-fixed-header #et-top-navigation .et-cart-info {
            color: #000f68 !important
        }

        .et-fixed-header .et_search_form_container input::-moz-placeholder {
            color: #000f68 !important
        }

        .et-fixed-header .et_search_form_container input::-webkit-input-placeholder {
            color: #000f68 !important
        }

        .et-fixed-header .et_search_form_container input:-ms-input-placeholder {
            color: #000f68 !important
        }

        .et-fixed-header #top-menu li.current-menu-ancestor>a,
        .et-fixed-header #top-menu li.current-menu-item>a {
            color: #f8b271 !important
        }
    }

    @media only screen and (min-width:1350px) {
        .et_pb_row {
            padding: 27px 0
        }

        .et_pb_section {
            padding: 54px 0
        }

        .single.et_pb_pagebuilder_layout.et_full_width_page .et_post_meta_wrapper {
            padding-top: 81px
        }

        .et_pb_fullwidth_section {
            padding: 0
        }
    }

    img.head-initial {
        max-width: 217px;
        height: 102px;
        margin-top: -29px;
        margin-left: -78px
    }

    #top-menu,
    .et-menu,
    nav#top-menu-nav,
    nav.et-menu-nav {
        float: left;
        margin-right: 11px
    }

    #top-menu,
    .et-menu,
    nav#top-menu-nav,
    nav.et-menu-nav {
        margin-right: 57px
    }
    </style>
    <style type="text/css">
    .mec-slider-t4-footer {
        display: none;
    }

    div#mec_search_form_369 {
        display: none;
    }

    .mec-calendar.mec-calendar-daily .mec-calendar-d-top {
        text-align: center;
        padding: 0;
        position: relative;
        background-color: rgb(255 193 7 / 58%);
    }

    .mec-event-footer {
        display: none;
    }
    </style>
    <style>
    #rev_slider_2_1_wrapper {
        height: 350px
    }
    </style>
    <style>
    [data-columns]::before {
        visibility: hidden;
        position: absolute;
        font-size: 1px;
    }
    </style>
    <style id="fit-vids-style">
    .fluid-width-video-wrapper {
        width: 100%;
        position: relative;
        padding: 0;
    }

    .fluid-width-video-wrapper iframe,
    .fluid-width-video-wrapper object,
    .fluid-width-video-wrapper embed {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    </style>
    <style data-id="scroll-effects-style-2-NaN-[object Object]180">
    body[data-scroll-step="0"] .et_pb_image_0 {
        filter: blur(10px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="1"] .et_pb_image_0 {
        filter: blur(10px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="2"] .et_pb_image_0 {
        filter: blur(10px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="3"] .et_pb_image_0 {
        filter: blur(10px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="4"] .et_pb_image_0 {
        filter: blur(10px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="5"] .et_pb_image_0 {
        filter: blur(10px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="6"] .et_pb_image_0 {
        filter: blur(10px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="7"] .et_pb_image_0 {
        filter: blur(10px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="8"] .et_pb_image_0 {
        filter: blur(10px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="9"] .et_pb_image_0 {
        filter: blur(10px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="10"] .et_pb_image_0 {
        filter: blur(10px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="11"] .et_pb_image_0 {
        filter: blur(10px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="12"] .et_pb_image_0 {
        filter: blur(10px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="13"] .et_pb_image_0 {
        filter: blur(10px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="14"] .et_pb_image_0 {
        filter: blur(10px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="15"] .et_pb_image_0 {
        filter: blur(10px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="16"] .et_pb_image_0 {
        filter: blur(10px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="17"] .et_pb_image_0 {
        filter: blur(10px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="18"] .et_pb_image_0 {
        filter: blur(10px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="19"] .et_pb_image_0 {
        filter: blur(10px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="20"] .et_pb_image_0 {
        filter: blur(10px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="21"] .et_pb_image_0 {
        filter: blur(9px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="22"] .et_pb_image_0 {
        filter: blur(7px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="23"] .et_pb_image_0 {
        filter: blur(4px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="24"] .et_pb_image_0 {
        filter: blur(2px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="25"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="26"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="27"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="28"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="29"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="30"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="31"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="32"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="33"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="34"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="35"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="36"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="37"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="38"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="39"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="40"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="41"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="42"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="43"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="44"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="45"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="46"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="47"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="48"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="49"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="50"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="51"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="52"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="53"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="54"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="55"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="56"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="57"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="58"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="59"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="60"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="61"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="62"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="63"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="64"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="65"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="66"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="67"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="68"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="69"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="70"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="71"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="72"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="73"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="74"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="75"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="76"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="77"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="78"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="79"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="80"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="81"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="82"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="83"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="84"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="85"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="86"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="87"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="88"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="89"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="90"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="91"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="92"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="93"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="94"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="95"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="96"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="97"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="98"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="99"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="100"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="101"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="102"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="103"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="104"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="105"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="106"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="107"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="108"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="109"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="110"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="111"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="112"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="113"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="114"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="115"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="116"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="117"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="118"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="119"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="120"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="121"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="122"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="123"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="124"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="125"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="126"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="127"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="128"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="129"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="130"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="131"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="132"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="133"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="134"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="135"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="136"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="137"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="138"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="139"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="140"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="141"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="142"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="143"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="144"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="145"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="146"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="147"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="148"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="149"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="150"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="151"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="152"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="153"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="154"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="155"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="156"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="157"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="158"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="159"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="160"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="161"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="162"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="163"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="164"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="165"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="166"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="167"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="168"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="169"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="170"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="171"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="172"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="173"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="174"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="175"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="176"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="177"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="178"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="179"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="180"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="181"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="182"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="183"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="184"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="185"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="186"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="187"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="188"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    body[data-scroll-step="189"] .et_pb_image_0 {
        filter: blur(0px);
        transition: filter 200ms linear
    }

    .button {
        background: red;
        cursor: pointer;
        padding: 15px 20px;
        border-radius: 8px
    }
	.cnowbtn{
		float:right;
		position: absolute;
		margin-top : -30px;
		width:120px;
	}

	.footer-widget{
		padding:10px;
		max-width:50%;
	}
	#text-4{
		width:90%;
		padding-left:100px;
	}

	/* form css */
	.card-container{
		
	}

	.card-container .card{
		border : 1px solid rgb(244,127,47);;
		box-shadow: 15px 15px 11px #ff910f;
	}

	.card-container .card .card-header{
		background: linear-gradient(90deg, rgba(244,127,47,1) 12%, rgba(255,212,121,1) 50%, rgba(244,127,47,1) 87%);
		font-size:24px;
		font-weight:bold;
		color:white;
		text-shadow: 1px 2px 10px #4400ff
	}

	.card-container .card input , textarea{
		border : 1px solid rgb(244,127,47);;
		box-shadow: 7px 5px 5px #ff910f;
	}
	.card-container .card label{
		font-weight:bolder;
		color:#ff910f;
		font-size:16px;
		text-shadow: 1px 2px 10px #ff910f
	}
	.submit_btn{
    background: red;
    cursor: pointer;
    padding: 15px 20px;
    border-radius: 8px;
	border:none;
	color:white;
	}

    #logon{
        position: absolute;
        height:50px;
       top:1px !important;
    }

    #main-header{
        height:70px;
    }
    </style>
</head>

<body>
    <div id="app">
        <header id="main-header" data-height-onload="85" >
            <div class="container clearfix et_menu_container">
                <div class="logo_container">
                    <span class="logo_helper"></span>
                    <a href="https://appdemo.testconference.xyz/gorakshana/index.html">
                        <img id="logon" src="{{asset('wp-content')}}/uploads/2021/01/New-Project-66.png"
                            alt="GoRakshana" id="logo" data-height-percentage="80" />
                    </a>
                </div>
                <div id="et-top-navigation" data-height="85" data-fixed-height="86">
                    <nav id="top-menu-nav">
                        <ul id="top-menu" class="nav">
                            <li id="menu-item-81"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-78 current_page_item menu-item-81">
                                <a href="https://appdemo.testconference.xyz/gorakshana/index.html" aria-current="page">Home</a>
                            </li>
                            <li id="menu-item-661"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-661">
                                <a href="#">About Us</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-94"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-94"><a
                                            href="https://appdemo.testconference.xyz/gorakshana/vision-and-mission/index.html">Vision and mission</a></li>
                                    <li id="menu-item-150"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-150">
                                        <a href="https://appdemo.testconference.xyz/gorakshana/history/index.html">History</a>
                                    </li>
                                    <li id="menu-item-151"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-151">
                                        <a href="https://appdemo.testconference.xyz/gorakshana/governes/index.html">Governes</a>
                                    </li>
                                    <li id="menu-item-152"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-152">
                                        <a href="https://appdemo.testconference.xyz/gorakshana/statutary-certification/index.html">statutary certification</a>
                                    </li>
                                    <li id="menu-item-96"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-96"><a
                                            href="https://appdemo.testconference.xyz/gorakshana/services/index.html">Other Services</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-201"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-201"><a
                                    href="https://appdemo.testconference.xyz/gorakshana/meet-our-cows/index.html">Meet our cows</a></li>
                            <li id="menu-item-887"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-887">
                                <a href="#">Gallery</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-310"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-310">
                                        <a href="https://appdemo.testconference.xyz/gorakshana/gallery/index.html">Images</a>
                                    </li>
                                    <li id="menu-item-311"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-311">
                                        <a href="https://appdemo.testconference.xyz/gorakshana/videos/index.html">Videos</a>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-202"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-202"><a
                                    href="https://appdemo.testconference.xyz/gorakshana/join-as-a-life-patron-2/index.html">Join as a life patron</a></li>
                            <li id="menu-item-203"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-203"><a
                                    href="https://appdemo.testconference.xyz/gorakshana/gosala-produces-2/index.html">Gosala Produces</a></li>
                            <li id="menu-item-95"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-95"><a
                                    href="https://appdemo.testconference.xyz/gorakshana/contact/index.html">Contact Us</a></li>
                        </ul>
                    </nav>



                    <div id="et_top_search" style="color:black">
                                    @if (Route::has('login'))
                                            @auth
                                                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                                            @else
                                                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                                                <!-- @if (Route::has('register'))
                                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                                @endif -->
                                            @endauth
                                    @endif
                    </div>

                    <div id="et_mobile_nav_menu">
                        <div class="mobile_nav closed">
                            <span class="select_page">Select Page</span>
                            <span class="mobile_menu_bar mobile_menu_bar_toggle"></span>
                        </div>
                    </div>
                </div> <!-- #et-top-navigation -->
            </div> <!-- .container -->
            <div class="et_search_outer">
                <div class="container et_search_form_container">
                    <form role="search" method="get" class="et-search-form"
                        action="../external.html?link=http://gorakshana.org/">
                        <input type="search" class="et-search-field" placeholder="Search &hellip;" value="" name="s"
                            title="Search for:" />
                    </form>
                    <span class="et_close_search_field"></span>
                </div>
            </div>

        </header>

        <main class="py-4">
            @yield('content')
        </main>

        <footer id="main-footer">

            <div class="container">
                <div id="footer-widgets" class="clearfix">
                    <div class="footer-widget">
                        <div id="custom_html-5" class="widget_text fwidget et_pb_widget widget_custom_html">
                            <div class="textwidget custom-html-widget"></div>
                        </div> <!-- end .fwidget -->
                        <div id="media_image-3" class="fwidget et_pb_widget widget_media_image"><img width="300"
                                height="150" src="wp-content/uploads/2021/01/New-Project-66.png"
                                class="image wp-image-816  attachment-full size-full" alt="" loading="lazy"
                                style="max-width: 100%; height: auto;" /></div> <!-- end .fwidget -->
                    </div> <!-- end .footer-widget -->
                    <div class="footer-widget">
                        <div id="text-3" class="fwidget et_pb_widget widget_text">
                            <h4 class="title">Quick Link</h4>
                            <div class="textwidget">
                                <ol>
                                    <li><a
                                            href="../external.html?link=http://gorakshana.cloudsdial.com/vision-and-mission/">Vision
                                            and mission</a></li>
                                    <li><a
                                            href="../external.html?link=http://gorakshana.cloudsdial.com/history/">History</a>
                                    </li>
                                    <li><a
                                            href="../external.html?link=http://gorakshana.cloudsdial.com/governes/">Governes</a>
                                    </li>
                                    <li><a
                                            href="../external.html?link=http://gorakshana.cloudsdial.com/statutary-certification/">statutary
                                            certification</a></li>
                                    <li><a
                                            href="../external.html?link=http://gorakshana.cloudsdial.com/gosala-produces-2/">Gosala
                                            Produces</a></li>
                                    <li><a
                                            href="../external.html?link=http://gorakshana.cloudsdial.com/join-as-a-life-patron-2/">Join
                                            as a life patron</a></li>
                                    <li><a href="../external.html?link=http://gorakshana.cloudsdial.com/meet-our-cows/">Meet
                                            our cows</a></li>
                                    <li><a
                                            href="../external.html?link=http://gorakshana.cloudsdial.com/services/">Services</a>
                                    </li>
                                    <li><a href="../external.html?link=http://gorakshana.cloudsdial.com/donte-for-cow/">Donate
                                            For Cow</a></li>
                            </div>
                        </div> <!-- end .fwidget -->
                    </div> <!-- end .footer-widget -->
                    <div class="footer-widget">
                        <div id="text-4" class="fwidget et_pb_widget widget_text">
                            <h4 class="title">Get in touch</h4>
                            <div class="textwidget">
                                <p><strong>Address:  </strong>WG3, Vijayalakshmi Flate, Pillayar Koil Cross Street,
                                    Keelkatalai, Chennai-600117.</p>
                                <p><strong>Email: </strong>gorakshna@gmail.com</p>
                                <p><strong>Phone: </strong>9444381772,9444201772,9543011772</p>
                            </div>
                        </div> <!-- end .fwidget -->
                    </div> <!-- end .footer-widget -->
                    <div class="footer-widget">
                        <div id="custom_html-8" class="widget_text fwidget et_pb_widget widget_custom_html">
                            <div class="textwidget custom-html-widget">
                                <a href="contact/index.html" class="button cnowbtn">Donate cow</a>
                            </div>
                        </div> <!-- end .fwidget -->
                    </div> <!-- end .footer-widget -->
                </div> <!-- #footer-widgets -->
            </div> <!-- .container -->


            <div id="footer-bottom">
                <div class="container clearfix">
                    <ul class="et-social-icons">

                        <li class="et-social-icon et-social-facebook">
                            <a href="../external.html?link=https://www.facebook.com/people/GO-Rakshna-Samithi/100004872828160"
                                class="icon">
                                <span>Facebook</span>
                            </a>
                        </li>
                        <li class="et-social-icon et-social-youtube">
                            <a href="../external.html?link=https://www.youtube.com/channel/UCcBPlwQSynWxmVvxq0X9dhg/videos"
                                class="icon">
                                <span>youtube</span>
                            </a>
                        </li>
                        <li class="et-social-icon et-social-instagram">
                            <a href="../external.html?link=https://www.instagram.com/p/BxMRBukB1HY/" class="icon">
                                <span>Instagram</span>
                            </a>
                        </li>
                    </ul>
                    <div id="footer-info">2020 © Gorakshana All Rights Reserved. Design and Developed by CloudsDial
                        Solutions Pvt Ltd.</div>
                </div> <!-- .container -->
            </div>
        </footer> <!-- #main-footer -->
    </div>
</body>

</html>