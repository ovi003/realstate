<?php get_header(); ?>

	<div class="container" id="maincontent">
		<div class="row blog_content">
			<div class="col-sm-12">
				<div class=" divcontent">
					
					<?php while(have_posts()):the_post() ?>

						<div class="media">
						  <div class="media-left">
						    <a href="#">
						      <?php the_post_thumbnail(); ?>
						    </a>
						  </div>
						  <div class="media-body">
							    <h3 class="media-heading">
							    		<?php the_title() ?>
							    </h3>
						    	<p><?php the_content(30); ?></p> 
						  </div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>

		</div>



	</div>

<?php get_footer(); ?>