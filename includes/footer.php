</div>
<footer class="container-fluid site-footer">
<div class="container">

	<div class="row">
    <?php dynamic_sidebar('footer-widget-area'); ?>
  </div>

  <div class="row">
    <div class="col-md-6 site-sub-footer-left">
	  <p>
         <i class="fa fa-envelope-o footer-icon" aria-hidden="true"></i> <a href="mailto:&#105;&#110;&#102;&#111;&#64;&#99;&#108;&#97;&#114;&#101;&#115;&#97;&#110;&#100;&#115;&#46;&#99;&#111;&#109;">&#105;&#110;&#102;&#111;&#64;&#99;&#108;&#97;&#114;&#101;&#115;&#97;&#110;&#100;&#115;&#46;&#99;&#111;&#109;</a></p>
		 <p>&copy; <?php echo date('Y'); ?> Clare Sands.
	  All Rights Reserved.</p>
		 <p>Website by <a href="https://www.robertgabriel.ninja" target="_blank">Robert James Gabriel</a></p>
	</div>	 
	<div class="col-md-6 site-sub-footer-right">	
		<div class="col-md-6">
		   <img src="<?php echo get_template_directory_uri(); ?>/img/boss-roland.png" title="Boss-Roland Artist" class="img-responsive" width="278" height="47" >
		</div>
		<div class="col-md-6">
		   <img src="https://claresands.com/wp-content/uploads/2018/07/yamaha-2.png" title="yamaha sponsored artist"  width="278" height="47" class="img-responsive">
		</div>
    </div>
  </div>
  

</div>  
</footer>

<?php wp_footer(); ?>
</body>
</html>