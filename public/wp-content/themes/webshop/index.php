<?php get_header(); ?>
    <div class="container">
        <h1>Blog</h1>
        <?php 
        
            while(have_posts()) { the_post() ?>
                <div class="blog">
                    <h2><?php the_title() ?></h2>                    
                    <div><?php the_content() ?></div>
                </div>

                <hr/>

            <?php }
        
        ?>
    </div>

    <?php get_footer(); ?>


<?php 