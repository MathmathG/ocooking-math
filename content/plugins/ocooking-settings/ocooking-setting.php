<?php

/*
Plugin Name: oCooking Settings
 */

if (! defined('WPINC')) {
    exit;
}

require plugin_dir_path(__FILE__) .
'includes/class-custom-post-type-recipe.php';

require plugin_dir_path(__FILE__) .
'includes/admin-cleaner.php';
require plugin_dir_path(__FILE__) .
'includes/class-ocooking-settings.php';
require plugin_dir_path(__FILE__) .
'includes/roles.php';

$custom_post_type_recipe = new Custom_Post_Type_Recipe;

register_activation_hook( __FILE__,
[
    $custom_post_type_recipe, 'activation'
]
);
register_activation_hook( __FILE__,
[
    $custom_post_type_recipe, 'deactivation'
]
);
