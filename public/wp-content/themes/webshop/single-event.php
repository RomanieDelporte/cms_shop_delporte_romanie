<?php get_header() ?>

<?php get_template_part('components/featured/large') ?>

<div class="post">
    <div class="container">
            <div class="post__info">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_field('date'); ?></p>
                    <p><?php the_field('eventscontent'); ?></p>
            </div>
    </div>
</div>

<?php get_footer(); ?>