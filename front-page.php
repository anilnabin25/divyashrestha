<!--This is the template file used to display the site's homepage, and it is used when a static page is set as the front page or when the site's settings define a custom layout for the homepage-->
<!DOCTYPE html>
<html lang="en">
<head>
    <?php get_header();?>
    <title>Divya - Developer</title>
</head>
<body data-spy="scroll" data-target=".navbar">

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W9R8RKH"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="preloader" class="preloader">
    <div class="spinner-grow text-dark" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<div class="page-wrapper">
    <?php get_template_part('includes/section', 'nav'); ?>
    <?php get_template_part('includes/section', 'home'); ?>
    <?php get_template_part('includes/section', 'about'); ?>
    <?php get_template_part('includes/section', 'service'); ?>
    <?php get_template_part('includes/section', 'skill'); ?>
    <?php get_template_part('includes/section', 'contact'); ?>
    <?php get_footer();?>
</div>
</body>
</html>
