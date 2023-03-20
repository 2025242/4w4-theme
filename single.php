<?php

?>


<?php get_header(); ?>
    <main>
    <h1>Bienvenue sur 4W4</h1>
    <article>
      <h3><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3>
       <?php the_content();?> 
    
       </article>   
    </main>

  

    <?php
     if (have_posts()):
       while (have_posts()): the_post();  ?>
     

     <?php endwhile;?>
     <?php endif;?>
    
     <?php get_footer(); ?>