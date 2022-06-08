<?php get_header();?>
<div class="page-title"><?php wp_title('', true,''); ?></div>

<?php if(have_posts()): while (have_posts()): the_post();?>

<div><?php the_title();?></div>

<?php endwhile; else: endif; ?>
<?php get_footer();?>