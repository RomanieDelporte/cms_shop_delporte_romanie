<?php get_header(); ?>

<div class="news">
    <div class="container">
        <div class="row posts">
            <?php
                while(have_posts()) { the_post() ?>
                    <div class="col-6 posts__info">
                    <?php get_template_part('components/featured/medium');?>
                        <h2>
                            <a href="<?php the_permalink() ?>">
                                 <?= the_title() ?>
                            </a>
                        </h2>
                        <?php
                
                            if(has_excerpt()) {
                                the_excerpt();
                            } else {
                                echo wp_trim_words(get_the_content(),15);
                            } ?>

                    <i>
                    <?php  _e('Written by ', 'webshop'); the_author_posts_link(); ?>
                    </i>
                    </div>

            <?php } ?>
        </div>
        <div class="nav-next alignright posts__buttons"><?php previous_posts_link( 'Newer posts' ); ?></div>
        <div class="nav-previous alignleft posts__buttons"><?php next_posts_link( 'Older posts' ); ?></div>
    </div>
</div>


<?php get_footer(); ?>