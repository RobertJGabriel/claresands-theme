<?php
/*
The Page Loop
=============
*/
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    
	<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail(); } ?>
    <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
        
        <?php the_content()?>
        <?php wp_link_pages(); ?>
    </article>
<?php endwhile; ?>
<?php else: get_template_part('includes/loops/content', 'none'); ?>
<?php endif; ?>
