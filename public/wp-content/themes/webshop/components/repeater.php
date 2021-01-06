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