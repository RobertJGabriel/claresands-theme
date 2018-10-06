<?php get_template_part('includes/header'); ?>


<div class="container-fluid secondary-page-top">
<div class="container">
  <div class="row page-row">
    <header class="col-xs-12"><h1 class="page-title"><?php the_title()?></h1></header>
    <div class="col-xs-12 col-sm-8">
      <div id="content" role="main">
        <div class="alert alert-warning">
          <h1><i class="glyphicon glyphicon-warning-sign"></i> <?php _e('Error', 'bst'); ?> 404</h1>
          <p><?php _e('Sorry, The page you were looking for does not exist.', 'bst'); ?></p>
        </div>
      </div><!-- /#content -->
    </div>
    
    <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
       <?php get_template_part('includes/sidebar'); ?>
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->
</div>
<?php get_template_part('includes/footer'); ?>
