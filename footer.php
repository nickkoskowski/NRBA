<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="col-md-4">
					<h6>Member Benefits</h6>
					<?php wp_nav_menu(array('theme_location' => 'Member_Nav')); ?>
				</div>
				<div class="col-md-4">
					<h6>Company</h6>
					<?php wp_nav_menu(array('theme_location' => 'Company_Nav')); ?>
				</div>
				<div class="col-md-4">
					<h6>Support</h6>
					<?php wp_nav_menu(array('theme_location' => 'Support_Nav')); ?>
				</div>
			</div>
			<div class="col-md-4 text-right">
				<div class="social-media">
					<i class="fa fa-facebook"></i>
					<i class="fa fa-twitter"></i>
					<i class="fa fa-envelope-o"></i>
					<i class="fa fa-pinterest-p"></i>
					<i class="fa fa-google-plus"></i>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
				<p class="copyright">&copy; Copyright NRBA 2016 All Rights Reserved </p>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>