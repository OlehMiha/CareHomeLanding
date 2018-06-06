<?php 
/*
 * Template name: Request page
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

                <div class="col-12 col-lg-7 header_block_iner mov mov_zoomIn_start">

                <?php if( $title_top_request = get_field('title_top_request') ) { ?>
                    <p class="title_top">
                        <?php echo $title_top_request; ?>
                    </p>
                <?php } ?>
                
                <?php if( $title_mid_request = get_field('title_mid_request') ) { ?>
                    <p class="title_mid">
                        <?php echo $title_mid_request; ?>
                    </p>
                <?php } ?>

                <?php if( $title_bot_request = get_field('title_bot_request') ) { ?>
                    <p class="title_bot">
                        <?php echo $title_bot_request; ?>
                    </p>
                <?php } ?>

                </div>

                <div class="col-12 col-lg-5">
                    <div class="form_request_page">
                        <?php if( $title_header_block = get_field('title_header_block') ) { ?>
                            <h1><?php echo $title_header_block; ?></h1>
                        <?php } ?>
                        <div class="contacts_form">

                        <?php if( $contact_form_7_code = get_field('contact_form_7_code') ) { ?>
                            <?php echo (do_shortcode($contact_form_7_code)); ?>
                        <?php } ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php else: ?>
    <section class="header_none_bac_menu">
    </section>
<?php endif; ?>


    <!-- Block 11 -->
    <section class="block_11">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-lg-5 iphone_div">
                    <?php if( $img_block_6 = get_field('img_block_6') ) { ?>
                        <img src="<?php echo $img_block_6["url"]; ?>" alt="<?php echo $img_block_6["alt"]; ?>" class="iphone_app_img mov mov_next_fadeInUp">
                    <?php } ?>
                </div>

                <div class="col-12 col-lg-7">
                    <div class="title_block_div">
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

            </div>
        </div>
    </section>

<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
    <?php $content = strip_tags(get_the_content()); ?>
    <?php if (!empty($content)): ?>
        
    <section class="block_content_page">
        <div class="container">
            <div class="row">

                <div class="col-12">
                     
                    <article>
                        <?php  the_content();  ?>
                    </article>
                </div>

            </div>
        </div>
    </section>
    
    <?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>