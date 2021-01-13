<?php get_header(); ?>

<!-- in this page we render the events, the events are a custom post type -->
<div class="events">
<div class="container">
        <div class="row event">
            <?php
                $loop = new WP_Query( array(
                    // hier controleer je heb ik een argument type dan gebruik type anders is het null
                    'post_type' => 'event'
                ));

                while($loop->have_posts()) { $loop->the_post() ?>
                    <div class="col-6 event__card">
                        <?php get_template_part('components/featured/medium'); ?>
                            <a href="<?php the_permalink(); ?>">
                                <h2><?php the_title() ?></h2>
                            </a>
                            <p><?php the_field('date') ?></p>
                            <p><?php the_field('eventscontent'); ?></p>

                    </div>


            <?php } wp_reset_postdata(); ?> 
        </div>
    </div>
</div>
<?php get_footer(); ?>