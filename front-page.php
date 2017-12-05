<?php get_header();  ?>

<div class="main">
  <div class="content-home">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <section class="welcome">
        <div class="container">
          <h2>Welcome To Opoma Farms</h2>
          <div class="welcome-features">
            <div class="features features1">
              <div>
                <img src=" <?php bloginfo('template_directory') ?>/images/opoma-icon04.png" alt="100% natural">
                <h3>100% Grass Fed Beef</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
              <div>
                <img src=" <?php bloginfo('template_directory') ?>/images/opoma-icon03.png" alt="100% natural">
                <h3>Always Fresh</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
            </div>
            <div class="welcome-photo">
              <img src="<?php bloginfo('template_directory') ?>/images/cow-face.jpg " alt="">
            </div>
            <div class="features features2">
              <div>
                <img src=" <?php bloginfo('template_directory') ?>/images/opoma-icon02.png" alt="100% natural">
                <h3>Organic Products</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
              <div>
                <img src=" <?php bloginfo('template_directory') ?>/images/opoma-icon01.png" alt="100% natural">
                <h3>Best Quality</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="testimonials">
        <div class="container">
          <h2>Happy Customers</h2>
          <div class="testimonials-group">
            <div class="testimonial-single">
              <img src=" <?php bloginfo('template_directory') ?>/images/testimonial-quote.png" alt="quote">
              <h4><?php the_field('testimonial_1') ?></h4>
              <p><?php the_field('testimonial_text_1') ?></p>
            </div>
            <div class="testimonial-single">
              <img src=" <?php bloginfo('template_directory') ?>/images/testimonial-quote.png" alt="quote">
              <h4><?php the_field('testimonial_2') ?></h4>
              <p><?php the_field('testimonial_text_2') ?></p>
            </div>
            <div class="testimonial-single">
              <img src=" <?php bloginfo('template_directory') ?>/images/testimonial-quote.png" alt="quote">
              <h4><?php the_field('testimonial_3') ?></h4>
              <p><?php the_field('testimonial_text_3') ?></p>
            </div>
          </div>
        </div>
      </section>
    <?php endwhile; // end the loop?>
  </div> <!-- /,content -->
</div> <!-- /.main -->

<?php get_footer(); ?>