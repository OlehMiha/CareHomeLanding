<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title><?php 
        if($Title=get_field("title_new")){ 
            echo $Title;
        } else {
            bloginfo('name');
        }?></title>
    <meta name="description" content="<?php 
        if($Description=get_field("description_new")) {
            echo $Description;
        } else {
            bloginfo('description');
        }?>"> 
    <meta name="Keywords" content="<?php if($Keywords=get_field("keywords_new")) echo $Keywords;?>"> 
    
    <!-- !!!Noindex!!! -->
    <meta name="robots" content="noindex" />
    
    <!-- Favicon.ico -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_url'); ?>/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url'); ?>/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <style>
        /*PRELOADER*/
        @keyframes wavy-loader {
          0%    { top: 2px; }
          1%    { top: 4px; }
          2%    { top:6px; }
          3%    { top:8px; }
          4%    { top: 10px; }
          5%    { top:12px; opacity: 1; }
          6%    { top: -2px; opacity: 1; }
          7%    { top: -4px; opacity: 1; }
          8%    { top: -6px; opacity: 1; }
          9%    { top: -8px; opacity: 1; }
          10%   { top: -10px; opacity: 1; }
          11%   { top: -12px; opacity: 1; }
          12%   { top: 0; opacity: .5; }
          100%  { top: 0; opacity: .5; }
        }
        @-webkit-keyframes wavy-loader {
          0%    { top: 2px; }
          1%    { top: 4px; }
          2%    { top:6px; }
          3%    { top:8px; }
          4%    { top: 10px; }
          5%    { top:12px; opacity: 1; }
          6%    { top: -2px; opacity: 1; }
          7%    { top: -4px; opacity: 1; }
          8%    { top: -6px; opacity: 1; }
          9%    { top: -8px; opacity: 1; }
          10%   { top: -10px; opacity: 1; }
          11%   { top: -12px; opacity: 1; }
          12%   { top: 0; opacity: .5; }
          100%  { top: 0; opacity: .5; }
        }
        .volosunov {
          position: fixed;
          left: 0;
          top: 0;
          right: 0;
          bottom: 0;
          background: #363636;
          z-index: 100500;
        }
        .volosunov .spinner {
          position: absolute;
          left: 50%;
          top: 50%;    
          width: 84px;
          height: 18px;
          margin: -9px 0 0 -42px;
        }
        .volosunov .spinner span {
          display: inline-block;
          position: relative;
          border-radius: 50%;
          width: 8px;
          height: 8px;
          margin: 2px;
          background-color: #4a90e2;
          opacity: .5;
        }
        .volosunov .spinner span:nth-child(2n) {
          background-color: #fff;
        }
        .volosunov .spinner span:first-child {
          animation: wavy-loader 2.5s .1s ease-out infinite;
          -webkit-animation: wavy-loader 2.5s .1s ease-out infinite;
        }

        .volosunov .spinner span:nth-child(2) {
          animation: wavy-loader 2.5s .2s ease-out infinite;
          -webkit-animation: wavy-loader 2.5s .2s ease-out infinite;
        }

        .volosunov .spinner span:nth-child(3) {
          animation: wavy-loader 2.5s .3s ease-out infinite;
          -webkit-animation: wavy-loader 2.5s .3s ease-out infinite;
        }

        .volosunov .spinner span:nth-child(4) {
          animation: wavy-loader 2.5s .4s ease-out infinite;
          -webkit-animation: wavy-loader 2.5s .4s ease-out infinite;
        }

        .volosunov .spinner span:nth-child(5) {
          animation: wavy-loader 2.5s .5s ease-out infinite;
          -webkit-animation: wavy-loader 2.5s .5s ease-out infinite;
        }
    </style>

    <?php wp_head(); ?>
    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  
       </head>

    <body class="body_my <?php 
    if( !(is_front_page() || is_page_template('templates/index-template.php') || is_page_template('templates/request-template.php')) ) {echo "contacts";}
    if( is_page_template('templates/request-template.php') ) {echo "request";}
     ?>">
        <!-- PRELOADER -->
        <div class="volosunov"> 
            <span class="spinner">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </span>
        </div>
        <!-- PRELOADER -->

        <!-- All content -->
        <div class="all"> 
        <div id="top"></div>

        <!-- Header -->
        <header> 
            <!-- Header Menu -->
            <div class="menu_div_off"></div>
            <nav class="menu_div"> 
                <div class="container">
                  <?php 
                  $logo_black_header = get_field('logo_black_header', 'option'); 
                  $logo_color_header = get_field('logo_color_header', 'option');
                  if( $logo_black_header && $logo_color_header ) { ?>
                    <style>
                      .Logo {
                        background: url("<?php echo $logo_black_header["url"] ?>") no-repeat;
                        background-position: center;
                        background-size: contain;
                      }
                      .menu_div.scroll .Logo {
                        background: url("<?php echo $logo_color_header["url"] ?>") no-repeat;
                        background-position: center;
                        background-size: contain;
                      }
                    </style>
                    <a href="<?php echo home_url(); ?>" class="Logo"></a>
                  <?php } ?>

                    <div class="button_mobi_menu">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <ul class="menu_top row align-items-center justify-content-between">
                        <?php
                            $masiv = array(
                                'theme_location'  => 'menu',
                                'menu'            => '', 
                                'container'       => false, 
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => 'top_menu_iner', 
                                'menu_id'         => '',
                                'echo'            => false,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth'           => 2,
                                'walker'          => '',
                            );
                            print strip_tags(wp_nav_menu($masiv), '<li> <a>');
                        ?>  

                        <div class="button_header_div">

                          <?php 
                          $header_button_left_text = get_field('header_button_left_text', 'option');
                          $header_button_left_link = get_field('header_button_left_link', 'option');
                          if($header_button_left_text && $header_button_left_link ){ ?>
                            <a href="<?php echo $header_button_left_link; ?>" class="button_0 button_1 log_in align-items-center justify-content-center"><?php echo $header_button_left_text; ?></a>
                          <?php } ?>

                          <?php 
                          $header_button_right_text = get_field('header_button_right_text', 'option');
                          $header_button_right_link = get_field('header_button_right_link', 'option');
                          if($header_button_right_text && $header_button_right_link ){ ?>
                            <a href="<?php echo $header_button_right_link; ?>" class="button_0 button_1 sign_up align-items-center justify-content-center"><?php echo $header_button_right_text; ?></a>
                          <?php } ?>

                        </div>
                    </ul>

                </div>
            </nav>
        </header>