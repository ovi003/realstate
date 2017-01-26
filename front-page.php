<?php get_header(); ?>
	<div class="container-fluid" id="slider-content">
		<div class="row">
			<div class="container" id="main_slider">
				
				<div class="col-xs-8">
					<div id="slbottom">
						<?php get_template_part('carousel'); ?>
					</div>
				</div>
				<div class="col-xs-4" id="searchbox">
					<div class="searchtitle">
						<h3>Search Properties</h3>
					</div>
					<form>

						<div class="form-group">
							<label for="district">District</label>
							<select class="form-control" id="district">

						        <option>Dhaka</option>
						        <option>Rajshahi</option>
						        <option>Chitagong</option>
						        <option>Barishal</option>
						        <option>Rongpur</option>
						        <option>Sylhet</option>

						     </select>
						</div>

						<div class="form-group">
							<label>Room</label><br>
							<label class="checkbox-inline">
								<input type="checkbox" value="">1
							</label>
							<label class="checkbox-inline">
								<input type="checkbox" value="">2
							</label>
							<label class="checkbox-inline">
								<input type="checkbox" value="">3
							</label>
							<label class="checkbox-inline">
								<input type="checkbox" value="">4
							</label>
							<label class="checkbox-inline">
								<input type="checkbox" value="">5+
							</label>

						</div>

						<div class="form-group">
							<label>Price</label>
							<div class="radio">
							  <label><input type="radio" name="optradio">&lt; 500000</label>
							</div>
							<div class="radio">
							  <label><input type="radio" name="optradio">&lt; 2000000</label>
							</div>
							<div class="radio">
							  <label><input type="radio" name="optradio" >&lt; 5000000</label>
							</div>

						</div>	
						<div class="form-group">
							<button type="submit" class="btn btn-success">
								Search
							</button>
						</div>
					</form>
				</div>
				
			</div>
		</div>
	</div><!-- end of slider-content -->
	<div class="container" id="maincontent">
		<div class="row content">
			<div class="well site-well">
				<h3 class="searchtitle">Recent Porperties</h3>
			</div>
			<?php 

				$content = new WP_Query(array(
					'post_type'=>'properties',
					'post_per_page'=>3
					));
			 ?>
			<?php while($content->have_posts()): $content->the_post() ?>
				<div class="col-xs-4" >
					<div class="box">
						<?php the_post_thumbnail();?>
						<h3><?php the_title(); ?></h3>
						<p><?php details(20); ?></p>
						<a href="<?php the_permalink(); ?>" class="btn btn-success">Read More</a>
					</div>
				</div>
			<?php endwhile; ?>
			<div class="col-md-12">
				<div class="row" id="secondcon">
					<div class="col-md-6">
						<div class="" id="sitetab">
							<div class="tabbable">
								<ul class="nav nav-tabs">
								  <li role="presentation" class="active"><a href="#one" data-toggle="tab">Our Location</a></li>
								  <li role="presentation"><a href="#two" data-toggle="tab">News</a></li>
								  <li role="presentation"><a href="#three" data-toggle="tab">Offers</a></li>
								</ul>
							</div>

							<div class="tab-content">
								<div class="tab-pane active" id="one">
									<h4><span class="glyphicon glyphicon-map-marker"></span>Our Location <small>More like our favourite surf spot</small></h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</p>
									<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7237.9942332521805!2d91.91185721013868!3d24.898079981170472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1ssylhet+google+map!5e0!3m2!1sen!2sbd!4v1435486507302" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
								<div class="tab-pane" id="two">
									<div class="media">
										<div class="media-left">
											<a href="#">
												<img class="media-object" height="100" width="100" src="img/pic1.jpg" alt="...">
											</a>
										</div>
										<div class="media-body">
											<h4 class="media-heading">Media heading</h4>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											</p> 
												<a href="#" class="btn btn-success">Details</a>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="three">
									name
								</div>

							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div id="sitetestimonial">
							<div class="testi_title"><h4 class="searchtitle">Testimonial</h4></div>
							<div class="row testi_box">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
								<h4 class="pull-right">Dr. Williamson</h4>
							</div>
							<div class="row testi_box">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
								<h4 class="pull-right">Dr. Williamson</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



	</div>
<?php get_footer(); ?>