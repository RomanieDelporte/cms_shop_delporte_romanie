<?php get_header(); ?>

<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-6 about__us">
                <h2><?php the_field('title'); ?></h2>
                <p><?php the_field('wie_zijn_we'); ?></p>
            </div>
            <div class="col-6 about__glasses">
                <?php get_template_part('components/repeater'); ?>
            </div>
        </div>
        <div class="about__gallery">
            <?php the_content(); ?>
        </div>
    </div>
</div>
<?php get_footer() ?>