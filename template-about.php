<?php
/*
Template Name: About
*/

get_header();?>

<div class="page-title"><?php wp_title('', true,''); ?></div>
<div class="container-fluid">
    <div class="page-container">
        <div id="content-wrap">
            <div class="row justify-content-center">
                <div class="col-6 col-md-4">
                    <?php if(has_post_thumbnail()):?>

                        <img src="<?php the_post_thumbnail_url()?>" class="image-about">

                    <?php endif;?>
                </div>

                <div class="col-12 col-md-8">
                    <div class="about-main-text">
                        <?php the_content();?>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
<div class="widget-about"><?php if(is_active_sidebar('about')): ?>
            
                <?php dynamic_sidebar('about');?>
            
    <?php endif;?></div>
<div class="container-fluid certi-cont"><?php get_template_part('archive', 'certificates');?></div></div>
<?php get_footer();?>



