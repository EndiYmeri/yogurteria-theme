<?php /* Template Name: Single Location page template */ ?>
<?php get_header(); ?>
<div class="product-banner"
        style="background-image:url('<?php the_field('product_banner'); ?>')"
    >
    </div>
<div class="page-single-location">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-6 medium-auto">
                <div class="single-location-slider">
                    <?php
                        // Check rows exists.
                        if( have_rows('single_location_slider') ):
                            // Loop through rows.
                            while( have_rows('single_location_slider') ) : the_row();
                                // Load sub field value.
                                $image_url = get_sub_field('slider_image');
                                // Do something...
                            ?>
                                <div><img src="<?php echo $image_url; ?>" alt=""></div>
                            <?php
                            // End loop.
                            endwhile;

                        // No value.
                        else :
                            // Do something...
                        endif;
                    ?>
                </div>
            </div>
            <div class="cell large-6 medium-auto">
                <div class="location-info">
                    <div class="time">
                        <img src="<?php bloginfo('template_url');?>/assets/images/clock.svg" alt="">
                        <div class="single-location-info-text">
                            <p class="highlighted-text">Orari</p>    
                            <?php while ( have_posts() ) : the_post(); ?>
                            <p>
                                <?php the_field('time'); ?>
                            </p>
                            <?php endwhile; // end of the loop. ?>
                        </div>
                    </div>
                    <div class="phone">
                        <img src="<?php bloginfo('template_url');?>/assets/images/phone.svg" alt="">
                        <div class="single-location-info-text">
                        <p class="highlighted-text">Telefon</p>    
                        <?php
                            // Check rows exists.
                            if( have_rows('phone_numbers') ):

                                // Loop through rows.
                                while( have_rows('phone_numbers') ) : the_row();

                                    // Load sub field value.
                                    $phone = get_sub_field('phone'); ?>
                                    <p><?php echo $phone; ?></p>
                        <?php endwhile;
                            else :
                            // Do something...
                            endif;
                        ?>
                        </div>
                    </div>
                    <div class="address">
                        <img src="<?php bloginfo('template_url');?>/assets/images/location-pin.svg" alt="">
                        <div class="single-location-info-text">
                            <p class="highlighted-text">Adresa</p>    
                            <?php while ( have_posts() ) : the_post(); ?>
                                <p>
                                    <?php the_field('address'); ?>
                                </p>
                            <?php endwhile; // end of the loop. ?>
                        </div>
                    </div>
                    <div class="buttons">
                       
                            <a href="<?php the_field('menu-link'); ?>" target="_blank">
                                <button>    
                                    Shiko menu
                                </button>
                            </a>
                            <a href="/yogurteria/shop"> 
                                <button>
                                    Bli tani
                                 </button>
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="map-container">
    <div class="map"></div>
</div>


<?php get_footer(); ?>
