

	<article class="recipe-excerpt col-md-4 col-md-offset-5">
		<header>
			<figure class="recipe-excerpt__image">
				<img class="img-fluid" src="<?php the_post_thumbnail_url( 'small' ); ?>" alt="" />
			</figure>
		</header>
		<main class="recipe-excerpt__content">
			<h2 class="recipe-excerpt__content__title"><?php the_title(); ?></h2>
			<span class="recipe-excerpt__content__author"><?php the_author(); ?></span>
			<div class="recipe-excerpt__content__excerpt"><?php the_excerpt(); ?></div>
		</main>
		<footer class="recipe-excerpt__footer">
			<a href="<?php echo get_the_permalink(); ?>" class="button button--green button--filled">Lire la recette</a>
		</footer>
	</article>
