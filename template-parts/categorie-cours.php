<?php
/**
 * template part gabarit categorie-cours permet d'afficher un article <<block>>
 * qui s'integre dans la list es cour qu'accede avce category/cours
 * 
 */
$titre = get_the_title();
$sigle = substr($titre, 0, 7);
$titre_long = substr($titre, 7, -5);
$duree = "90 min";
?>


<article>                                                                                             
    <h5><a href="<?php the_permalink(); ?>"> <?= $sigle; ?></a></h5>
    <h6><?= $titre_long; ?></h6>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
    <h6><?= $duree; ?></h6>
</article>