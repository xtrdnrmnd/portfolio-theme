<?php 
/*
    Template Name: Dark page layout
    Template Post Type: projects
*/
?>


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
            <style>
                body {
                    background-color: black;
                }
                body .page-title {
                    -webkit-text-stroke-color: white;
                }
                h3, header .top-bar a , header .top-bar li:first-child a,
                .project-topbar-description {
                    color: white;
                }
                header .top-bar li a:hover {
                    color: var(--accentb);
                }
            </style>
        </header>

<div class="page-title"><?php wp_title('', true,''); ?></div>
<div class="projects">
    <?php the_content();?>
</div>
        <div class="project-topbar-description"><?php echo get_post_meta($post->ID, 'Description-top', true);?></div>
<?php get_footer();?>