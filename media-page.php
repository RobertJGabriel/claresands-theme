<?php 
	/* Template Name: Media Page */
	 get_template_part('includes/header'); ?>

<div class="container-fluid">
<div class="container">
  <div class="row page-row">
    <header class="col-xs-12"><h1 class="page-section-title" style="margin-bottom:20px;"><?php the_title()?></h1></header>
    
	
	<div class="col-md-7">
	<h3 class="page-section-title" style="margin-bottom:20px;">VIDEO</h3>
      <div id="content" role="main">
	    <article role="article">
        <?php while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; ?>
		</article>
      </div><!-- /#content -->
    </div>
	
	<div class="col-md-5">
	<h3 class="page-section-title" style="margin-bottom:20px;">AUDIO</h3>
      <div id="content" role="main">
	    <article role="article"  class="hentry">
        <?php the_field('audio'); ?>
		</article>
      </div><!-- /#content -->
    </div>
    
    
  </div><!-- /.row -->
</div><!-- /.container -->
</div>
<?php get_template_part('includes/footer'); ?>
