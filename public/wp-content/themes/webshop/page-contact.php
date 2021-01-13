<?php get_header(); ?>

<div class="contact">
    <div class="container">
        <div class="contact__info">
                <h2><?php the_field('contact'); ?></h2>
                <p><?php the_field('bericht'); ?></p>
        </div>
            <div class="row">
                <div class="col-6  contact__form">
                    <?php if (is_active_sidebar( 'contact-form' )) { ?>
                        <aside class="widget-area" role="complementary">
                            <?php dynamic_sidebar( 'contact-form' ); ?>
                        </aside>
                    <?php } ?>
                </div>
                    <div class="col-md-6 mx-auto contact__data">
                        <h1><?php the_field('title'); ?></h1>
                        <p><?php the_field('infodata'); ?></p>
                     </div>
            </div>
            <div class="stores">
                <div class="container">
                 <div class="row store">
                    <?php
                        $loop = new WP_Query( array(
                            // hier controleer je heb ik een argument type dan gebruik type anders is het null
                            'post_type' => 'store',
                            'posts_per_page' => 2,
                        ));

                        while($loop->have_posts()) { $loop->the_post() ?>
                            <div class="col-6 store__info">
                                    <h2><?php the_title() ?></h2>
                                    <p><?php the_field('adress'); ?></p>
                                    <p><?php the_field('email'); ?></p>
                                    <p><?php the_field('phonenumber'); ?></p>
                            </div>

                        <?php } wp_reset_postdata(); ?> 
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>