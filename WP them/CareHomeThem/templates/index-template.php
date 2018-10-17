<?php 
/*
 * Template name: Index page
 */
get_header();
?>

<!-- Header block -->
<?php if(get_field('is_active_header_block')): ?>
    <section class="header_block" style="<?php if(get_field('height_100%_header_block')) { ?>
        height: 100vh;
    <?php } 
    if( $background_header_block = get_field('background_header_block') ) { ?>
        background: url('<?php echo $background_header_block["url"]?>') no-repeat;
        background-position: center;
        background-size: cover; 
    <?php } ?>">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-12 header_block_iner mov mov_zoomIn_start">

                    <?php if( $title_header_block = get_field('title_header_block') ) { ?>
                        <h1><?php echo $title_header_block; ?></h1>
                    <?php } ?>

                    <?php if(get_field('is_active_header_button')):
                    $button_text_header_block = get_field('button_text_header_block');
                    $button_link_header_block = get_field('button_link_header_block');
                    if( $button_text_header_block && $button_link_header_block ) { ?>
                      <a href="<?php echo $button_link_header_block; ?>" class="button_0 button_2 align-items-center justify-content-center"><?php echo $button_text_header_block; ?></a>  
                    <?php } 
                        endif;
                    ?>
                    
                </div>

            </div>
        </div>
    </section>
<?php else: ?>
    <section class="header_none_bac_menu">
    </section>
