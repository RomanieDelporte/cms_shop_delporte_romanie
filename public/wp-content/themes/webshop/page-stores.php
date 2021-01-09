<?php get_header() ?>

<?php get_template_part('components/featured/large') ?>

<div class="stores">
        <div class="container">
            <div class="row store">
                    <?php
                        $loop = new WP_Query( array(
                            // hier controleer je heb ik een argument type dan gebruik type anders is het null
                            'post_type' => 'store'
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

<?php get_footer(); ?>