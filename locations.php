<?php /* Template Name: Loactions page template */ ?>
<?php get_header(); ?>
<section class="hero-section">
	<div class="grid-container full">
		<div class="hero-slider">
		    <?php
				// Check rows exists.
				if( have_rows('locations_slider') ):

					// Loop through rows.
					while( have_rows('locations_slider') ) : the_row();

						// Load sub field value.
						$image_url = get_sub_field('slider_image'); ?>
						<div>
							<div class="slider-img">
								<img src="<?php echo $image_url; ?>" alt="">
							</div>
						</div>
			<?php endwhile;
				else :
				// Do something...
				endif;
			?>
		</div>
	</div>
</section>
<div class="page-locations">
    <div class="grid-container">
        <div class="grid-x grid-padding-x grid-padding-y ">
            <?php
				if( have_rows('locations') ):
					while( have_rows('locations') ) : the_row();

						$location_name = get_sub_field('location_name');
						$location_url = get_sub_field('location_url'); 
						$location_image = get_sub_field('location_image'); ?>

						 <div class="cell large-6 medium-auto">
                            <a href="<?php echo $location_url; ?>">
                                <div class="location" style="background-image:url('<?php echo $location_image; ?>');">
                                    <div class="overflow"></div>
                                   
                                </div>
							 <h2><?php echo $location_name; ?></h2>
                            </a>
                        </div>
			<?php endwhile;
				else :
				endif;
			?>
        </div>
    </div>
</div>
<div class="map-container">
    <div class="map"></div>
</div>


<?php get_footer(); ?>