<?php endif; ?>

    <!-- Block 1 -->
    <section id="m1" class="block_1">
        <div class="container">
            
            <div class="title_block_div">
            <?php if( $title_top_block_1 = get_field('title_top_block_1') ) { ?>
                <p class="title_top"><?php echo $title_top_block_1; ?></p>
            <?php } ?>
            
            <?php if( $title_block_1 = get_field('title_block_1') ) { ?>
                <p class="title"><?php echo $title_block_1; ?></p>
            <?php } ?>

            <?php if( $title_bot_block_1 = get_field('title_bot_block_1') ) { ?>
                <p class="title_bot"><?php echo $title_block_1; ?></p>
            <?php } ?>

            </div>

            <?php if(have_rows('why_use_blocks')): ?>
            <div class="row ico_block_1 mov_div mov_next_fadeIn_timeOut">

                <?php 
                $count_while = 0;
                while( have_rows('why_use_blocks') ): the_row(); 
                    // vars
                    $count_while++;
                    $img = get_sub_field('img');
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');
                ?>

                    <?php if( $img && $title && $text ): ?>

                    <div class="col-12 col-lg-6 ico_block_1_<?php echo ($count_while % 2 == 0) ? 'r' : 'l' ?>">
                        <div class="ico" style="
                        background: url('<?php echo $img["url"]?>') no-repeat;background-position: center;"></div>
                        <p class="title">
                            <?php echo $title ?>
                        </p>
                        <p class="text">
                            <?php echo $text ?>
                        </p>
                    </div>

                    <?php endif; ?>

                <?php endwhile; ?>

            </div>
            <?php endif; ?>

        </div>
    </section>
 
    <!-- Block 2 -->
    <section id="m2" class="block_2">
        <div class="block_2_iner">
            <p class="block_2_iner_text">
                CAREHOME
            </p>

            <div class="block_2_iner_absolute left_block_2_iner tab_js tab_2" style="<?php if( $img_left = get_field('img_left') ) { ?>
                background: url('<?php echo $img_left["url"]?>') no-repeat;
                background-position: center;
                background-size: cover; 
            <?php } ?>">
                <div class="row justify-content-end align-items-center">

                    <div class="col">
                        <?php if( $title_left_block_2 = get_field('title_left_block_2') ) { ?>
                            <div class="title"><?php echo $title_left_block_2; ?></div>
                        <?php } ?>

                        <?php if( $text_preview_left = get_field('text_preview_left') ) { ?>
                            <p><?php echo $text_preview_left; ?></p>
                        <?php } ?>

                        <?php if( $text_button_left = get_field('text_button_left') ) { ?>
                            <a href="#" class="button_0 button_2 align-items-center justify-content-center tabs_js active" data-tab="tab_1"><?php echo $text_button_left; ?></a>
                        <?php } ?>
                    </div>

                </div>
            </div>

            <div class="block_2_iner_absolute right_block_2_iner tab_js tab_1" style="<?php if( $img_left_right = get_field('img_left_right') ) { ?>
                background: url('<?php echo $img_left_right["url"]?>') no-repeat;
                background-position: center;
                background-size: cover; 
            <?php } ?>">
                <div class="row justify-content-start align-items-center">

                    <div class="col">
                        <?php if( $title_right_block_2 = get_field('title_right_block_2') ) { ?>
                            <div class="title"><?php echo $title_right_block_2; ?></div>
                        <?php } ?>

                        <?php if( $text_preview_right = get_field('text_preview_right') ) { ?>
                            <p><?php echo $text_preview_right; ?></p>
                        <?php } ?>

                        <?php if( $text_button_right = get_field('text_button_right') ) { ?>
                            <a href="#" class="button_0 button_2 align-items-center justify-content-center tabs_js" data-tab="tab_2"><?php echo $text_button_right; ?></a>
                        <?php } ?>
                    </div>

                </div>
            </div>


            <div class="container">

                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 content_90">
                        <?php if( $title_left_block_2 = get_field('title_left_block_2') ) { ?>
                            <div class="title"><?php echo $title_left_block_2; ?></div>
                        <?php } ?>

                        <?php if( $text_left = get_field('text_left') ) { ?>
                            <p>
                                <?php echo $text_left; ?>
                            </p>
                        <?php } ?>
                    </div>

                    <div class="col-12 col-lg-6 content_90">
                        
                        <?php if( $title_right_block_2 = get_field('title_right_block_2') ) { ?>
                            <div class="title"><?php echo $title_right_block_2; ?></div>
                        <?php } ?>
                        
                        <?php if( $text_right = get_field('text_right') ) { ?>
                            <p>
                                <?php echo $text_right; ?>
                            </p>
                        <?php } ?>          

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Block 3 -->
    <section id="m3" class="block_3">
        <div class="container">
            
            <div class="title_block_div">
            <?php if( $title_top_block_3 = get_field('title_top_block_3') ) { ?>
                <p class="title_top"><?php echo $title_top_block_3; ?></p>
            <?php } ?>
            
            <?php if( $title_block_3 = get_field('title_block_3') ) { ?>
                <p class="title"><?php echo $title_block_3; ?></p>
            <?php } ?>

            <?php if( $title_bot_block_3 = get_field('title_bot_block_3') ) { ?>
                <p class="title_bot"><?php echo $title_block_3; ?></p>
            <?php } ?>

            </div>

            <div class="row block_3_row mov_div mov_slideInLeft">

                <?php 
                $count_while = 0;
                while( have_rows('steps') ): the_row(); 
                    // vars
                    $count_while++;
                    $img = get_sub_field('img');
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');
                ?>

                    <?php if( $img && $title && $text ): ?>

                    <div class="col block_3_iner block_3_<?php echo $count_while; ?>">
                        <div class="block_3_iner_step block_3_iner_step_<?php echo $count_while; ?>">
                            <p class="title">
                                <?php echo $title ?>
                            </p>
                            <div class="ico_b3" style="
                            background: url('<?php echo $img["url"]?>') no-repeat;background-position: center;"></div>
                            <p class="text">
                                <?php echo $text ?>
                            </p>
                        </div>
                    </div>

                    <?php endif; ?>

                <?php endwhile; ?>


                <div class="col block_3_iner block_3_5">

                <?php if( $title_right_block_3 = get_field('title_right_block_3') ) { ?>
                    <p class="title_content"><?php echo $title_right_block_3; ?></p>
                <?php } ?>

                <?php if( $Text_right_block_3 = get_field('Text_right_block_3') ) { ?>
                    <p class="text_content"><?php echo $Text_right_block_3; ?></p>
                <?php } ?>

                <?php if( $text_link_b3 = get_field('text_link_b3') ) { ?>
                    <a class="go_a" href="<?php echo ($link_b3 = get_field('link_b3')) ? $link_b3 : "#features" ?>"><?php echo $text_link_b3; ?></a>
                <?php } ?>

                </div>

            </div>

        </div>
    </section>


    <!-- Block 4 -->
    <section id="m4">

    <?php 
    $count_while = 0;
    while( have_rows('how_it_works') ): the_row(); 
        // vars
        $count_while++;
        $img = get_sub_field('img');
        $title = get_sub_field('title');
        $title_bot = get_sub_field('title_bot');
        $text = get_sub_field('text');
    ?>

        <?php if( $img && $title && $text ): ?>

            <?php if($count_while % 2 == 0) { ?>

            <div class="block_4_r block_4_how_it_works">
                <div class="container">

                    <div class="row align-items-center how_it_works_div">

                        <div class="col-12 col-lg-6 how_it_works_div_l how_it_works_text">
                            <div class="title">
                                <?php echo $title ?>
                            </div>
                            <p class="title_iner">
                                <?php echo $title_bot ?>
                            </p>

                            <?php echo $text ?>

                        </div>

                        <div class="col-12 col-lg-6">
                            <img src="<?php echo $img["url"] ?>" alt="<?php echo $img["alt"] ?>" class="mov mov_next_fadeInRight">
                        </div>

                    </div>
                </div>
            </div>

            <?php } else { ?>

            <div class="block_4 block_4_l <?php echo ($count_while > 1 ? "block_4_how_it_works" : ""); ?>">
                <div class="container">

                    <?php if($count_while == 1){ ?>
                        <div class="title_block_div title_block_div_big">
                        <?php if( $title_top_block_4 = get_field('title_top_block_4') ) { ?>
                            <p class="title_top"><?php echo $title_top_block_4; ?></p>
                        <?php } ?>
                        
                        <?php if( $title_block_4 = get_field('title_block_4') ) { ?>
                            <p class="title"><?php echo $title_block_4; ?></p>
                        <?php } ?>

                        <?php if( $title_bot_block_4 = get_field('title_bot_block_4') ) { ?>
                            <p class="title_bot"><?php echo $title_bot_block_4; ?></p>
                        <?php } ?>
                        </div>
                    <?php } ?>

                    <div class="row align-items-center how_it_works_div">
                        <div class="col-12 col-lg-6 how_it_works_div_l">
                            <img src="<?php echo $img["url"]?>" alt="<?php echo $img["alt"]?>" class="mov mov_next_fadeInLeft">
                        </div>
                        <div class="col-12 col-lg-6 how_it_works_text">
                            <div class="title">
                                <?php echo $title ?>
                            </div>
                            <p class="title_iner">
                                <?php echo $title_bot ?>
                            </p>

                            <?php echo $text ?>
                        </div>

                    </div>

                </div>
            </div>
            <?php } ?>

        <?php endif; ?>

    <?php endwhile; ?>

    </section>



    <!-- Block 5 -->
    <section id="features" class="block_5">
        <div class="container">
            
            <div class="title_block_div">
            <?php if( $title_top_block_5 = get_field('title_top_block_5') ) { ?>
                <p class="title_top"><?php echo $title_top_block_5; ?></p>
            <?php } ?>
            
            <?php if( $title_block_5 = get_field('title_block_5') ) { ?>
                <p class="title"><?php echo $title_block_5; ?></p>
            <?php } ?>

            <?php if( $title_bot_block_5 = get_field('title_bot_block_5') ) { ?>
                <p class="title_bot_2"><?php echo $title_bot_block_5; ?></p>
            <?php } ?>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6 left_block_5_div">

                    <div class="card_block_5 card_block_5_1 card_tile_js">
                        <?php if($title_slider_1_b5 = get_field('title_slider_1_b5')) { ?>
                            <p class="title"><?php echo $title_slider_1_b5; ?></p>
                        <?php } ?>

                        <?php if($text_slider_1_b5 = get_field('text_slider_1_b5')) { ?>
                            <?php echo $text_slider_1_b5; ?>
                        <?php } ?>
                    </div>

                    <div class="card_block_5 card_block_5_2 card_tile_js">
                        <?php if($title_slider_2_b5 = get_field('title_slider_2_b5')) { ?>
                            <p class="title"><?php echo $title_slider_2_b5; ?></p>
                        <?php } ?>
                        
                        <?php if($text_slider_2_b5 = get_field('text_slider_2_b5')) { ?>
                            <?php echo $text_slider_2_b5; ?>
                        <?php } ?>
                    </div>

                    <div class="card_block_5 card_block_5_3 card_tile_js">
                        <?php if($title_slider_3_b5 = get_field('title_slider_3_b5')) { ?>
                            <p class="title"><?php echo $title_slider_3_b5; ?></p>
                        <?php } ?>
                        
                        <?php if($text_slider_3_b5 = get_field('text_slider_3_b5')) { ?>
                            <?php echo $text_slider_3_b5; ?>
                        <?php } ?>
                    </div>

                    <div class="card_block_5 card_block_5_4 card_tile_js">
                        <?php if($title_slider_4_b5 = get_field('title_slider_4_b5')) { ?>
                            <p class="title"><?php echo $title_slider_4_b5; ?></p>
                        <?php } ?>
                        
                        <?php if($text_slider_4_b5 = get_field('text_slider_4_b5')) { ?>
                            <?php echo $text_slider_4_b5; ?>
                        <?php } ?>
                    </div>

                    <div class="card_block_5 card_block_5_5 card_tile_js">
                        <?php if($title_slider_5_b5 = get_field('title_slider_5_b5')) { ?>
                            <p class="title"><?php echo $title_slider_5_b5; ?></p>
                        <?php } ?>
                        
                        <?php if($text_slider_5_b5 = get_field('text_slider_5_b5')) { ?>
                            <?php echo $text_slider_5_b5; ?>
                        <?php } ?>
                    </div>

                </div>

                <div class="col-12 col-lg-6 tile_div_all">
                    <div class="tile_div_relative mov_tile_js">

                        <div class="iner_tile iner_tile_1 click_tile_js active" data-card="card_block_5_1">
                            <div>
                                <div class="text_tile">
                                    <div class="ico_tile" <?php if($ico_slider_1_b5 = get_field('ico_slider_1_b5')) { ?>style="background: url('<?php echo $ico_slider_1_b5["url"]?>') no-repeat;background-position: center;" <?php } ?> ></div>

                                    <?php if($title_slider_1_b5 = get_field('title_slider_1_b5')) { ?>
                                        <p><?php echo $title_slider_1_b5; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <div class="iner_tile iner_tile_2 click_tile_js" data-card="card_block_5_2">
                            <div>
                                <div class="text_tile">
                                    <div class="ico_tile" <?php if($ico_slider_2_b5 = get_field('ico_slider_2_b5')) { ?>style="background: url('<?php echo $ico_slider_2_b5["url"]?>') no-repeat;background-position: center;" <?php } ?> ></div>
                                    
                                    <?php if($title_slider_2_b5 = get_field('title_slider_2_b5')) { ?>
                                        <p><?php echo $title_slider_2_b5; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <div class="iner_tile iner_tile_3 click_tile_js" data-card="card_block_5_3">
                            <div>
                                <div class="text_tile">
                                    <div class="ico_tile" <?php if($ico_slider_3_b5 = get_field('ico_slider_3_b5')) { ?>style="background: url('<?php echo $ico_slider_3_b5["url"]?>') no-repeat;background-position: center;" <?php } ?> ></div>
                                    
                                    <?php if($title_slider_3_b5 = get_field('title_slider_3_b5')) { ?>
                                        <p><?php echo $title_slider_3_b5; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <div class="iner_tile iner_tile_4 click_tile_js" data-card="card_block_5_4">
                            <div>
                                <div class="text_tile">
                                    <div class="ico_tile" <?php if($ico_slider_4_b5 = get_field('ico_slider_4_b5')) { ?>style="background: url('<?php echo $ico_slider_4_b5["url"]?>') no-repeat;background-position: center;" <?php } ?> ></div>
                                    
                                    <?php if($title_slider_4_b5 = get_field('title_slider_4_b5')) { ?>
                                        <p><?php echo $title_slider_4_b5; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <div class="iner_tile iner_tile_5 click_tile_js" data-card="card_block_5_5">
                            <div>
                                <div class="text_tile">
                                    <div class="ico_tile" <?php if($ico_slider_5_b5 = get_field('ico_slider_5_b5')) { ?>style="background: url('<?php echo $ico_slider_5_b5["url"]?>') no-repeat;background-position: center;" <?php } ?> ></div>
                                    
                                    <?php if($title_slider_5_b5 = get_field('title_slider_5_b5')) { ?>
                                        <p><?php echo $title_slider_5_b5; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </section>


    <!-- Block 6 -->
    <section class="block_6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-7">
                    <div class="title_block_div">
                    <?php if( $title_top_block_6 = get_field('title_top_block_6') ) { ?>
                        <p class="title_top"><?php echo $title_top_block_6; ?></p>
                    <?php } ?>
                    
                    <?php if( $title_block_6 = get_field('title_block_6') ) { ?>
                        <p class="title"><?php echo $title_block_6; ?></p>
                    <?php } ?>

                    <?php if( $title_bot_block_6 = get_field('title_bot_block_6') ) { ?>
                        <p class="title_bot_2"><?php echo $title_bot_block_6; ?></p>
                    <?php } ?>

                        <div class="link_store">
                            <?php if( $img_apple_store_footer = get_field('img_apple_store_footer', 'option') ) { ?>
                            <a href="<?php if($link_apple_store_footer = get_field('link_apple_store_footer', 'option') ){ echo $link_apple_store_footer; } ?>" class="apple_store" style="background: url('<?php echo $img_apple_store_footer["url"]; ?>') no-repeat;background-position: left center;" target="_blank"></a>
                            <?php } ?>
                            <?php if( $img_google_play_footer = get_field('img_google_play_footer', 'option') ) { ?>
                            <a href="<?php if($link_google_play_footer = get_field('link_google_play_footer', 'option') ){ echo $link_google_play_footer; } ?>" class="google_store" style="background: url('<?php echo $img_google_play_footer["url"]; ?>') no-repeat;background-position: left center;" target="_blank"></a>
                            <?php } ?>
                        </div>
                    </div>
                    
                </div>
                <div class="col-12 col-lg-5 iphone_div">
                    <?php if( $img_block_6 = get_field('img_block_6') ) { ?>
                        <img src="<?php echo $img_block_6["url"]; ?>" alt="<?php echo $img_block_6["alt"]; ?>" class="iphone_app_img mov mov_next_fadeInUp">
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>


    <!-- Block 7 -->
    <section id="m5" class="block_7">
        <div class="container">
            
            <div class="title_block_div title_block_div_big">
            <?php if( $title_top_block_7 = get_field('title_top_block_7') ) { ?>
                <p class="title_top"><?php echo $title_top_block_7; ?></p>
            <?php } ?>
            
            <?php if( $title_block_7 = get_field('title_block_7') ) { ?>
                <p class="title"><?php echo $title_block_7; ?></p>
            <?php } ?>

            <?php if( $title_bot_block_7 = get_field('title_bot_block_7') ) { ?>
                <p class="title_bot"><?php echo $title_bot_block_7; ?></p>
            <?php } ?>
            </div>
            
            <div class="row no-gutters price_plan_row justify-content-between mov_div mov_slideInLeft">

                <div class="col price_plan price_plan_1">

                    <div class="head_price"></div>

                    <div class="card_price">

                    <?php if( $name_1_plan_b7 = get_field('name_1_plan_b7') ) { ?>
                        <p class="title"><?php echo $name_1_plan_b7; ?></p>
                    <?php } ?>

                    <?php if( $price_1_plan_b7 = get_field('price_1_plan_b7') ) { ?>
                        <?php if( $currency_1_plan_b7 = get_field('currency_1_plan_b7') ) { ?>
                            <p class="price">
                                <span><?php echo $currency_1_plan_b7; ?></span><?php echo $price_1_plan_b7; ?>
                            </p>
                        <?php } else { ?>
                            <p class="price no-price"><?php echo $price_1_plan_b7; ?></p>
                        <?php } ?>
                    <?php } ?>

                    <p class="bot_text">
                    <?php if( $text_bottom_price_1_plan_b7 = get_field('text_bottom_price_1_plan_b7') ) { ?>
                        <?php echo $text_bottom_price_1_plan_b7; ?>
                    <?php } ?>
                    </p>


                    <?php if( $footnote_1_plan_b7 = get_field('footnote_1_plan_b7') ) { ?>
                        <p class="com_text">
                            <?php echo $footnote_1_plan_b7; ?>
                        </p>
                    <?php } ?>

                        <div class="lable_div">
                            <?php if( $line_text_1_plan_b7 = get_field('line_text_1_plan_b7') ) { ?>
                                <?php echo $line_text_1_plan_b7; ?>
                            <?php } ?>
                        </div>

                        
                        <?php if( $details_1_plan_b7 = get_field('details_1_plan_b7') ) { ?>
                            <?php echo $details_1_plan_b7; ?>
                        <?php } ?>
                        
                        <div class="button_price">
                            <?php 
                            $text_button_1_plan_b7 = get_field('text_button_1_plan_b7');
                            $link_button_1_plan_b7 = get_field('link_button_1_plan_b7');
                            if( $text_button_1_plan_b7 && $link_button_1_plan_b7 ) { ?>
                                <a href="<?php echo $link_button_1_plan_b7; ?>" class="button_0 button_2 align-items-center justify-content-center"><?php echo $text_button_1_plan_b7; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="col price_plan price_plan_2">

                    <div class="head_price">MOST POPULAR</div>

                    <div class="card_price">
                        <?php if( $name_2_plan_b7 = get_field('name_2_plan_b7') ) { ?>
                        <p class="title"><?php echo $name_2_plan_b7; ?></p>
                    <?php } ?>

                    <?php if( $price_2_plan_b7 = get_field('price_2_plan_b7') ) { ?>
                        <?php if( $currency_2_plan_b7 = get_field('currency_2_plan_b7') ) { ?>
                            <p class="price">
                                <span><?php echo $currency_2_plan_b7; ?></span><?php echo $price_2_plan_b7; ?>
                            </p>
                        <?php } else { ?>
                            <p class="price no-price"><?php echo $price_2_plan_b7; ?></p>
                        <?php } ?>
                    <?php } ?>

                    <p class="bot_text">
                    <?php if( $text_bottom_price_2_plan_b7 = get_field('text_bottom_price_2_plan_b7') ) { ?>
                        <?php echo $text_bottom_price_2_plan_b7; ?>
                    <?php } ?>
                    </p>


                    <?php if( $footnote_2_plan_b7 = get_field('footnote_2_plan_b7') ) { ?>
                        <p class="com_text">
                            <?php echo $footnote_2_plan_b7; ?>
                        </p>
                    <?php } ?>

                        <div class="lable_div">
                            <?php if( $line_text_2_plan_b7 = get_field('line_text_2_plan_b7') ) { ?>
                                <?php echo $line_text_2_plan_b7; ?>
                            <?php } ?>
                        </div>

                        
                        <?php if( $details_2_plan_b7 = get_field('details_2_plan_b7') ) { ?>
                            <?php echo $details_2_plan_b7; ?>
                        <?php } ?>
                        
                        <div class="button_price">
                            <?php 
                            $text_button_2_plan_b7 = get_field('text_button_2_plan_b7');
                            $link_button_2_plan_b7 = get_field('link_button_2_plan_b7');
                            if( $text_button_2_plan_b7 && $link_button_2_plan_b7 ) { ?>
                                <a href="<?php echo $link_button_2_plan_b7; ?>" class="button_0 button_2 align-items-center justify-content-center"><?php echo $text_button_2_plan_b7; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="col price_plan price_plan_3">

                    <div class="head_price"></div>

                    <div class="card_price">
                        
                    <?php if( $name_3_plan_b7 = get_field('name_3_plan_b7') ) { ?>
                        <p class="title"><?php echo $name_3_plan_b7; ?></p>
                    <?php } ?>

                    <?php if( $price_3_plan_b7 = get_field('price_3_plan_b7') ) { ?>
                        <?php if( $currency_3_plan_b7 = get_field('currency_3_plan_b7') ) { ?>
                            <p class="price">
                                <span><?php echo $currency_3_plan_b7; ?></span><?php echo $price_3_plan_b7; ?>
                            </p>
                        <?php } else { ?>
                            <p class="price no-price"><?php echo $price_3_plan_b7; ?></p>
                        <?php } ?>
                    <?php } ?>

                    <p class="bot_text">
                    <?php if( $text_bottom_price_3_plan_b7 = get_field('text_bottom_price_3_plan_b7') ) { ?>
                        <?php echo $text_bottom_price_3_plan_b7; ?>
                    <?php } ?>
                    </p>


                    <?php if( $footnote_3_plan_b7 = get_field('footnote_3_plan_b7') ) { ?>
                        <p class="com_text">
                            <?php echo $footnote_3_plan_b7; ?>
                        </p>
                    <?php } ?>

                        <div class="lable_div">
                            <?php if( $line_text_3_plan_b7 = get_field('line_text_3_plan_b7') ) { ?>
                                <?php echo $line_text_3_plan_b7; ?>
                            <?php } ?>
                        </div>

                        
                        <?php if( $details_3_plan_b7 = get_field('details_3_plan_b7') ) { ?>
                            <?php echo $details_3_plan_b7; ?>
                        <?php } ?>
                        
                        <div class="button_price">
                            <?php 
                            $text_button_3_plan_b7 = get_field('text_button_3_plan_b7');
                            $link_button_3_plan_b7 = get_field('link_button_3_plan_b7');
                            if( $text_button_3_plan_b7 && $link_button_3_plan_b7 ) { ?>
                                <a href="<?php echo $link_button_3_plan_b7; ?>" class="button_0 button_2 align-items-center justify-content-center"><?php echo $text_button_3_plan_b7; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Block 8 -->
    <section id="m6" class="block_8">
        <div class="container">
            
            <div class="title_block_div">
                <p class="title_top">BLOG</p>
                <p class="title"><span>OUR LATEST NEWS</span></p>
            </div>

            <div class="row no-gutters blog_row justify-content-between">

                <?php 
                $count_while = 0;
                $the_query = new WP_Query( 'showposts=3' );
                while ($the_query -> have_posts()) : $the_query -> the_post();
                $count_while++; 
                ?>
                    
                <a href="<?php echo the_permalink(); ?>" class="col card_blog card_blog_<?php echo $count_while; ?>">
                    <div class="head_card_blog">
                        <?php the_title(); ?>
                        <span class="go_iner_blog">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </div>
                    <div class="mid_card_blog">
                        <!-- <div class="title">
                            
                        </div> -->
                        <div class="date">
                            <?php echo get_the_date('m.d.Y'); ?>
                        </div>
                        <div class="text">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                </a>   

                <?php endwhile;?>
            
                <?php wp_reset_postdata(); // reset the query ?>

            </div>
            <div class="text-center">
                <a href="<?php echo home_url(); ?>/blog/" class="button_0 button_2 align-items-center justify-content-center">All news</a>
            </div>
        </div>
    </section>


    <!-- footer_div -->
    <section class="footer_div">
        <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col">
                <?php 
                $logo_color_header = get_field('logo_color_header', 'option');
                  if( $logo_color_header ) { ?>
                    <style>
                      .logo_color {
                          background: url('<?php echo $logo_color_header["url"] ?>') no-repeat;
                          background-position: center;
                          background-size: contain;
                        }
                    </style>
                    <a href="#top" class="Logo logo_color go_a"></a>
                  <?php } ?>
                </div>

                <div class="col social_bot">
                    <?php if( $facebook_a = get_field('facebook_a', 'option') ) { ?>
                    <a href="<?php echo $facebook_a; ?>">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                    <?php } ?>

                    <?php if( $twitter_a = get_field('twitter_a', 'option') ) { ?>
                    <a href="<?php echo $twitter_a; ?>">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <?php } ?>

                    <?php if( $linkedin_a = get_field('linkedin_a', 'option') ) { ?>
                    <a href="<?php echo $linkedin_a; ?>">
                        <i class="fa fa-linkedin-square"></i>
                    </a>
                    <?php } ?>
                </div>

                <div class="col store_bot">
                    <?php if( $img_apple_store_footer = get_field('img_apple_store_footer', 'option') ) { ?>
                    <a href="<?php if($link_apple_store_footer = get_field('link_apple_store_footer', 'option') ){ echo $link_apple_store_footer; } ?>" class="apple_store" style="background: url('<?php echo $img_apple_store_footer["url"]; ?>') no-repeat;background-position: left center;" target="_blank"></a>
                    <?php } ?>
                    <?php if( $img_google_play_footer = get_field('img_google_play_footer', 'option') ) { ?>
                    <a href="<?php if($link_google_play_footer = get_field('link_google_play_footer', 'option') ){ echo $link_google_play_footer; } ?>" class="google_store" style="background: url('<?php echo $img_google_play_footer["url"]; ?>') no-repeat;background-position: left center;" target="_blank"></a>
                    <?php } ?>
                </div>

            </div>
        </div>
    </section>

<?php get_footer(); ?>