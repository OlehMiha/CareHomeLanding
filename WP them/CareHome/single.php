<?php get_header();?>


        <!-- Block 1 (Content) -->
        <section>
            <div class="block1">
                <div class="container content_index_all">

                    <div class="content_index">
                        <div class="text_content">
                            <?php if (have_posts()) :  while (have_posts()) : the_post(); ?> 
                                <h2 class="title_page"><?php  the_title();  ?></h2>
                                <p class="data_single">Nieuwsbericht | <?php echo get_the_date('d-m-Y | h:i'); ?></p>
                                <?php  the_content();  ?>

                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="sitebar_index_left">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </section>

<?php get_footer(); ?>