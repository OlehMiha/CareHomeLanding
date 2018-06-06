<?php get_header();?>

<?php if (have_posts()) :  while (have_posts()) : the_post(); ?> 

        <!-- Header block -->
        <section class="header_block" style="background: url('<?php
            if ( has_post_thumbnail()) {
            $full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
            echo ''.$full_image_url[0] . '';
            }
        ?>') no-repeat; background-position: center; background-size: cover; ">
            <div class="container">

                <div class="row align-items-center">

                    <div class="col-12 header_block_iner mov mov_zoomIn_start">
                        <h1><?php  the_title();  ?></h1>
                        <p class="title_bot">
                            <?php the_author(); ?>
                        </p>
                    </div>

                </div>
            </div>
        </section>


        <!-- Block 12 -->
        <section class="block_12">
            <div class="container">
                <div class="row row_blog row_head-blog align-items-center">
                    <div class="col-6 date">
                        <?php echo get_the_date('F d, Y'); ?>
                    </div>
                    <div class="col-6 share">
                        Share: 
                        <div class="social">
                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin-square"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Block 13 -->
        <section class="block_13">
            <div class="container">
                <div class="row row_blog align-items-center">
                    <div class="col-12">
                        
                        <article>
                            <h2 class="text-center"><?php  the_title();  ?></h2>
                            <?php  the_content();  ?>
                        </article>

                    </div>
                </div>
            </div>
        </section>

<?php endwhile; ?>
<?php endif; ?>

        <!-- Block 8 -->
        <section id="m6" class="block_8">
            <div class="container">
                
                <div class="title_block_div">
                    <p class="title_top">BLOG</p>
                    <p class="title"><span>RECENT POSTS</span></p>
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
                            <?php echo the_field('short_description_of_the_article'); ?>
                            <span class="go_iner_blog">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </div>
                        <div class="mid_card_blog">
                            <div class="title">
                                <?php the_title(); ?>
                            </div>
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