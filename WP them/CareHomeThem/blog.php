<?php 
get_header();
     
    $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // определяем текущую страницу блога
    $args = array(
        'posts_per_page' => get_option('posts_per_page'), // значение по умолчанию берётся из настроек, но вы можете использовать и собственное
        'paged'          => $current_page // текущая страница
    );
    query_posts( $args );
     
    $wp_query->is_archive = true;
    $wp_query->is_home = false;
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
            
            <div class="row no-gutters blog_row justify-content-between">

                <?php 
                $count_while = 0;
                if (have_posts()): while (have_posts()) : the_post();
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
                        <div class="date">
                            <?php echo get_the_date('m.d.Y'); ?>
                        </div>
                        <div class="text">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                </a>   

                <?php endwhile;?>
                <?php if( function_exists('wp_pagenavi') ) wp_pagenavi(); // функция постраничной навигации ?>
                <?php endif; ?>

            </div>
        </div>
    </section>
    
<?php get_footer(); ?>