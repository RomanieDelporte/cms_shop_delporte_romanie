<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    
</head>
<body>


<header>
    <div class="container">
        <nav class="navigation">
        <!-- Hier defineer je het logo zo wordt hij op elke pagina gerenderd 
             Function_exists ga checken of de functie bestaat in functions.php
            -->
            <?php 
                if( function_exists( 'the_custom_logo') ) {
                    the_custom_logo();
                }
            ?>
            <?php wp_nav_menu(array(
                'theme_location' => 'header-nav'
            )) ?>
        </nav>
    </div>
</header>
    
