<?php
/**
 * template part gabarit categorie-cours permet d'afficher un article <<block>>
 * qui s'integre dans la list es cour qu'accede avce category/cours
 * 
 */
$titre = get_the_title();
//retirer le premier 0 du titre a faire 
//if (substr($titre,0,1)== '0'){}
?>


<article class="blocflex__article">                                                                                             
    <h5><a href="<?php the_permalink(); ?>"> <?= $titre; ?></a></h5>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
</article>