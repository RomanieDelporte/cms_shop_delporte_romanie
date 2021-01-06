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