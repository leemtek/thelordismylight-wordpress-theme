<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Lord_is_My_Light_Photography
 */

?>
<?php if (is_super_admin($user_id)): ?>
CONTENT
<?php endif; ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if(!is_singular()): ?>
    <div class="row">
      <div class="col-3">
        <?php //the_lord_is_my_light_photography_post_thumbnail('thumbnail', array('class' => 'img-thumbnail img-fluid')); ?>
        <a href="<?php the_permalink() ?>">
          <?php the_post_thumbnail('thumbnail', array('class' => 'img-thumbnail img-fluid')); ?>
        </a>
      </div>
      <div class="col-9">
        <header class="entry-header">
          <?php 
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
          ?>
        </header><!-- .entry-header -->
        <div class="entry-content">
          <?php the_excerpt(); ?>
        </div><!-- .entry-content -->
        <footer class="entry-footer">
          <?php //the_lord_is_my_light_photography_entry_footer(); ?>
          <a href="<?php the_permalink() ?>" class="">View This Photo Album &raquo;</a>
        </footer><!-- .entry-footer -->
        <hr />
      </div>
    </div>
  <?php else: ?>
    <header class="entry-header">
      <?php
        the_title( '<h1 class="entry-title">', '</h1>' );

      if ( 'post' === get_post_type() ) :
        ?>
        <div class="entry-meta">
          <?php
            //the_lord_is_my_light_photography_posted_on();
            //the_lord_is_my_light_photography_posted_by();
          ?>
        </div><!-- .entry-meta -->
      <?php endif; ?>
    </header><!-- .entry-header -->
    <div class="entry-content">
      <?php the_content(); ?>
    </div><!-- .entry-content -->
    <footer class="entry-footer">
      <?php //the_lord_is_my_light_photography_entry_footer(); ?>
    </footer><!-- .entry-footer -->
  <?php endif; ?>


</article><!-- #post-<?php the_ID(); ?> -->
<script>document.getElementById("menu-gallery").classList.add("active");</script>
