<?php

    $loop = new WP_Query( array(
        // hier controleer je heb ik een argument type dan gebruik type anders is het null
        'post_type' => $args['type'] ? $args['type'] : null,
    ));

    while($loop->have_posts()) { $loop->the_post() ?>

        <div class="blog">
            <h2>
                <a href="<?php the_permalink() ?>">
                    <?= the_title() ?>
                </a>
            </h2>
            <div class=""
        </div>


    <?php } wp_reset_postdata(); ?> 