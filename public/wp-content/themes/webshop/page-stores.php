<?php get_header() ?>

<?php get_template_part('components/featured/large') ?>

    <div class="container">
        <div class="row posts">
                <?php
                    $loop = new WP_Query( array(
                        // hier controleer je heb ik een argument type dan gebruik type anders is het null
                        'post_type' => 'store'
                    ));

                    while($loop->have_posts()) { $loop->the_post() ?>
                        <div class="col-6 posts__stores">
                            <h2>
                                <a href="<?php the_permalink() ?>">
                                    <?= the_title() ?>
                                </a>
                            </h2>
                                <p><?php the_field('adress'); ?></p>
                                <p><?php the_field('email'); ?></p>
                                <p><?php the_field('phonenumber'); ?></p>
                        </div>

                    <?php } wp_reset_postdata(); ?> 
             </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>