<?php get_header(); ?>

	<div class="container" id="maincontent">
		<div class="row blog_content">
			<div class="col-sm-9">
				<div class=" divcontent">
					
					<?php while(have_posts()):the_post() ?>

						<div class="media">
						  <div class="media-left">
						    <a href="#">
						      <?php the_post_thumbnail(); ?>
						    </a>
						  </div>
						  <div class="media-body">
							    <h4 class="media-heading">
							    	<a href="<?php the_permalink(); ?>">
							    		<?php the_title() ?>
							    	</a>
							    </h4>
						    	<p><?php details(30); ?></p> 
						    	<a href="#" class="btn btn-success botn">Details</a>
						  </div>
						</div>
					<?php endwhile; ?>
				</div>
				<div class="text-center">
					<?php 
						custom_pagination();
					 ?>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="right_sidebar">
						<?php dynamic_sidebar('left_sidebar'); ?>
				</div>
			</div>

		</div>



	</div>

<?php get_footer(); ?>