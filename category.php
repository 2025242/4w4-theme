<?php get_header(); ?>
    <main>
    <pre> category.php</pre>
    <h1>Bienvenue sur 4W4</h1>   
    </main>

  <section class="blocflex">
    <?php
     if (have_posts()):
       while (have_posts()): the_post();  ?>
        <article>
        <h3><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3>
      <?= wp_trim_words(get_the_excerpt(),10, "...")?>
       </article>
      
     <?php endwhile;?>
     <?php endif;?>
     </section>
    
    


</body>
<?php get_footer(); ?>
</html>