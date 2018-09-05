<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package The_Lord_is_my_Light
 */

get_header();
?>

  <main id="main" role="main" class="container">

    <div id="primary" class="content-area starter-template">
      <?php
      while ( have_posts() ) :
        the_post();

        get_template_part( 'template-parts/content', get_post_type() );

        the_post_navigation();

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;

      endwhile; // End of the loop.
      ?>
    </div>
  </main><!-- /.container -->

<?php
get_footer();
