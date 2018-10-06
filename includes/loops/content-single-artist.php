<?php
/*
The Single Posts Loop
=====================
*/
?> 

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php echo(types_render_field("image", array("show_name"=>"false","output"=>"html"))); ?>
    <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
        <header>
            <h2 class="artist-title"><?php the_title()?></h2><?php echo(types_render_field("artist-country", array("show_name"=>"false","output"=>"html"))); ?>
            
        </header>
        <section>
            <?php the_content()?>
        </section>
    </article>

<?php endwhile; ?>
<?php else: get_template_part('includes/loops/content', 'none'); ?>
<?php endif; ?>
