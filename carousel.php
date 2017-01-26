<div id="myCarousel" class="carousel slide" data-ride="carousel">

	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li class="" data-target="#myCarousel" data-slide-to="1"></li>
		<li class="" data-target="#myCarousel" data-slide-to="2"></li>
	</ol>

	<div class="carousel-inner">

		<?php
		$i=1;
		$the_query = new WP_Query(array(
			'post_type' => 'slide',
			'post_per_page' => 3
		));

		while ( $the_query->have_posts() ) :
		$the_query->the_post();
		if($i == 1){ 
			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		 ?>
		<div class="active item">
			<img src="<?php echo $url;?>" class="img-responsive">

			<div class="carousel-caption">
				<h4><?php the_title(); ?></h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
			</div>

		</div>
		
		<?php }

		else {
			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		 ?>
		<div class="item">


			<img src="<?php echo $url;?>" class="img-respnosive">


			<div class="carousel-caption">
				<h4><?php the_title(); ?></h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
			</div>

		</div>
		<?php }
		$i++; endwhile;
		wp_reset_postdata();
		?>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		    <span class="icon-prev">
		       
		    </span>                                                     
		</a>
		<a class="right carousel-control " href="#myCarousel" data-slide="next">
		    <span class="icon-next">
		        
		    </span>
		</a>
	</div>
</div>

