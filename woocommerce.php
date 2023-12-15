<?php get_header(); ?>
    <div class="product-banner"
        style="background-image:url('<?php the_field('product_banner'); ?>')"
    >
    </div>
<div class="grid-container">   
    <div class="main" id="main" class="">
        <div id="content" class="">
            <div class="woocommerce"> <?php woocommerce_content(); ?></div>
        </div>
    </div>
</div>
<?php get_footer(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php endwhile; // end of the loop. ?>
