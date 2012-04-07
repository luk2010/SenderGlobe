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

             <div id="mon_profil">
            <h3 id="titre_profil">Leo Maurel</h3>
            <a id="age">18 years</a>
            <a id="pays">France</a>
            <a id="envoyes">sent</a>
            <a id="recus">recieved</a>
            <a id="top5">best messages</a>
           
       </div>

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
