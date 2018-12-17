<?php
get_header();
$parent_guide_query = new WP_Query([
	'post_type'              => 'recipe',
	'posts_per_archive_page' => -1,
]);
?>

    	<div class="recipe">

            <?php
            if ( $parent_guide_query->have_posts() ) :
	        while ( $parent_guide_query->have_posts() ) :
		$parent_guide_query->the_post();
        ?>
		<?php
		get_template_part( 'template-parts/recipe/excerpt' );
	endwhile;
	?>

</div>
	<?php
endif;
get_footer();
