<?php /**
	Template Name: Home Page
	 */
	 get_template_part('includes/header-home'); ?>


<div class="container-fluid home-top">
<div class="container" >
<div class="row">
    <div class="col-md-4">
	    <div class="title-logo"><a title="Back to homepage" href="<?php echo get_option('home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/title-logo.png" style="display:inline-block"></a></div>
	</div>
</div><!-- /.row -->


</div><!-- /.container -->

</div><!-- /.container-fluid-home-top -->





<div class="container-fluid home-second">
<div class="container">
<div class="row">
    <div class="col-md-8 col-md-offset-2">
	    <h1 class="page-section-title" style="margin-bottom:20px;">Welcome</h1>

	    <div id="home-content" role="main">
        <?php get_template_part('includes/loops/content', 'home'); ?>
		
      </div><!-- /#content -->
	</div>
</div><!-- /.row -->


</div><!-- /.container -->
</div><!-- /.container-fluid -->	

<div class="container-fluid home-third">
<div class="container">
<div class="row">
    <div class="col-md-4 ">
	    <h1 class="widget-title">Instagram</h1>
       <p><!-- InstaWidget --><a id="link-ba15252061b2e41614b061d6246d83675a89a4f146e110539d7a4005632787ec" href="https://instawidget.net/v/user/claresandsmusic" style="display: none;">@claresandsmusic</a> <script src="https://instawidget.net/js/instawidget.js?u=ba15252061b2e41614b061d6246d83675a89a4f146e110539d7a4005632787ec&amp;width=300px"></script></p>
    </div>
	<div class="col-md-4">
	    <?php get_template_part('includes/sidebar-twitter'); ?>
    </div>
	<div class="col-md-4">
        <?php get_template_part('includes/sidebar-facebook'); ?>
    </div>
</div><!-- /.row -->
  
  
  <div class="row">
    	<div class="col-md-4 home-new-album-box">
	    <h1 class="widget-title">New Album</h1>
      
		<?php the_field('new_album'); ?>
      
    </div>
    	<div class="col-md-4">
        
    </div>
  	<div class="col-md-4">
 
  
</div>
  </div><!-- /.row -->
</div><!-- /.container -->
</div><!-- /.container-fluid -->	





<?php get_template_part('includes/footer'); ?>
