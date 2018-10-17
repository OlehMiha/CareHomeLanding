<?php 
/*
 * Template name: Privacy Policy page
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

        
    <section class="block_content_page">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <article class="content_iner_page">
                        <h6 class="text-center"><?php  the_title();  ?></h6> 
                        <?php if( $privacy_policy = get_field('privacy_policy', 'option') ) { ?>
                            <?php echo $privacy_policy; ?>
                        <?php } ?>
                    </article>
                </div>

            </div>
        </div>
    </section>
    
<?php get_footer(); ?>