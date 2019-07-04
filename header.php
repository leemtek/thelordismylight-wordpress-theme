<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Lord_is_My_Light_Photography
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class("clearfix"); ?>>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'the-lord-is-my-light-photography' ); ?></a>
  <header id="masthead" class="site-header">
    <div id="title-holder" class="site-branding">
      <div class="main-title">The Lord<br/>Is My Light</div>
      <div class="clearfix"><div class="sub-title">Photography by Edgar Tumbaga</div></div>
    </div>
    <nav id="site-navigation" class="navbar navbar-expand-md">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
          <svg aria-hidden="true" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class=""><path fill="#fff" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" class=""></path></svg>
        </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <?php $menuItems = wp_get_nav_menu_items(2); ?>

        <ul class="navbar-nav mr-auto">
          <?php foreach ($menuItems as $menuK => $menuV ): ?>
            <?php
              $current = ( $menuV->object_id == get_queried_object_id() ) ? 'active' : '';
            ?>
              <li class="nav-item <?php echo $current; ?>">
              <a class="nav-link" href="<?php echo $menuV->url; ?>"><?php echo $menuV->title; ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </nav><!-- #site-navigation -->
  </header><!-- #masthead -->

    <main id="content" role="main" class="site-content container">
      
