<?php

/*
	Template Name: Contact Page
*/

	get_header();  ?>

	<div class="main">
		<div class="container">
			<?php // Start the loop ?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div class="contact-boxes">
					<div class="contact-box">
						<p><i class="fa fa-map-marker"></i></p>
						<h3>In Person</h3>
						<p>Nestled just north of the Hamlet Wooler</p>
						<p>Opoma Farms</p>
						<p>450 County Road 5</p>
						<p>Wooler, ON</p>
						<p>K0K 3M0</p>
					</div>
					<div class="contact-box">
						<p><i class="fa fa-phone"></i></p>
						<h3>On The Phone</h3>
						<p><strong>John Moelker</strong> <a href="tel:6138273050">(613) 827-3050</a></p>
						<p><strong>Connie Moelker</strong> <a href="tel:6138272530">(613) 827-2530</a></p>
						<p><strong>Brad Gibson</strong> <a href="tel:6138274602">(613) 827-4602</a></p>
					</div>
					<div class="contact-box">
						<p><i class="fa fa-envelope"></i></p>
						<h3>By Email</h3>
						<a href="mailto:opomafarms@gmail.com">opomafarms@gmail.com</a>
					</div>
				</div>
				<?php the_content(); ?>

			<?php endwhile; // end the loop?>
		</div> <!-- /.container -->
		<div id="map" style="width:100%;height:500px"></div>
	</div> <!-- /.main -->
	<?php get_footer(); ?>

<!-- AIzaSyDQ7_nnz5nrPNr8Ay5tntTaBFOXgiUCEEI -->