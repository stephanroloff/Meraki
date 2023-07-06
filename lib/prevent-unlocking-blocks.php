<?php
add_filter(
	'block_editor_settings_all',
	static function( $settings, $context ) {
		// Allow for the Editor role and above.
		// $settings['canLockBlocks'] = current_user_can( 'delete_others_posts' );
        
        // Allow for the Admin role and above.
		$settings['canLockBlocks'] = current_user_can( 'administrator' );

		// Only enable for specific user(s).
		$user = wp_get_current_user();
		if ( ! in_array( $user->user_email, array( 'sr@werbeagenten.de' ), true ) ) {
			$settings['canLockBlocks'] = false;
		}

		// Disable for posts/pages.
		// if ( $context->post && $context->post->post_type === 'page' ) {
		// 	$settings['canLockBlocks'] = false;
		// }

		return $settings;
	},
	10,
	2
);