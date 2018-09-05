<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Lord_is_my_Light
 */

?>

  </div><!-- #content -->

  <footer id="colophon" class="site-footer">
  <div class="inner">
      <div class="site-info">
        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'the-lord-is-my-light' ) ); ?>">
          <?php
          /* translators: %s: CMS name, i.e. WordPress. */
          printf( esc_html__( 'Proudly powered by %s', 'the-lord-is-my-light' ), 'WordPress' );
          ?>
        </a>
        <span class="sep"> | </span>
          <?php
          /* translators: 1: Theme name, 2: Theme author. */
          printf( esc_html__( 'Theme: %1$s by %2$s.', 'the-lord-is-my-light' ), 'the-lord-is-my-light', '<a href="http://underscores.me/">Gabriel Tumbaga</a>' );
          ?>
      </div><!-- .site-info -->
  </footer><!-- #colophon -->
  </div><!-- .inner -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>

</body>
</html>
