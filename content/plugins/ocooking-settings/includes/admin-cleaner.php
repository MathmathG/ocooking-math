<?php
// Modification des textes du footer
if ( ! function_exists( 'ocooking_remove_admin_footer_text' ) ) {
	function ocooking_remove_admin_footer_text( $value ) {
		return;
	}
}
add_filter( 'admin_footer_text', 'ocooking_remove_admin_footer_text' );
if ( ! function_exists( 'ocooking_replace_admin_footer_text' ) ) {
	function ocooking_replace_admin_footer_text( $value ) {
		return str_replace( 'WordPress', 'Hyperspace', $value );
	}
}
add_filter( 'admin_footer_text', 'ocooking_replace_admin_footer_text' );
add_filter(
	'update_footer',
	function () {
		return;
	},
	11
);

// Suppression de l'aide
if ( ! function_exists( 'ocooking_remove_admin_help' ) ) {
	function ocooking_remove_admin_help( $old_help, $screen_id, $screen ) {
		$screen->remove_help_tabs();
		return $old_help;
	}
}
add_filter(
	'contextual_help',
	'ocooking_remove_admin_help',
	999, // priorité
	3 // le nombre d'aguements qu'accepte notre fonction de filtre
);
// Supprimer des tuiles (metaboxes) du tableau de bord
if ( ! function_exists( 'ocooking_remove_dashboard_metaboxes' ) ) {
	function ocooking_remove_dashboard_metaboxes() {
		remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
	}
}
add_action( 'wp_dashboard_setup', 'ocooking_remove_dashboard_metaboxes' );
// Suppression du panneau de bienvenue
remove_action( 'welcome_panel', 'wp_welcome_panel' );
if ( ! function_exists( 'ocooking_dashboard_welcome_widget' ) ) {
	function ocooking_dashboard_welcome_widget() {
	?>
	<p>Un site réalisé par Hyperspace.</p>
	<?php
	}
}
if ( ! function_exists( 'ocooking_dashboard_widgets' ) ) {
	function ocooking_dashboard_widgets() {
		// @link https://codex.wordpress.org/Function_Reference/wp_add_dashboard_widget
		wp_add_dashboard_widget(
			'ocooking_dashboard_welcome_widget', //id
			'Bienvenue sur oCooking',
			'ocooking_dashboard_welcome_widget' //function
		);
	}
}
add_action( 'wp_dashboard_setup', 'ocooking_dashboard_widgets' );
