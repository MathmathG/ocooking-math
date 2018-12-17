<?php
get_header();
$random_recipe_query = new WP_Query([
	'post_type'     => Custom_Post_Type_Recipe::RECIPE_POST_TYPE,
	'orderby'       => 'rand',
	'post_per_page' => 1,
]);
?>
<main class="main col-8 order-2">
<?php
if ( $random_recipe_query->have_posts() ) :
	$random_recipe_query->the_post();
	get_template_part( 'template-parts/recipe/full' );
	wp_reset_postdata();
endif;
?>
</main>
<?php
get_sidebar();
get_footer();
