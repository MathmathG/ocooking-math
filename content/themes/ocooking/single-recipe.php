<?php
get_header();
?>
<main class="main col-8 order-2">
<?php
if ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/recipe/full' );
endif;
?>
</main>
<?php
get_sidebar();
get_footer();
