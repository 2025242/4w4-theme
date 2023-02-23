<?php get_header(); ?>
    <main>
  <section class="blocflex">
    <?php
     if (have_posts()):
       while (have_posts()): the_post();  ?>
        <article class="card">
        <h3><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3>
        <p><?= wp_trim_words(get_the_excerpt(),10, "...")?></p>
       </article>
   
      
     <?php endwhile;?>
     <?php endif;?>
     </section>
     </main>
    



<?php get_footer(); ?>
