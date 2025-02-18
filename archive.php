<!-- This  is the template file used to display a list of posts from a specific category, tag, date, or custom taxonomy, or for other types of archives like author archives or search results-->

<?php get_header(); ?>
<section class="page-wrap">
    <div class="container">
        <h3>
            <?php the_title();?>
        </h3>
        <?php get_template_part('includes/section', 'content'); ?>

    </div>
</section>
<?php get_footer(); ?>
