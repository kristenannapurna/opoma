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
              <h4>Harry Potter</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad voluptatum consectetur quos. Quasi, in!</p>
            </div>
            <div class="testimonial-single">
              <img src=" <?php bloginfo('template_directory') ?>/images/testimonial-quote.png" alt="quote">
              <h4>Hermione Granger</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, possimus, accusantium. Quasi officia, non totam quos?</p>
            </div>
            <div class="testimonial-single">
              <img src=" <?php bloginfo('template_directory') ?>/images/testimonial-quote.png" alt="quote">
              <h4>Ron Weasley</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed error expedita facere at exercitationem eveniet perferendis itaque aut?</p>
            </div>
          </div>
        </div>
      </section>
        <!-- <section class="meet">
          <div class="container">
            <h2>Meet The Family</h2>
            <div class="flex">
              <img src="https://placehold.it/500x400" alt="The Gibsons">
              <div class="family">
                <h4>The Gibsons</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur excepturi, ea voluptate doloribus cupiditate maxime repellat, eius nisi temporibus cumque reprehenderit quas fugiat. Architecto, voluptatum!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci tempora sed nesciunt, inventore magni, aspernatur saepe ad praesentium eaque fugit est perferendis? Sapiente, esse, accusamus.</p>
              </div>
            </div>
          </div>
        </section> -->
   <!--    <section class="banner">
        <div class="container">
          <div>
            <h3>Here's a <span class="green">slogan</span> about why we're awesome.</h3>
            <p>Less important text goes here</p>
          </div>
        </div>
      </section> -->
      <!-- <section class="blog">
        <div class="container">
          <h2>On The Farm</h2>
          <div class="blog-content flex">
            <img src="https://placehold.it/500x400" alt="featured image">
            <div class="blog-exerpt">
              <h3>Blog Post Title</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias neque, corrupti sit deserunt autem iste molestiae, aut repellendus. Cumque voluptatum laborum quisquam, magnam incidunt ab molestiae aliquid sapiente corporis natus obcaecati alias esse vero labore, expedita temporibus eveniet, laboriosam accusantium!</p>
              <a href="#">Read more...</a>
            </div>
          </div>
        </div>
      </section> -->
    <?php endwhile; // end the loop?>
  </div> <!-- /,content -->
</div> <!-- /.main -->

<?php get_footer(); ?>