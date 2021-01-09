<?php get_header(); ?>

<div class="news">
    <div class="container">
        <div class="row posts">
        <p>Tag: <?php single_tag_title(); ?></p>                
            <?php while (have_posts()) { the_post() ?>
                <div class="col-6 posts__info">
                    <?php get_template_part('components/featured/medium'); ?>
                        <a href="<?php the_permalink() ?>">
                            <h2>
                                <?= the_title() ?>
                            </h2>
                        </a>
                        <?php
                
                            if(has_excerpt()) {
                                the_excerpt();
                            } else {
                                echo wp_trim_words(get_the_content(),15);
                            } ?>
                    </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>