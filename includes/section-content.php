<?php //if (have_posts()) ?>
<?php //while (have_posts()) : the_post() ?>
<!---->
<!--    --><?php //the_content(); ?>
<?php //endwhile; ?>
<?php //else ?>
<!--    there is no content in the post-->
<?php //endif; ?>



<?php if (have_posts()): while (have_posts()): the_post() ?>
    <?php //the_content() ?>
    <?php the_excerpt(); ?>
    <a href="<?php the_permalink() ?>"> Read more</a>
<?php endwhile; else: endif; ?>

