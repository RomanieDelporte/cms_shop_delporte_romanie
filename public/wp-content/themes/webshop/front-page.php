<?php get_header(); ?>

<?php get_template_part('components/home') ?>

</div>


<div class="bg">
        <div class="container">
            <div class="row">
                <div class=" col-6 bg__info">
            <h2><?php the_field('text'); ?></h2>
            <p><?php the_field('textarea') ?></p>
            <a class="btn" href="<?php echo site_url('over-ons'); ?>">Lees meer</a>

        </div>
        <div class="col-6 bg__pictures">
            <?php if( have_rows('row') ) {
                while( have_rows('row') ) {
                    the_row();
                    $image = get_sub_field('image');
                    $align = get_sub_field('align'); ?>
                    <div class="row <?php echo $align ?>">
                        <?php if($image) {
                            echo wp_get_attachment_image( $image, 'thumbnail' );
                        } ?>
                    </div>

               <?php }
            } ?>
            </div>
            </div>
        </div>
    </div>
<div class="container">
    <div class="row posts">
        <?php
            $posts = new WP_Query( array(
                'category_name' => 'opticien',
                'posts_per_page' => 2
            ));

            while($posts->have_posts()) {
                $posts->the_post() ?>
                <div class=" col-6 card">
                    <h4>
                            <a href="<?php the_permalink() ?>">
                                <?= the_title() ?>
                            </a>
                    </h4>
                    <p><?= the_content() ?></p>
                </div>
                
            <?php } wp_reset_postdata(); ?>
        </div>
</div>


<?php get_footer(); ?>