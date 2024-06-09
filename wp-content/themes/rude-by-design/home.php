<?php

/**
 * Template Name: Home
 */

get_header();

defined('ABSPATH') || exit;
get_header('shop');
?>

<main>

  <section class="home-section hero-section">
    <div class="inner-wrapper">
      <?php the_title('<h1 class="hero">', '</h1>'); ?>
      <img class="hero-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/hero.jpg" alt="" />
    </div>
  </section>

  <?php
  $collections = get_field_object('collections');
  if ($collections) {
  ?>
    <section class="home-section personalisation-section">
      <div class="inner-wrapper">
        <h2 class="underline">Featured Collections</h2>
        <div class="col-2">
          <?php
          get_template_part('components/collection-card', null, $collections);
          ?>
        </div>
      </div>
      </div>
    </section>
  <?php
  }
  ?>

  <?php
  get_template_part('components/personalised-callout');
  ?>


  <section class="home-section products-section">
    <div class="inner-wrapper">
      <h2 class="underline">Featured Gifts</h2>
      <?php
      echo do_shortcode('[products limit="8" columns="4" orderby="id" order="DESC" visibility="featured"]');
      ?>
    </div>
  </section>

  <section class="home-section products-section">
    <div class="inner-wrapper">
      <h2 class="underline">Best Sellers</h2>
      <?php
      echo do_shortcode('[products limit="8" columns="4" orderby="popularity" best_selling="true"]');
      ?>
    </div>
  </section>
</main>

<?php
get_footer();
