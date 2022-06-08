
    <?php 
    $index = 0;
    $number_of_cols = 2;
    // Start the loop
    if (have_posts()): while (have_posts()): the_post();
if ($index % 2 == 0 && $index!= 0) {
        ?>
        </div><?php
    }
    if ($index % 2 == 0) {
        ?>
        <div class="row"><?php
    }
            ?><div class="col-lg-6 col-md-6 col-sm-12 single-project-icon">        
            <?php if(has_post_thumbnail()):?>
            
            <a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url()?>"></a>
            
            <?php endif;?>
    <div class="projects-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
            <div class="description-project"><a href="<?php the_permalink();?>"><?php echo get_post_meta($post->ID, 'Description', true);?></a></div>
    <?php
    $index++;
        ?>
        </div><?php
endwhile; else: endif;?>
