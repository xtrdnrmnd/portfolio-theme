<?php
/*
Template Name: Contacts
*/
?>

<?php get_header();?>
<div class="page-title"><?php wp_title('', true,''); ?></div>
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="contacts-main-text">
                <?php the_content();?>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>
