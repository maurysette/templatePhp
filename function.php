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

 /* cas avec une boucle while 

                // On affiche chaque entrée une à une
                while ($donnees = quelCategorie()->fetch()) {
					?>
	
						<div id="affichage-BD" class="container" style="float:left;padding-top: 20px;">
	
							<div id="video" style="float:left;">
								<!-- iframe permet d'ajouter directement la video du support via son url, ciblé par les hackers
									<iframe width="560" height="315" src="https://www.youtube.com/embed/S67eC-Z03ns" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									-->
								<!-- la balise video permet d'ajouter une video via un dossier plus securisé que iframe -->
								<video width=350 height=250 controls="controls" preload="metadata">
									<!-- controls permet d'afficher les outils play pause stop
									on met directement le lien récuperer en BDD dans la source-->
									<source src="<?php echo $donnees['lien']; ?>" type="video/mp4">
									<source src="<?php echo $donnees['lien']; ?>" type="video/wmv">
								</video>
							</div>
							<div id="detailVideo" style="float:left; padding:15px;">
								<p>
									<strong> <?php echo $donnees['titre']; ?> </strong> <br />
									<?php echo $donnees['categorie']; ?> <br />
									<?php echo $donnees['descriptif']; ?><br />
									<?php echo $donnees['date']; ?>
								</p>
							</div>
	
						</div>
						*/