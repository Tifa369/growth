<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package growth
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


	<!-- hader-area -->
	<header class="hader-area d-none d-md-block" id="sticky">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2">
					<div class="logo-area">
						<?php if( has_custom_logo() ):  ?>
					        <?php 
						        // Get Custom Logo URL
						        $custom_logo_id = get_theme_mod( 'custom_logo' );
						        $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						        $custom_logo_url = $custom_logo_data[0];
						    ?>
							

					        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" 
					           title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" 
					           rel="home">

					            <img src="<?php echo esc_url( $custom_logo_url ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" />

					        </a>
					    <?php else: ?>
					        <img src="<?php echo (get_template_directory_uri() . '/assets/img/logo.png') ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" />
					    <?php endif; ?>

					</div>
				</div>
				<div class="col-lg-8 col-md-8">
					<nav class="hader-menu">
						<?php 
							wp_nav_menu(
							  array(
							    'theme_location' => 'growth_left_menu',
							  )
							);
						?>

					</nav>
				</div>
				<div class="col-lg-2 col-md-2">
					<div class="singel-menu">
						<?php 
							wp_nav_menu(
							  $primaryMenu = array(
						    'theme_location'  => 'growth_right_menu',
						    'container'       => '',
						    'menu_class'      => 'menu',
						    'menu_id'         => 'primary-menu',
						    'echo'            => false,
						    'fallback_cb'     => 'wp_page_menu',
						    'before'          => '',
						    'after'           => '',
						    'link_before'     => '',
						    'link_after'      => '',
						    'depth'           => 0,
							));
						echo strip_tags( wp_nav_menu( $primaryMenu ), '<a>' );


						?>


					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- hader-end -->
