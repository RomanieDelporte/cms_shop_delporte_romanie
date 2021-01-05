<?php get_header(); ?>
    <div class="container">
        <?php 
        
            while(have_posts()) { the_post() ?>
                <div class="col-6 card">
                    <h2><?php the_title() ?></h2>                    
                    <div><?php the_content() ?></div>
                </div>

                <hr/>

            <?php }
        
        ?>
    </div>

    <?php get_footer(); ?>


<?php 