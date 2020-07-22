<?php
/*
Template Name: Pleine largeur
Template Post Type: post, page, product
*/

get_header();

$layout = onepress_get_layout();

/**
 * @author alixia.maury
 * @since 2.0.0
 * @see onepress_display_page_title
 */
do_action('onepress_page_before_content');

?>


<div id="content" class="site-content">

    <div id="content-inside" class="container <?php echo esc_attr($layout); ?>">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <!--connexion � la base donn�e -->
                <?php
                include 'connexion.php';
                /* methode 1 avec prepate statement pour se connecter à la bdd
                limite les injections sql */
                $requete = 'SELECT DISTINCT categorie FROM video WHERE actif=1;';
                $stmt = $bdd->prepare($requete);
                $stmt->bindParam(':id', $_GET['ID']);
                $stmt->execute();
                /* cas avec une boucle étendu */
                ?>
                <div id="listeDeroulante" class="listeDeroulante">
                    <form method="POST" action="" name="E-edge" class="E-edge" id="E-edge">
                        <label for="PROUT"> Rechercher une vidéo par catégorie : </label>
                        <select name="listeCat" size="1" id="cat">
                            <?php
                            foreach ($stmt as $row) :
                            ?>
                                <?php
                                echo "<OPTION value=" . $row['categorie'] . ">" . $row['categorie'] . "</OPTION>"
                                ?>
                            <?php endforeach ?>
                        </select>
                        <input type="submit" value="Valider" id="valider" />
                    </form>
                </div>
                <?php
                /*cas avec une boucle while */
                /* methode 2 avec un query pour se connecter a la bdd */
                /* on vérifie que l'information existe et qu'elle n'est pas vide : */
                if (isset($_POST['listeCat']) && !empty($_POST['listeCat'])) {
                    /* si c'est bien le cas */
                    $sqlTable = $bdd->query('SELECT * FROM video  WHERE actif= 1 and categorie ="' . $_POST["listeCat"] . '" ');
                } else {
                    /* sinon,on affiche toute la base de données */
                    $sqlTable = $bdd->query('SELECT * FROM video WHERE actif=1 ORDER BY titre ;');
                }
                ?>
                <?php
                // On affiche chaque entrée une à une
                while ($donnees = $sqlTable->fetch()) {
                ?>

                    <div id="affichage-BD" class="affichage-BD" style="float:left;padding-top: 10px;">

                        <div id="video" style="float:left;">
                            <!-- iframe permet d'ajouter directement la video du support via son url, ciblé par les hackers
                                   <iframe width="560" height="315" src="https://www.youtube.com/embed/S67eC-Z03ns" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                   -->
                            <!-- la balise video permet d'ajouter une video via un dossier plus securisé que iframe -->
                            <video width=350px height=250px controls="controls" preload="metadata">
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
                <?php
                }
                $sqlTable->closeCursor();
                /*$bdd->mysql_close(); permet de fermer la connexion*/
                ?>
            </main><!-- #main -->
        </div><!-- #primary -->

    </div>
    <!--#content-inside -->
</div><!-- #content -->
<?php get_footer();
?>
