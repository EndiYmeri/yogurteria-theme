<?php get_header(); ?>

<section class="hero-section">
	<div class="grid-container full">
		<div class="hero-slider">
			<?php
			// Check rows exists.
			if (have_rows('front_page_sliders')):

				// Loop through rows.
				while (have_rows('front_page_sliders')):
					the_row();

					// Load sub field value.
					$image_url = get_sub_field('slider_image'); ?>
					<div>
						<div class="slider-img">
							<img src="<?php echo $image_url; ?>" alt="">
							<div class="hero-button-container">
								<h2>Sweet treat</h2>
								<a class="hero-button" href="/shop/">Bli tani!</a>
							</div>
						</div>
					</div>
				<?php endwhile;
			else:
				// Do something...
			endif;
			?>
		</div>
	</div>
</section>
<section class="about-us">
	<div class="images-container">
		<?php
		// Check rows exists.
		if (have_rows('images')):

			// Loop through rows.
			while (have_rows('images')):
				the_row();

				// Load sub field value.
				$imageTL_url = get_sub_field('top_left_image');
				$imageTR_url = get_sub_field('top_right_image');
				$imageBL_url = get_sub_field('bottom_left_image');
				$imageBR_url = get_sub_field('bottom_right_image'); ?>

				<div class="left top single-image top-left-border">
					<a href="/shop/">
						<img src="<?php echo $imageTL_url ?>" alt="">
					</a>
				</div>
				<div class="center bottom single-image top-right-border">
					<a href="/shop/">
						<img src="<?php echo $imageTR_url ?>" alt="">
					</a>
				</div>
				<div class="center top single-image bottom-left-border">
					<a href="/shop/">
						<img src="<?php echo $imageBL_url ?>" alt="">
					</a>
				</div>
				<div class="right bottom single-image bottom-right-border">
					<a href="/shop/">
						<img src="<?php echo $imageBR_url ?>" alt="">
					</a>
				</div>
			<?php endwhile;
		else:
			// Do something...
		endif;
		?>


	</div>
	<div class="text-container">
		<div class="about-us-title">
			<h1 class="show-for-large glow">
				Welcome to
			</h1>
			<h1 class="text-center show-for-large glow">
				Yogurteria
			</h1>
			<h1 class="hide-for-large glow">Welcome to Yogurteria</h1>
		</div>
		<p>
			Dashuria dhe pasioni na ben te prodhojme
			produktet tona duke ju sherbyer klienteve
			tane per me shume se 10 vjet.Kombinimi i
			yogurtit me produktet e fresketa ben qe te
			kete nje shije te mrekullueshme dhe
			gjithmone per te kerkuar edhe me shume.
		</p>
		<div class="button-center">
			<a href="/yogurteria/rreth-nesh/">
				<button class="button">
					Meso me shume
				</button>
			</a>
		</div>
	</div>
</section>
<section class="full-width-image no-padding">
	<img src="<?php echo the_field('lower_banner'); ?>" alt="">
</section>
<section class="range-slider-section">
	<div class="grid-container text-center">
		<h1>Jeta është me e embel kur ti e ndan ate</h1>
		<p>Trego KUPAT që ju keni krijuar duke përdorur hashtag #YogurteriaTirana dhe shumë supriza ju presin.</p>
		<h3>#yogurteriatirana</h3>
		<div class="home-bottom-slider">
			<div>
				<a href="/yogurteria/product/yogurt/">
					<div class="slider-container">
						<div class="img-container">
							<img src="https://yogurteria.al//wp-content/uploads/2021/12/yogurt.jpg" alt="">
						</div>
						<div class="text">
							<p>Yogurt</p>
						</div>
					</div>
				</a>
			</div>
			<div>
				<a href="/yogurteria/product/yogurt/">
					<div class="slider-container">
						<div class="img-container">
							<img src="https://yogurteria.al//wp-content/uploads/2021/12/churros.jpg" alt="">
						</div>
						<div class="text">
							<p>Churros</p>
						</div>
					</div>
				</a>
			</div>
			<div>
				<a href="/yogurteria/product/krepa">
					<div class="slider-container">
						<div class="img-container">
							<img src="https://yogurteria.al//wp-content/uploads/2021/12/krepa.jpg" alt="">
						</div>
						<div class="text">
							<p>Krepa</p>
						</div>
					</div>
				</a>
			</div>
			<div>
				<a href="/yogurteria/product/pancakes">
					<div class="slider-container">
						<div class="img-container">
							<img src="https://yogurteria.al//wp-content/uploads/2021/12/pancakes.jpg" alt="">
						</div>
						<div class="text">
							<p>Pancakes</p>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
<div class="map-container">
	<div class="map"></div>
</div>
<?php get_footer(); ?>