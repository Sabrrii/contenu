<?php
/**
 * The footer section blank template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage ExS
 * @since 0.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( has_nav_menu( 'bottom' ) ) :
	$css_class = exs_option( 'bottom_nav_background', 'l' );
	$css_class .= exs_option( 'bottom_nav_shadow' ) ? ' shadow' : '';
	$css_class .= exs_option( 'bottom_nav_bold' ) ? ' fw-700' : '';
	$css_class .= exs_option( 'bottom_nav_uppercase' ) ? ' text-uppercase' : '';
	$css_class .= exs_option( 'bottom_nav_font_size' ) ? ' fs-' . (int) exs_option( 'bottom_nav_font_size' ) : '';
	//menu-icons
	$css_class .= exs_option( 'bottom_nav_icons_center' ) ? ' icons-center' : '';
	$css_class .= exs_option( 'bottom_nav_icon_labels_hidden' ) ? ' icons-' . exs_option( 'bottom_nav_icon_labels_hidden' ) : '';
	?>
	<nav id="nav_bottom" class="bottom-nav <?php echo esc_attr( $css_class ); ?>" aria-label="<?php esc_attr_e( 'Bottom Menu', 'exs' ); ?>">
		<?php
		if ( exs_option( 'bottom_nav_border', '1' ) ) {
			?>
			<hr class="section-hr">
			<?php
		}
		wp_nav_menu(
			array(
				'theme_location' => 'bottom',
				'menu_class'     => 'bottom-menu',
				'container'      => false,
				'depth'          => 1,
			)
		);
		?>
	</nav><!-- .bottom-nav -->
<?php
endif; //has_nav_menu
