<?php get_header(); ?>

<div class="container">
    <div class="row posts">
    <?php
        while(have_posts()) { the_post() ?>
            <div class="col-6 card">

                <h2>
                        <a href="<?php the_permalink() ?>">
                            <?= the_title() ?>
                            <?= the_content() ?>
                        </a>
                </h2>
            </div>
            
        <?php } ?>
    
    </div>
</div>


<?php get_footer(); ?>