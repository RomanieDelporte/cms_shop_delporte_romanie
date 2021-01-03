<?php get_header() ?>

<?php get_template_part('components/post') ?>

<div class="post">
    <div class="container">
    
        <div class="post__info">
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
        </div>
        <div class="post__category">
                <p>Category:</p>
                <?php the_category(); ?>
            </div>
             <div class="post__tags">
                 <p>Tags:</p>
                <?php
                    $before = '';
                    $seperator = ''; 
                    $after = '';
                    the_tags( $before, $seperator, $after );
                    ?>

             </div>
    </div>
</div>

<?php get_footer(); ?>