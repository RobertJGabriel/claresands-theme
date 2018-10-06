<?php get_template_part('includes/header'); ?>

<div class="container-fluid secondary-page-top">
<div class="container">
  <div class="row page-row">
    <header class="col-xs-12"><h1 class="page-title">LATEST NEWS</h1></header>
    <div class="col-xs-12 col-sm-8">
	
      <div id="content" role="main">
				<?php get_template_part('includes/loops/content', get_post_format()); ?>
      </div><!-- /#content -->
    </div>
    
    <div class="col-xs-12 col-sm-4" id="sidebar" role="navigation">
       <?php get_template_part('includes/sidebar-news'); ?>
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->
</div>
<?php get_template_part('includes/footer'); ?>
