<?php

$loop = new WP_Query( array(
    'post_type' => $args['type'] ? $args['type'] : null,
));

while ($loop->have_posts()) { $loop->the_post() ?>
    <div class="col-6 card">
    <?php get_template_part('components/featured/medium'); ?>

        <h2>
            <a  href="<?php the_permalink() ?>">
                <?= the_title() ?>
            </a>
        </h2>
       
                
                <p><?php the_field('eventscontent'); ?></p>

    </div>
<?php } wp_reset_postdata(); ?>