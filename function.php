<?php

/**
 ** activation theme
 **/
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}


/* Retirer les préfixes sur les pages d'archives */
function wp_retirer_prefix_dans_archives()
{
	if (is_category()) {
		$title = single_cat_title('', false);
	} elseif (is_tag()) {
		$title = single_tag_title('', false);
	} elseif (is_author()) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif (is_post_type_archive()) {
		$title = post_type_archive_title('', false);
	}
	return $title;

	add_filter('get_the_archive_title', 'wp_retirer_prefix_dans_archives');
}

/* modifier le format d'affichage des articles  
function wpc_theme_support() {
add_theme_support('post-formats', array('video', 'gallery'));
}
add_action('after_setup_theme','wpc_theme_support');
*/


/* pour récupérer la donnée d'une base donnée 
get_result($query=null,$output=OBJECT); // query type de requete object type de retour
*/
/* define('DISALLOW_FILE_EDIT',true); pour desactivé l'éditeur de texte */

