<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/style.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/960.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/1440.css">
        <?php wp_head();?>
    </head>
    <body>
        <header>
            <div class="container">
                <?php
                wp_nav_menu(
                        array(
                            'theme_location' => 'top-menu',
                            'menu_class' => 'top-bar',
                        )
                );
                ?>
            </div>
        </header>