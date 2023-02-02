<?php

?>


<?php get_header(); ?>
    <main>
    <pre> single.php</pre>
    <h1>Bienvenue sur 4W4</h1>   
    </main>

  

    <?php
     if (have_posts()):
       while (have_posts()): the_post();  ?>
      <article>
       <h3><?php the_title();?></h3>
       <?php the_content();?> 
    
       </article>

     <?php endwhile;?>
     <?php endif;?>
    
    ?>


</body>
</html>