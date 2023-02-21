<?php get_header(); ?>
    <main>
    <pre> front-page.php</pre>
    <h1>Bienvenue sur 4W4</h1>   
    </main>

  <section class="blocflex">
    <?php
     if (have_posts()):
       while (have_posts()): the_post();  ?>
        <article class="card">
        <h3><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3>
        <div><?= wp_trim_words(get_the_excerpt(),10, "...")?></div>
        <span class="top"></span>
        <span class="right"></span>
        <span class="bottom"></span>
        <span class="left"></span>
       </article>
   
      
     <?php endwhile;?>
     <?php endif;?>
     </section>
    
    


</body>
<?php get_footer(); ?>
</html>