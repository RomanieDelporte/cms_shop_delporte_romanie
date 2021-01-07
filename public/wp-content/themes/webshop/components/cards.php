<?php

$stores = new WP_Query( array(
    // if we have a argument type show args 
    'post-type' => $args['type'] ? $args['type'] : null,
    'posts_per_page' => 1
));


    while($stores->have_posts()) { $stores->the_post() ?>
        <div class="types">
            <h2>
                <a href="<?php the_permalink() ?>">
                <?= the_title() ?>
                <?= the_content() ?>
            </h2>
        </div>
    <?php } wp_reset_postdata(); ?>