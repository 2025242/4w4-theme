<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mon 4W4</title>
    
    <?php wp_head(); ?>
</head>
<body class="site">

    <header class="site__entete">

        <section class="entete__nav">
       <?php the_custom_logo(); ?> 
       <div class="entete__menurecherche">
       <input type="checkbox" id="chkBurger">
        <?php  wp_nav_menu(array( 
                        "menu" => "entete",
                        "container" => "nav",
                        "container_class" => "menu__entete"

                    )); ?>
            <?=get_search_form()?>
            <label class="burger" for="chkBurger">
            <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="32" height="32">
            </label>
        </div>
        </section>
        <h1><a class="site__titre" href="<?= bloginfo('url'); ?>"><?= bloginfo('name'); ?></a></h1>
        <h2 class="site_description"><?= bloginfo('description'); ?></h2>

       
</header>

<aside class="site__aside">
    <h3>Menu secondaire</h3>

    <?php 
        $menu = "note-4w4";
        if (in_category('cours')){
            $menu = "cours";
        }

        //menu peut prendre les valeur : "note-4w4"ou"cours"
      
        echo $menu;
        wp_nav_menu(array(
        "menu"=>$menu,
        "container"=>"nav"
    )) ?>
</aside>

</aside>

   