<?php get_header() ?>

<?php get_template_part('components/featured/medium') ?>

<div class="member">
    <div class="container">
            <div class="member__stores">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_field('teaminfo'); ?></p>
                       <?php
                    $locations= get_field('locations');
                    ?>
                    <?php foreach($locations as $location): ?>
                            <h3>
                                <?php echo $location->post_title; ?>
                            </h3>
                    
                    <?php endforeach; ?> 
            </div>
    </div>
</div>

<?php get_footer(); ?>