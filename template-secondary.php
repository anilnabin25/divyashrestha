<?php
/*
  Template Name: Secondary
 */
?>

<?php get_header('secondary'); ?>
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
    <?php get_template_part('includes/section', 'content'); ?>

</div>
<?php get_footer('secondary');?>