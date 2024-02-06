<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head()?>
</head>


<body>

<header class='container nav-bar'>
    <div class="logo"> 
        <span class="title">WithLoveFaby</span>
    </div>
    <?php
        $args =array(
            'theme_location'=> 'menu-principal',
            'container' =>'nav',
            'container_class'=>'menu-principal'
        );

        wp_nav_menu($args)
    ?>

</header>