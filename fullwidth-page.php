<?php 
	/* Template Name: Fullwidth Page */
	 get_template_part('includes/header'); ?>

<div class="container-fluid secondary-page-top">
<div class="container">
  <div class="row page-row">
    <div class="col-xs-12"><h1 class="page-section-title" style="color:#fff;margin-bottom:10px;"><?php the_title()?></h1></div>
    <div class="col-xs-12">
      <div id="content" role="main">
        <?php get_template_part('includes/loops/content', 'page'); ?>
      </div><!-- /#content -->
    </div>
    

    
  </div><!-- /.row -->
</div><!-- /.container -->
</div>
<?php get_template_part('includes/footer'); ?>
