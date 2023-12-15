<?php /* Template Name: About Us template */ ?>
<?php get_header(); ?>
<div class="product-banner"
        style="background-image:url('<?php the_field('about_us_banner'); ?>')"
    >
    </div>
<div class="page-about-us">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-6 medium-auto">
                <div class="about-us-image">
                    <div><img src="<?php echo the_field('about_us_image') ?>" alt=""></div>
                </div>
            </div>
            <div class="cell large-6 medium-auto">
                <div class="about-us-text">
                    <p>
                        <?php echo the_field('about_us_text');?>
                    </p>                    
                </div>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>
