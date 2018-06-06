<?php 
/*
 * Template name: Contacts page
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

                    <h1><?php  the_title();  ?></h1>

                    <?php if( $title_header_block = get_field('title_header_block') ) { ?>
                        <p class="title_bot"><?php echo $title_header_block; ?></p>
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


<!-- Block 9 -->
    <section class="block_9">
        <div class="container">
            <div class="row">

                <div class="col-12 col-lg-6">
                    <div class="contacts_form">
                    <?php if( $contact_form_7_code = get_field('contact_form_7_code') ) { ?>
                        <?php echo (do_shortcode($contact_form_7_code)); ?>
                    <?php } ?>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="contacts_right_div">
                        <div class="title">Our AdDress</div>

                        <?php
                        $address_footer = get_field('address_footer', 'option');
                        $link_address_footer = get_field('link_address_footer', 'option');
                        if( $address_footer && $link_address_footer ) { ?>
                        <address>
                            <a href="<?php echo $link_address_footer; ?>" class="address" target="_blank"><?php echo $address_footer; ?></a>
                        </address>
                        <?php } ?>
                        
                        <?php if( $phone_footer = get_field('phone_footer', 'option') ) { ?>
                        <a href="tel:<?php echo(str_replace(" ","",$phone_footer)); ?>" class="phone_adress">Tel: <?php echo $phone_footer; ?></a>
                        <?php } ?>
                        
                        <div class="title">Follow us</div>
                        <div class="social">
                            <?php if( $twitter_a = get_field('twitter_a', 'option') ) { ?>
                            <a href="<?php echo $twitter_a; ?>">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <?php } ?>

                            <?php if( $facebook_a = get_field('facebook_a', 'option') ) { ?>
                            <a href="<?php echo $facebook_a; ?>">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <?php } ?>

                            <?php if( $linkedin_a = get_field('linkedin_a', 'option') ) { ?>
                            <a href="<?php echo $linkedin_a; ?>">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Block 10 -->
    <section class="block_10">
        <div class="container">
            <p class="title">Looking for general information about <span>CAREHOME SCHEDULE?</span></p>
            <p class="title_bot">
            <?php if( $phone_footer = get_field('phone_footer', 'option') ) { ?>
                Call us: <a href="tel:<?php echo(str_replace(" ","",$phone_footer)); ?>"><?php echo $phone_footer; ?></a>
            <?php } ?>
            </p>
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