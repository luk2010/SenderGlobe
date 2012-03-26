<?php

require 'AcPU/AcPU.php';

//This draw the main content
function Center_Function()
{
    ?>
        <div id="centre">
         
            <div id="mon_profil">
            <h3 id="titre_profil">Leo Maurel</h3>
            <a id="age">18 years</a>
            <a id="pays">France</a>
            <a id="envoyes">sent</a>
            <a id="recus">recieved</a>
            <a id="top5">best messages</a>
           
       </div>
            
            
            <div id="bloc_page">
        
            <div id="cadre_haut">
                <h3 id="titre_cadre_haut">answers of your message</h3>
                <div id="overflow">
                <a>Leo Maurel :</a><p> lieajfu dzd, djedj"ozkdlz,d zindie,d;s ks,xsoi</p>
                <a>Jacques Tronconi :</a><div id="cadre_img"><div id="defilement"><a>< 2/18 ></a><img id="img" src="044.jpg"/></div></div><p> kdzod !! d"kdkod"d,"od jzihjd sjnxksnxh ksnxks,xnsixjskx,sk</p>
                <a>Nicolas Sarkozy :</a><img id="img" src="dsc-2674.jpg"/><p> old"j,kdj zid jksn xjqs gx ysagvx hsbxefx e g h</p>
                <a>Maxime Zerillo :</a><p> juiladzjcc hdeic ehcihdceb cue _ncez ?</p>
                <a>Leo Maurel :</a><p> lieajfu dzd, djedj"ozkdlz,d zindie,d;s ks,xsoi</p>
                <a>Jacques Tronconi :</a><p> kdzod !! d"kdkod"d,"od jzihjd sjnxksnxh ksnxks,xnsixjskx,sk</p>
                <a>Nicolas Sarkozy :</a><img id="img" src="Snow-Leopard.jpg"/><p> old"j,kdj zid jksn xjqs gx ysagvx hsbxefx e g h</p>
                <a>Maxime Zerillo :</a><p> juiladzjcc hdeic ehcihdceb cue _ncez ?</p>
                <a>Leo Maurel :</a><p> lieajfu dzd, djedj"ozkdlz,d zindie,d;s ks,xsoi</p>
                <a>Jacques Tronconi :</a><p> kdzod !! d"kdkod"d,"od jzihjd sjnxksnxh ksnxks,xnsixjskx,sk</p>
                <a>Nicolas Sarkozy :</a><p> old"j,kdj zid jksn xjqs gx ysagvx hsbxefx e g h</p>
                <a>Maxime Zerillo :</a><p> juiladzjcc hdeic ehcihdceb cue _ncez ?</p>
                  </div>              
            </div>
             <div id="resultats">
                <h3 id="titre_resultats">search's results</h3>
                <div id="overflow">
                <a>Leo Maurel :</a><p> lieajfu dzd, djedj"ozkdlz,d zindie,d;s ks,xsoi</p>
                <a>Jacques Tronconi :</a><p> kdzod !! d"kdkod"d,"od jzihjd sjnxksnxh ksnxks,xnsixjskx,sk</p>
                <a>Nicolas Sarkozy :</a><p> old"j,kdj zid jksn xjqs gx ysagvx hsbxefx e g h</p>
                <a>Maxime Zerillo :</a><p> juiladzjcc hdeic ehcihdceb cue _ncez ?</p>
                <a>Leo Maurel :</a><p> lieajfu dzd, djedj"ozkdlz,d zindie,d;s ks,xsoi</p>
                <a>Jacques Tronconi :</a><p> kdzod !! d"kdkod"d,"od jzihjd sjnxksnxh ksnxks,xnsixjskx,sk</p>
                <a>Nicolas Sarkozy :</a><p> old"j,kdj zid jksn xjqs gx ysagvx hsbxefx e g h</p>
                <a>Maxime Zerillo :</a><p> juiladzjcc hdeic ehcihdceb cue _ncez ?</p>
                <a>Leo Maurel :</a><p> lieajfu dzd, djedj"ozkdlz,d zindie,d;s ks,xsoi</p>
                <a>Jacques Tronconi :</a><p> kdzod !! d"kdkod"d,"od jzihjd sjnxksnxh ksnxks,xnsixjskx,sk</p>
                <a>Nicolas Sarkozy :</a><p> old"j,kdj zid jksn xjqs gx ysagvx hsbxefx e g h</p>
                <a>Maxime Zerillo :</a><p> juiladzjcc hdeic ehcihdceb cue _ncez ?</p>
             </div></div>
        <div id="messagerie">
            <h3 id="titre_messagerie">Jacques tronconi</h3>
            <div id="overflow_messagerie">
            <a>Leo :</a><p> hissnskcnsls,lc,c ?</p>
            <a>Jacques :</a><p> j'ai pas compriis mdr</p>
            <a>Leo :</a><p> non rien je teste le site pour voir si sa marche et sa a l'air de fonctionner :)</p>
            <a>Jacques :</a><p> ouai lol ya encore du boulot xD</p>
            </div>
            <div id="cadre_ecriture">
            <textarea id="ecriture"></textarea>
            </div>
        </div>
            </div>
            
             <div id="media">
                 <div id="photos">
                     <h3 id="titre_photos">Photos</h3>
                     <a id="vacances" href="#">Vacances 2012</a>
                     <a href="#">Reveillon</a>
                     <a href="#">en vrac !</a>
                     <a href="#">21/23/2013</a>
                 </div>
                 
                 <div id="videos">
                     
                     <a href="#">Vacances 2012</a>
                     <a href="#">Reveillon </a>
                     <a href="#">en vrac ! :D </a>
                     <a href="#">21/23/2013 </a>
                     <h3 id="titre_videos">Videos</h3>
                 </div>
                 
                 <div id="affichage">
                     <div id="deroulant">
                     
                     </div>
                 <div id="apercu">
                     
                 </div>
                     
                 </div>
                
             
         </div>
        </div>
          
<?php

}

Page::get()->draw("Welcome to sendergold", "");

?>