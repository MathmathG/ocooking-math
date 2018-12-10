<?php

if (! class_exists('Custom_Post_Type_Recipe')){
	class Custom_Post_Type_Recipe{
        const RECIPE_POST_TYPE = 'recipe';
		const INGREDIENT_TAXONOMY = 'ingredient';
        const TYPE_TAXONOMY       = 'type';

		public function __construct() {
			add_action('init', [$this, 'init_post_type']);
			add_action('init', [$this, 'init_taxonomies']);
		}
		public function init_post_type(){
			$recipe_post_type_labels = array(
			'name'               => 'Recettes',
			'singular_name'      => 'Recette',
			'add_new'            => 'Ajouter',
			'add_new_item'       => 'Ajouter une nouvelle recette',
			'edit_item'          => 'Éditer une recette',
			'new_item'           => 'Nouvelle recette',
			'view_item'          => 'Voir la recette',
			'search_items'       => 'Rechercher des recettes',
			'not_found'          => 'Aucune recette trouvé',
			'not_found_in_trash' => 'Aucune recette trouvé dans la corbeille',
			'menu_name'          => 'Recettes',
			);

			$recipe_post_type_args = [
      'labels'        => $recipe_post_type_labels,
			'description'   => 'Recette de cuisine',
			'public'        => true,
            'menu_icon'     => 'dashicons-carrot',
            'supports'      => [
                'title',
                'editor',
                'thumbnail',
                'custom-fields',
                'excerpt',
            ],
		'hierarchical'    => false,
        'public'          =>true,
        'has archive'     =>true,
        'menue_position'  =>4,
        'menu_icon'       =>'dashicons-carrot'

        ];
        register_post_type(self::RECIPE_POST_TYPE, $recipe_post_type_args);

		}
        public function init_taxonomies(){
            $ingredient_taxonomy_labels = [
				'name'                       => 'Ingrédients',
				'singular_name'              => 'Ingrédient',
				'menu_name'                  => 'Ingrédients',
				'all_items'                  => 'Tous les ingrédients',
				'new_item_name'              => 'Nouvel ingrédient',
				'add_new_item'               => 'Ajouter un ingrédient',
				'update_item'                => 'Mettre à jour un ingrédient',
				'edit_item'                  => 'Editer un ingrédient',
				'view_item'                  => 'Voir tous les ingrédients',
				'separate_items_with_commas' => 'Séparer les ingrédient avec une virgule',
				'add_or_remove_items'        => 'Ajouter une supprimer un ingrédient',
				'choose_from_most_used'      => 'Choisir parmis les ingrédients les plus utilisés',
				'popular_items'              => 'Ingrédients populaires',
				'search_items'               => 'Rechercher un ingrédient',
				'not_found'                  => 'Aucun ingrédient trouvé',
				'items_list'                 => 'Lister les ingrédients',
				'items_list_navigation'      => 'Lister les ingrédients',
			];
            $ingredient_taxonomy_args = [
				'labels'        => $ingredient_taxonomy_labels,
				'hierarchical'  => false,
				'public'        => true,
				'show_tagcloud' => true,
				'show_in_rest'  => true,
				'rest_base'     => self::INGREDIENT_TAXONOMY . 's',
			];
            register_taxonomy(
				self::INGREDIENT_TAXONOMY,
				self::RECIPE_POST_TYPE,
				$ingredient_taxonomy_args
			);
            $type_taxonomy_labels = [
				'name'                       => 'Types',
				'singular_name'              => 'Type',
				'menu_name'                  => 'Types',
				'all_items'                  => 'Tous les types',
				'new_item_name'              => 'Nouveau type',
				'add_new_item'               => 'Ajouter un type',
				'update_item'                => 'Mettre à jour un type',
				'edit_item'                  => 'Editer un type',
				'view_item'                  => 'Voir tous les types',
				'separate_items_with_commas' => 'Séparer les type avec une virgule',
				'add_or_remove_items'        => 'Ajouter une supprimer un type',
				'choose_from_most_used'      => 'Choisir parmis les types les plus utilisés',
				'popular_items'              => 'Types populaires',
				'search_items'               => 'Rechercher un type',
				'not_found'                  => 'Aucun type trouvé',
				'items_list'                 => 'Lister les types',
				'items_list_navigation'      => 'Lister les types',
			];
            $type_taxonomy_args = [
				'labels'       => $type_taxonomy_labels,
				'hierarchical' => true,
				'public'       => true,
				'show_in_rest' => true,
				'rest_base'    => self::RECIPE_POST_TYPE . '_' . self::TYPE_TAXONOMY . 's',
			];
            register_taxonomy(
				self::TYPE_TAXONOMY,
				self::RECIPE_POST_TYPE,
				$type_taxonomy_args
			);

        }
        public function activation() {
			$this->init_post_type();
			$this->init_taxonomies();
			flush_rewrite_rules();
		}
		public function deactivation() {
			flush_rewrite_rules();
		}
	}
}
