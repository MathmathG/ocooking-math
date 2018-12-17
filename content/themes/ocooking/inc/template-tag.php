<?php
if (  ! function_exists('the_ingredients') ) {
    function the_ingredients( $post_id = 0 ){
        $ingredient_list = get_the_ingredients( $post_id );

        if ( ! empty($ingredient_list) ) {
            foreach ($ingredient_list as $ingredient) {
                ?>
                <a class="badge badge-pill badge-dark" href="<?php get_term_link( $ingredient );?>"><?php echo $ingredient->name; ?></a>
                <?php
            }
        }

    }
}

if (  ! function_exists('get_the_ingredients') ) {
    function get_the_ingredients( $post_id = 0 ) {
      if ( 0 === $post_id ) {
        $post_id = get_the_ID();
      }
      return wp_get_post_terms(
        $post_id,
        Custom_Post_Type_Recipe:: INGREDIENT_TAXONOMY
    );

    }
}
if ( ! function_exists( 'the_types' ) ) {
	function the_types( $post_id = 0 ) {
		$types = get_the_types( $post_id );
		foreach ( $types as $type ) {
		?>
		<a href="<?php echo get_term_link( $type ); ?>" class="button"><?php echo $type->name; ?></a>
		<?php
		}
	}
}
if ( ! function_exists( 'get_the_types' ) ) {
	function get_the_types( $post_id = 0 ) {
		if ( ! $post_id ) {
			$post_id = get_the_ID();
		}
		return wp_get_post_terms(
			$post_id,
			Custom_Post_Type_Recipe::TYPE_TAXONOMY
		);
	}
}



 ?>
