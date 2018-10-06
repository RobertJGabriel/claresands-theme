<?php get_template_part('includes/header'); ?>

<div class="container-fluid">
<div class="container">
  <div class="row page-row">
    <header class="col-xs-12"><h1 class="page-section-title" style="margin-bottom:20px;"><?php the_title()?></h1></header>
    <div class="col-xs-12">
      <div id="content" role="main">
        <?php get_template_part('includes/loops/content', 'page'); ?>
      </div><!-- /#content -->
    </div>
    
    
  </div><!-- /.row -->
</div><!-- /.container -->
</div>
<?php get_template_part('includes/footer'); ?>
