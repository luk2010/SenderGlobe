<?php

/*
 * Draw the header
 */

function Header_Func($title, $description)
{
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="style.css" />
        <title><?php echo $title; ?></title>
    </head>
        
    <body> 
        
        <header> <div id="cadre_header">
            <h1>sendergold</h1>
            
            <menu>  
                <a id="settings" href="#">Settings</a>
                <a id="logout" href="#">Log out</a>
                <a id="hotline" href="#">Hotline</a>
            </menu>  
          </div>  
        </header>
    <section id="navigation">
        <div id="cadre_navigation">
        
            <a id="general" href="#">general</a>
            <a id="eshop" href="#">eshop</a>
            <a id="lovers" href="#">lovers</a>
            
                <input id="envoyer" type="button" value="send">
                <textarea name="texte" id="zone_texte"></textarea>
                <input id="rechercher" type="button" value="search">
                
            <a id="destination" href="#">place</a>
            <a id="age_navi" href="#">old</a>
            <a id="sexe" href="#">genre</a>
        </div>
   </section>

    <?php
}

/*
 * Draw the footer
 */
function Footer_Func()
{
    ?>
        <footer id="footer">
            
            <a href="#">who are we ?</a>
            <a href="#">do you want a job ?</a>
            <a href="#">confidentiality</a>
            <a href="#">CEO's messages</a>
            <a href="#">help</a>
            <a href="#">gold book</a>
            <p>sendergold 2012 tm all rights reserved</p>
        </footer>
        
    </body>
</html>
        
    <?php
}

?>
