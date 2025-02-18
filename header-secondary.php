<!DOCTYPE html>
<html lang="en">
<head>

    <?php wp_head(); ?>
    this is the secondary header
</head>
<header>
    <div class="container">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'top_menu',
                'menu_class' => 'top-menu',
            )
        );
        ?>
    </div>
</header>
