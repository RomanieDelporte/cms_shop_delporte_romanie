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
                        <!-- <h3>test</h3> -->
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row posts">
    
        <?php get_template_part('components/card', null, array(
            'type' => 'event'
        ))?>

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
                <h3><?php the_field('textfield'); ?></h3>
                <input type="search" id="js-search" placeholder="Zoek een filiaal">
                <div class="banner_field"></div>
                <div id="results" class="results hidden"></div>
            </div>
        </div>
    </div>
</div> 
<?php get_footer(); ?>