<?php /* Template Name: Menu page template */ ?>
<?php get_header(); ?>
  <div class="menu-page">
    <div class="grid-container text-center">
        <h1><?php the_title(); ?></h1>
        <div id="flipbook">
        <?php while ( have_posts() ) : the_post();
            the_content();
         endwhile; // end of the loop. ?>
        </div>
    </div>
  </div>
<?php get_footer(); ?>
