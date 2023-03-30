<?php get_header(); ?>
    <main  class= "site__main">
    <pre> 404.php</pre>
    <h1>Erreur 404</h1>   
    <?=get_search_form()?>
    <div class="menu404"><?php 
        $menu= "note-4w4";
        if (in_category('cours')){
            $menu = "cours";
        }

        //menu peut prendre les valeur : "note-4w4"ou"cours"
      
        echo $menu;
        wp_nav_menu(array(
        "menu"=>$menu,
        "container"=>"nav"
    )) ?>
    </div>
    <div class="menu404"><?php 
        $menu= "cours";
        if (in_category('note-4w4')){
            $menu = "note-4w4";
        }

        //menu peut prendre les valeur : "note-4w4"ou"cours"
      
        echo $menu;
        wp_nav_menu(array(
        "menu"=>$menu,
        "container"=>"nav"
    )) ?>
    </div>
    </main>

    <?php get_footer(); ?>

    
    

</body>
</html>