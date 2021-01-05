<?php get_header(); ?>

<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-6 contact__image">
                <?php get_template_part('components/featured/medium') ?>
            </div>
            <div class="col-md-6 mx-auto contact__data">
            <h1><?php the_field('title'); ?></h1>
            <p><?php the_field('infodata'); ?></p>
            </div>
        </div>
        <div class="contact__info">
            <h2><?php the_field('contact'); ?></h2>
            <p><?php the_field('bericht'); ?></p>
    </div>
    <div class="contact__form">
    <?php if (is_active_sidebar( 'contact-form' )) { ?>
                <aside class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'contact-form' ); ?>
                </aside>
            <?php } ?>
    </div>
    </div>
</div>

<?php get_footer() ?>