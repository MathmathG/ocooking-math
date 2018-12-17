<?php
get_header();
?>
<main class="main col-8 order-2">
	<?php
	$last_recipe_query = new WP_Query([
		'post_type'     => Custom_Post_Type_Recipe::RECIPE_POST_TYPE,
		'orderby'       =>'date',
		'order'         =>'DESC',
		'post_per_page' =>1,
	]);
	if ($last_recipe_query ->have_posts() ) :
		$last_recipe_query ->the_post();

		get_template_part('template-parts/recipe/highlight');
	endif;
	?>
</main>
<?php
get_sidebar();

get_footer();
?>
