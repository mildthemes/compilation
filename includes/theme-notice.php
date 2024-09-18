<?php
/**
 * Compilation theme admin notice function
 */
function compilation_theme_admin_notice() {

	global $current_user;
    $compilation_theme = wp_get_theme();
	$user_id = $current_user->ID;

	if ( ! get_user_meta( $user_id, 'compilation_hide_admin_notice' ) ) : ?>
	<div id="message" class="notice notice-success mild-themes-notice mild-themes-welcome-notice">
		<a class="mild-themes-message-close notice-dismiss" href="?compilation_hide_admin_notice=0"></a>

		<div class="mild-themes-message-content">
			<div class="mild-themes-message-image">
			
				<a href="<?php echo esc_url( $compilation_theme->get( 'ThemeURI' ) );?>"><img class="mild-themes-screenshot" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png" alt="<?php printf( esc_html__( '%s', 'compilation' ), $compilation_theme->get( 'Name' ) ); ?>" /></a>
			</div>

			<div class="mild-themes-message-text">
				<h2 class="mild-themes-message-heading">
				<?php printf( esc_html__( 'Thank you for downloading %s', 'compilation' ), $compilation_theme->get( 'Name' ) ); ?>	
				</h2>
				<?php
				echo '<p>';
					printf( __( 'Unlock all the custom blocks, features and create an awesome-blossom directory website by upgrading to <a target="_blank" rel="noopener" href="%1$s">Compilation Pro</a>.', 'compilation' ), esc_url( $compilation_theme->get( 'ThemeURI' ) ) );
				echo '</p>';

				echo '<p class="notice-buttons">';
	
				echo ' <a href="' . esc_url( admin_url( 'site-editor.php' ) ) . '" target="_blank" rel="noopener" class="button button-secondary mild-themes-button"><span class="dashicons dashicons-admin-customizer"></span> ';
				echo esc_html__( 'Customize', 'compilation' );
				echo '</a>';

				echo '<a href="'. esc_url( $compilation_theme->get( 'ThemeURI' ) ) .'" target="_blank" rel="noopener" class="button button-primary mild-themes-button"><span class="dashicons dashicons-megaphone"></span> ';
				echo esc_html__( 'Go Pro!', 'compilation' );
				echo '</a>';
			
				echo '</p>';
				?>
			</div><!-- .mild-themes-message-text -->
		</div><!-- .mild-themes-message-content -->
	</div><!-- #message -->

	<?php
	endif;
}

add_action( 'admin_notices', 'compilation_theme_admin_notice' );

/**
 * Compilation theme admin dismiss notice function
 */
function compilation_dismiss_admin_notice() {
	global $current_user;
	$user_id = $current_user->ID;

	// Once dismissed, the user meta is updated 
	if ( isset( $_GET['compilation_hide_admin_notice'] ) && '0' === $_GET['compilation_hide_admin_notice'] ) {
		add_user_meta( $user_id, 'compilation_hide_admin_notice', 'true', true );
	}
}
add_action( 'admin_init', 'compilation_dismiss_admin_notice' );