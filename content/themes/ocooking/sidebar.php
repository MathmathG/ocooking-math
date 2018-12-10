<aside class="sidebar col-4 order-1">
        <h3 class="sidebar__title"><?php bloginfo('name');?></h3>
        <p class="sidebar__tagline"><?php bloginfo('description');?></p>
        <p class="sidebar__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec consectetur felis, ut eleifend ipsum.</p>
        <nav class="menu menu--uppercase">
            <ul>
                <li class="menu__item"><a href="#" class="menu__item__link">Blog</a></li>
                <li class="menu__item"><a href="#" class="menu__item__link">Types de recettes</a>
                    <ul class="menu menu--lowercase menu--darker">
                        <li class="menu__item"><a href="#" class="menu__item__link">Plats de résistance</a></li>
                        <li class="menu__item"><a href="#" class="menu__item__link">En cas</a></li>
                        <li class="menu__item"><a href="#" class="menu__item__link">Petit déjeuner</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="recipe-form">
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
        </div>
    </aside>
