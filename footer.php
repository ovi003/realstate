	<div class="container-fluid">
		<div class="row" id="myfooterbox">
			<div class="container">
				<p class="copyright">

					<?php 
						echo get_theme_mod('copyright_text');
					 ?>

				</p>

				<nav class="footer_nav pull-right">
					<?php 
						wp_nav_menu(array(
							'theme_location'=>'footer_menu',
							'menu_class'=>'site_nav',
							'fallback_cb'=>'wp_bootstrap_navwalker::fallback',
							'walker'=> new wp_bootstrap_navwalker()
						));
					 ?>
				</nav>
			</div>
		</div>
	</div><!-- end of footer -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<?php wp_footer(); ?>
  </body>
</html>