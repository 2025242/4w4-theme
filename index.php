<?php get_header(); ?>
    <main>
    <pre> front-page.php</pre>
    <h1>Bienvenue sur 4W4</h1>   
    </main>

    <?php get_footer(); ?>

    <?php
     if (have_posts()):
       while (have_posts()):
    
        the_post(); //extraire un objet post?>
        <article>
        <h3><?php the_title('<h3>', '</h3>');//affiche le titre du post?></h3>
       <h6> Extrait:</h6><?php the_excerpt();//show extrait ?> 
       <h6> Contenu:</h6><?php the_content(); //afficher le contenu ?>
       </article>

     <?php endwhile;?>
     <?php endif;?>
    
    ?>
    

</body>
</html>