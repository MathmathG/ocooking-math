<?php
// @link https://codex.wordpress.org/fr:R%C3%B4les_et_Capacit%C3%A9s
if ( ! function_exists( 'ocooking_role_capabilities' ) ) {
	function ocooking_role_capabilities() {
		// Je crée un nouveau rôle
		$cooker = add_role(
			'cooker',
			'Cuisinier oCooking',
			[
				'delete_published_posts' => true,
				'publish_posts'          => true,
				'upload_files'           => true,
				'edit_published_posts'   => true,
				'edit_posts'             => true,
				'delete_posts'           => true,
				'read'                   => true,
				'edit_recipe'            => true,
				'read_recipe'            => true,
				'delete_recipe'          => true,
				'edit_recipes'           => true,
				'edit_others_recipes'    => true,
				'publish_recipes'        => true,
				'read_private_recipes'   => true,
			]
		);
		// Je crée une capacité
		//$cooker->add_cap( 'edit_recipes' );
		$admin = get_role( 'administrator' );
		//$admin->add_cap( 'edit_recipes' );
		$contributor = get_role( 'contributor' );
		//$contributor->add_cap( 'edit_recipes' );
	}
}
