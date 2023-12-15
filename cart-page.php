<?php /* Template Name: Cart page template */ ?>
<?php get_header(); ?>

<div class="cart-page">
    <div class="grid-container">
        <?php while ( have_posts() ) : the_post();
            the_content();
            endwhile ?>
    </div>
</div>
<?php get_footer() ?>