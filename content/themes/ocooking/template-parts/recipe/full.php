<article class="recipe-highlight">
	<header class="row recipe-highlight__header">
		<div class="col-8">
			<h2 class="recipe-highlight__header__title"><?php the_title(); ?></h2>
			<span class="recipe-highlight__header__author">Préparée par <?php the_author(); ?></span>
		</div>
		<div class="col-4 recipe-highlight__header__meta">
			<ul>
				<li class="recipe-highlight__header__meta__item"><span class="recipe-highlight__header__meta__item__title">Préparation</span> <?php the_field( 'preparation_time' ); ?> min.</li>
				<li class="recipe-highlight__header__meta__item"><span class="recipe-highlight__header__meta__item__title">Cuisson</span> <?php the_field( 'cooking_duration' ); ?> min.</li>
				<li class="recipe-highlight__header__meta__item"><span class="recipe-highlight__header__meta__item__title">Prix</span> <?php the_field( 'cost_per_person' ); ?> € / pers.</li>
			</ul>
		</div>
	</header>
	<main class="recipe-highlight__content">
		<div class="row">
			<figure class="recipe-highlight__content__image col-12">
				<?php
				the_post_thumbnail(
					'post-thumbnail',
					[
						'class' => 'img-fluid',
					]
				); ?>
			</figure>
			<!--<figure class="recipe-highlight__content__image col-12">
				<img class="img-fluid" src="images/sandwich.jpg" alt="">
			</figure>-->
		</div>
		<div class="row">
			<div class="col-8 recipe-highlight__content__excerpt">
				<div class="recipe-highlight__content__excerpt__title">La recette</div>
				<div class="recipe-highlight__content__excerpt__content"><?php the_content(); ?></div>
			</div>
			<div class="col-4 recipe-highlight__content__ingredients">
				<div class="recipe-highlight__content__ingredients__title">Ingrédients</div>
				<div class="recipe-highlight__content__ingredients__d-flex flex-wrap">
					<?php the_ingredients(); ?>
				</div>
				<div class="recipe-highlight__footer">Recette visible dans <?php the_types(); ?></div>
			</div>
		</div>
	</main>
</article>
