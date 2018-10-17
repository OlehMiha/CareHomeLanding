<?php 
/*
 * Template name: Blog page
 */
get_header();

?>
    <section class="header_none_bac_menu">
    </section>
    <!-- Block 8 -->
    <section id="m6" class="block_8 block_content_page">
        <div class="container">
            
            <div class="title_block_div">
                <p class="title_top">BLOG</p>
                <p class="title"><span>ALL NEWS</span></p>
            </div>
            
            <div class="row no-gutters blog_row justify-content-between">

                <?php  

                $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // определяем текущую страницу блога
                $args = array(
                    'posts_per_page' => get_option('posts_per_page'), // значение по умолчанию берётся из настроек, но вы можете использовать и собственное
                    'paged'          => $current_page // текущая страница
                );
                query_posts( $args );
                 
                $wp_query->is_archive = true;
                $wp_query->is_home = false;


                $count_while = 0;
                if (have_posts()): while (have_posts()) : the_post();
                $count_while++; 
                if($count_while > 3) {
                    $count_while = 1;
                }
                ?>
                    
                <a href="<?php echo the_permalink(); ?>" class="col card_blog card_blog_<?php echo $count_while; ?>">
                    <div class="head_card_blog">
                        <?php the_title(); ?>
                        <span class="go_iner_blog">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </div>
                    <div class="mid_card_blog">
                        <div class="date">
                            <?php echo get_the_date('m.d.Y'); ?>
                        </div>
                        <div class="text">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                </a>   

                <?php endwhile;?>

                <div class="col-12 justify-content-center align-items-center">
                    <?php if( function_exists('wp_pagenavi') ) wp_pagenavi(); // функция постраничной навигации ?>
                </div>

                <?php endif; ?>

            </div>
        </div>
    </section>
    
    
<?php get_footer(); ?>