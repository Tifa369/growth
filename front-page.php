<?php 
	get_header();
 ?>

 <!-- baner-area -->
	<section class="baner-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="baner-box">
						<div class="baner-text wow fadeInDown " data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
							<h2><?php echo get_theme_mod( 'title1_setting' ); ?> <span><?php echo get_theme_mod( 'title2_setting' ); ?></span></h2>
							<p><?php echo get_theme_mod( 'text_setting' ); ?></p>
						</div>
						<div class="baner-btn wow pulse" ata-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: pulse;">

							<a href="<?php echo do_shortcode('[maxbutton name="open_account" url="#"]'); ?>">Open Live Account</a>
						</div>
					</div>
					<div class="baner-image">
						<img src="<?php echo wp_get_attachment_image( $attachment->ID, 'image_baner' ); ?>" alt="image" />
					</div>
				</div>
			</div>
		</div>			
	</section>
	<!-- baner-end -->

