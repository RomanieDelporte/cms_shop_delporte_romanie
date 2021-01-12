<?php get_header(); ?>


<div class="about">
    <div class="container">
        <div class="row about">
        <?php
            $member = new WP_Query( array(
                // hier controleer je heb ik een argument type dan gebruik type anders is het null
                'post_type' => 'member',
                'posts_per_page' => 8,
            ));
                while($member->have_posts()) { $member->the_post() ?>
                    <div class="col-4 about__info">
                        <?php 
                        $image = get_field('image');
                        $size = 'medium'; // (thumbnail, medium, large, full or custom size)
                        if( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                        } ?>
                        <div class="about__member">
                            <a href="<?php the_permalink(); ?>">
                            <h2><?php the_title() ?></h2>
                            </a>
                            <p><?php the_field('teampeople'); ?></p>
                        </div>
                    </div>

            <?php } wp_reset_postdata(); ?> 
    </div>
    
    </div>
</div>

    <?php get_footer(); ?>