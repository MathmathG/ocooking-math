<aside class="sidebar col-4 order-1">
        <h3 class="sidebar__title"><?php bloginfo('name');?></h3>
        <p class="sidebar__tagline"><?php bloginfo('description');?></p>
        <p class="sidebar__description"></p>

        <!--<div class="recipe-form">
            <div class="recipe-form__title">Proposer une recette</div>
            <form action="/">
                <fieldset>
                    <label class="recipe-form__label" for="recipe">Recette</label>
                    <span class="recipe-form__input-container recipe-form__input-container--recipe"><input class="recipe-form__input" id="recipe" type="text" placeholder="Recette" /></span>
                </fieldset>
                <fieldset>
                    <label class="recipe-form__label" for="email">E-mail</label>
                    <span class="recipe-form__input-container recipe-form__input-container--email"><input class="recipe-form__input" id="email" type="email" placeholder="Votre email" /></span>
                </fieldset>
                <fieldset>
                    <label class="recipe-form__label" for="instructions">Instructions</label>
                    <textarea class="recipe-form__input" id="instructions" placeholder="Instructions"></textarea>
                </fieldset>
                <fieldset>
                    <input id="publish_authorization" type="checkbox" />
                    <label class="recipe-form__label recipe-form__label--inline recipe-form__label--light" for="publish_authorization">Je suis d&apos;accord pour que cette recette soit publiée sur oCooking</label>
                </fieldset>
                <fieldset>
                    <input class="button button--green button--filled" type="submit" value="Proposer" />
                </fieldset>
            </form>
        </div>-->
        <?php echo do_shortcode('[contact-form-7 id="14" title="Formulaire de contact 1"]') ?>
    </aside>
