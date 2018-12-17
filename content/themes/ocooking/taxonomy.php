<?php
get_header();
if ( have_posts() ) :
	?>
	<div class="row">
		<h1 class="col-12"><?php the_archive_title(); ?></h1>
	</div>
	<section class="recipe">

	<?php
	while ( have_posts() ) :
		the_post();
		if (
			$wp_query->current_post
			&& ( 0 === ( $wp_query->current_post ) % 4 )
		) :
		?>
		
		<?php
		endif;
		get_template_part( 'template-parts/recipe/excerpt' );
	endwhile;
	?>

	</section>
	<?php
endif;






get_footer();
