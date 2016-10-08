<footer>
  <div class="container">
    <h2>Opoma Farms</h2>
    <div class="social-widgets flex">
    	<div class="contact">
    		<h3>Contact Us</h3>
         <p><i class="fa fa-map-marker" aria-hidden="true"></i>132 My Street Frankford, ON</p>
         <p><i class="fa fa-phone" aria-hidden="true"></i>293-525-6266</p>
         <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>hello@opomafarms.com</a>
     </div>
     <div class="menu">
        <h3>Site Menu</h3>
        <?php wp_nav_menu( array(
            'container' => false,
            'theme_location' => 'primary'
            )); ?>
        </div>
        <div class="instagram">
            <h3>Views From The Farm</h3>
          <!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/ed2fb6806b93590486d1ef180078dfbf.html" id="lightwidget_ed2fb6806b" name="lightwidget_ed2fb6806b"  scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>

      </div>
  </div>
</div>
<div class="social-nav">
    <div class="container flex">
        <p>&copy Opoma Farms</p>
        <div class="social-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
</div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
   g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
   s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>