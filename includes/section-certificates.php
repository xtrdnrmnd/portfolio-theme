<?php 

    $args = [
        
        'post_type' => 'certificates',
        
    ];

    $query = new WP_Query($args);

?>

<?php 
    $index = 0;
    $number_of_cols = 3;
    // Start the loop
    if ($query->have_posts()): while ($query->have_posts()): $query->the_post();
        if ($index % 3 == 0 && $index!= 0) {
        ?>
        </div><?php
    }
    if ($index % 3 == 0) {
        ?>
        <div class="row"><?php
    }
            ?><div class="col-lg-4 col-md-4 col-sm-12 certificates">        
            
        <?php if(has_post_thumbnail()):?>
            
            <img src="<?php the_post_thumbnail_url()?>">
            
        <?php endif;?>
            <div class="certificates_text"><?php the_title();?></div>    
    <?php
    $index++;
        ?>
        </div><?php
endwhile; else: endif;
            if ($index%3!=0) {
                ?>
            </div>
            <?php
            }?>