<?php get_header(); ?>

<?php get_template_part('components/featured/large') ?>


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
                                    echo wp_get_attachment_image( $image, 'large');
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
                    'category_name' => 'Brillen',
                    'posts_per_page' => 2
                ));

                while($posts->have_posts()) {
                    $posts->the_post() ?>
                    <div class=" col-6 card">
                        <img
                        <h4>
                                <a href="<?php the_permalink() ?>">
                                    <?= the_title() ?>
                                    <p><?= the_content() ?></p>
                                </a>
                        </h4>
                        

                    </div>
                    
                <?php } wp_reset_postdata(); ?>
    </div>
</div>
<div class="banner">
    <div class="container">
        <div class="row">
            <div class=" col-6 banner_picture">
                <?php 
                    $image = get_field('image');
                    $size = 'large';
                    if( $image ) {
                        echo wp_get_attachment_image( $image, $size );
                    }
                ?>
            </div>
        <div class=" col-6 banner_widget">
                <h2><?php the_field('textfield'); ?></h2>
                <?php if (is_active_sidebar( 'search-form' )) { ?>
                <aside class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'search-form' ); ?>
                </aside>
                <?php } ?>
                <div class="banner_field">
        </div>
            </div>
        </div>
    </div>
</div> 
<?php get_footer(); ?>