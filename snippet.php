/******Video miniature puis grand******/(le code ne marche pas bien)
<section> <!--La portion du site qui contiendra la vidéo-->
  <iframe frameborder="0" name="video_iframe"></iframe>
</section>
 
<aside> <!--Et la partie qui contiendra les miniatures-->
  <a target="video_iframe" href="http://www.youtube.com/embed/nbXPvPCxor0">
    <img src="http://i1.ytimg.com/vi/nbXPvPCxor0/default.jpg" alt="miniature" />
  </a>
  <a target="video_iframe" href="http://youtube.com/embed/zA8jUatmreQ">
    <img src="http://i1.ytimg.com/vi_webp/zA8jUatmreQ/default.webp" alt="miniature" />
  </a>
</asidee>
 
<!--Quand on clique sur une miniature, la vidéo correspondante apparaît dans l'iframe-->
-------------------------------------------------------------------------------------------------------------------

/*******************clear : propriété importante*********************************************/
clear

La propriété clear est importante pour contrôler le comportement des floats. Comparez ces deux exemples :

regarder le lien "http://fr.learnlayout.com/clear.html"
et ici: https://css-tricks.com/snippets/css/clear-fix/

/****************************Galerie d'image*****************************************/
(pour plus d'explication:https://ludovicscribe.fr/blog/galerie-images-bootstrap)
ou ici : https://github.com/ludovicscribe/bootstrap-gallery/blob/master/example/example.html)

GALERIE SIMPLE
Pour créer votre galerie vous devez afficher les miniatures de vos images en utilisant le composant « thumbnail » de Bootstrap (j’ai choisi de faire des miniatures de 150x150px, choisissez la taille qui vous convient) :
<div class="container">   
    <div class="row">
        <div class="col-xs-3">
            <a href="images/image1.jpg" class="thumbnail">
                <img src="images/image1-thumb.jpg" alt="Image 1" />
            </a>
        </div>
        
        <div class="col-xs-3">
            <a href="images/image2.jpg" class="thumbnail">
                <img src="images/image2-thumb.jpg" alt="Image 2" />
            </a>
        </div>
        
        <div class="col-xs-3">
            <a href="images/image3.jpg" class="thumbnail">
                <img src="images/image3-thumb.jpg" alt="Image 3" />
            </a>
        </div>
        
        <div class="col-xs-3">
            <a href="images/image4.jpg" class="thumbnail">
                <img src="images/image4-thumb.jpg" alt="Image 4" />
            </a>
        </div>
    </div>
</div>
Comme vous pouvez le voir, le lien dans lequel se trouve chaque miniature doit pointer vers l’image en taille originale. L’attribut alt de la miniature doit, quant à lui, contenir le titre que vous souhaitez afficher dans la galerie. C’est tout ce que vous avez à faire ! Si vous cliquez sur une miniature, l’original s’ouvre dans une fenêtre modale .
https://github.com/ludovicscribe/bootstrap-gallery/blob/master/example/example.html
********************************************************************************************************************
/**************************************************Infobulle******************************///******************/
(page expliqué en detail: http://www.reposcript.com/article48/comment-faire-une-infobulle-au-survol-de-la-souris-en-html-et-css)
Les infobulles sont vraiment très pratiques pour afficher du contenu supplémentaire, mais sans surcharger une interface de gestion.

Vous pouvez ainsi afficher des informations diverses, de l'aide, et tout ce que vous pouvez encore imaginer avec ce point de départ. Le code HTML et CSS est le suivant :

<html>
    <head>
        <title>Infobulle en CSS</title>    
        <style>
            /* Règle de base pour le lien */ 
            a{ 
                color:#4c0ed8; 
                 
            } 
            a:hover,a:focus{
                color:#000;
            }
            
            /* Position et couleur bulle */
            a span{ 
                position:absolute;
                margin-top:25px; 
                margin-left:-25px;
                color:#fff; 
                background:rgba(0, 0, 0, 0.5); 
                padding:25px; 
                border-radius:3px; 
                
                /* Faire disparaire infobulle par défaut */
                /* On determine l'origine de la rotation */ 
                transform:scale(0) rotate(-180deg);
                /* Faire durer l'effet */
                transition:all .25s;
                /* Effet sur la transparence */ 
                opacity:0;
            }
            
            /* Apparition de la bulle avec le scale à 1 */ 
            a:hover span, a:focus span{ 
                transform:scale(1) rotate(0);
                /* Effet sur la transparence */ 
                opacity:1;
            }
        
        </style>  
    </head>
    <body>
        <p> 
            <a href="#"> Passez la souris sur ce lien ! 
                <span>Vous avez maintenant une belle infobulle qui s'affiche ;)</span> 
            </a> 
        </p>
    </body>    
</html>
*********************************************************************************************************************
/******************************Boder animate bcss3*****************************************************************/
(pour plus de detail:https://stackoverflow.com/questions/9476923/css3-animate-border-color)
#box {
  position : relative;
  width : 100px;
  height : 100px;
  background-color : gray;
  border : 5px solid black;
  -webkit-transition : border 500ms ease-out;
  -moz-transition : border 500ms ease-out;
  -o-transition : border 500ms ease-out;
  transition : border 500ms ease-out;
}

#box:hover {
   border : 10px solid red;   
}
*******************************************************************************************************************
/*********************************Animation en cercle**************************************************/

element.style {
    display: inline;
    width: 25.2105px;
    height: 36.015px;
    left: 571.395px;
    top: 171.993px;
    visibility: visible;
    position: absolute;
    z-index: 1;
    opacity: 0;
}

#carousel img {
    visibility: hidden;
    cursor: pointer;
    -moz-border-radius: 15px;
    border-radius: 15px;
    -webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(.7, transparent), to(rgba(0,0,0,0.6)));
}
/*************************La balise video***********************************************/
Pour bien intégré une vidéo sur sa page et pouvoir la proposer à tout le monde il faut:
-utiliser la balise video
-propser tous les format: les principaux: h264-mp4/ogg/webdev
-ajouter des prefix ...
---proposer le visionage sur youtube par exple au cas ou l'internaute n'a pas de navigateur recent ou de codec flash
--proposer les liens de téléchargement de la video
En gros, voici le code idéal:
<h2>La balise <code>video</code> de HTML5</h2> 
	<div class="center"> 
   <video width="400" height="222" controls="controls"> 
    <source src="http://www.nicolas-hoffmann.net/animations/Cavernae_Terragen2.mp4" type="video/mp4" /> 
    <source src="http://www.nicolas-hoffmann.net/animations/Cavernae_Terragen2.webm" type="video/webm" /> 
    <source src="http://www.nicolas-hoffmann.net/animations/Cavernae_Terragen2.theora.ogv" type="video/ogg" /> 
    <object type="application/x-shockwave-flash" width="400" height="222" data="http://www.youtube.com/v/HVMoJqg41Bw"> 
     <param name="movie" value="http://www.youtube.com/v/HVMoJqg41Bw" /> 
     <param name="wmode" value="transparent" /> 
     <!--[if lte IE 6 ]>
     <embed src="http://www.youtube.com/v/HVMoJqg41Bw" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="400" height="222"></embed>
     <![endif]--> 
     <p>Vous n'avez pas de navigateur moderne, ni flash d'installé sur Internet Explorer... suivez les liens ci-dessous pour télécharger les vidéos.</p> 
    </object> 
   </video> 
  </div> 
   <p>Pour télécharger ces exemples&#160;: </p> 
   <ul> 
    <li><a href="http://www.nicolas-hoffmann.net/animations/Cavernae_Terragen2.mp4" title="Cavernae (MP4)">Cavernae (MP4)</a> (format fermé, 6,3&#160;<abbr title="Mégaoctets">Mo</abbr>)</li> 
    <li><a href="http://www.nicolas-hoffmann.net/animations/Cavernae_Terragen2.webm" title="Cavernae (WebM)">Cavernae (WebM)</a> (format ouvert, 4,66&#160;<abbr title="Mégaoctets">Mo</abbr>)</li> 
    <li><a href="http://www.nicolas-hoffmann.net/animations/Cavernae_Terragen2.theora.ogv" title="Cavernae (OGG)">Cavernae (OGG)</a> (format ouvert, 6,4&#160;<abbr title="Mégaoctets">Mo</abbr>)</li> 
   </ul> 
 /*********************************************************************************************************************/
Que se passe-t-il si une image est plus grande que son élément contenant? - La propriété clip vous permet de spécifier un rectangle pour extraire un élément absolument positionné. Le rectangle est spécifié comme quatre coordonnées, toutes dans le coin supérieur gauche de l'élément à recadrer:
<style>
img {
    position: absolute;
    clip: rect(0px,60px,200px,0px);
}
</style>
</head>
<body>

<img src="w3css.gif" width="100" height="140">

</body>

-----------------------------------
Pour specifier des couleur ou autres a une partie d'un elt

<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>un mot en couleur sans span! un truc déjanté</title>
    <style type="text/css">
.mot > li  {
    display: inline-block;
}  
.mot li:nth-child(1) { color: red; }   
.mot li:nth-child(2) { color: yellow; }
.mot li:nth-child(3) { color: green; } 
.mot li:nth-child(4) { color: blue; }  
.mot li:nth-child(5) { color: orange; }
.mot li:nth-child(6) { color: forestgreen; }   
.mot li:nth-child(7) { color: firebrick }  
    </style>
</head>
<body>
    <ul class="mot">
        <li>B</li>
        <li>o</li>
        <li>n</li>
        <li>j</li>
        <li>o</li>
        <li>u</li>
        <li>r</li>
    </ul>
</body>
</html>
------------------
creer application avec windev en 3 min:
<iframe width="560" height="315" src="https://www.youtube.com/embed/JXeGiG-1P4Y" frameborder="0" allowfullscreen></iframe>
----------------
Centrer des élémts:
<iframe width="560" height="315" src="https://www.youtube.com/embed/QhHzxF2Kq8Q" frameborder="0" allowfullscreen></iframe>
----------------------
Avoir un code js propre avec webpack:
<iframe width="560" height="315" src="https://www.youtube.com/embed/vYW2qVuRDfE" frameborder="0" allowfullscreen></iframe>
-----------------------
Unite de mesure rem:
http://missgeek.fr/unite-de-mesure-rem-en-css/
---------------------
Les grilles (GRID layout):
https://la-cascade.io/css-grid-layout-guide-complet/
-----------------------
SASS:
https://www.ice-dev.com/decoupe-html-css/sass-lecon-1-limbrication-des-regles/
--------------------
Faire sa 1ere vidéo
http://www.busimob.fr/comment-faire-sa-premiere-video-sur-youtube/
--------------------
Coder plus vite:
<iframe width="560" height="315" src="https://www.youtube.com/embed/IFN9Se1WLak" frameborder="0" allowfullscreen></iframe>
--------------------------
creer application avec windev en 3 min:
<iframe width="560" height="315" src="https://www.youtube.com/embed/JXeGiG-1P4Y" frameborder="0" allowfullscreen></iframe>
----------------
Centrer des élémts:
<iframe width="560" height="315" src="https://www.youtube.com/embed/QhHzxF2Kq8Q" frameborder="0" allowfullscreen></iframe>
----------------------
Avoir un code js propre avec webpack:
<iframe width="560" height="315" src="https://www.youtube.com/embed/vYW2qVuRDfE" frameborder="0" allowfullscreen></iframe>
-----------------------
Unite de mesure rem:
http://missgeek.fr/unite-de-mesure-rem-en-css/
---------------------
Les grilles (GRID layout):
https://la-cascade.io/css-grid-layout-guide-complet/
-----------------------
SASS:
https://www.ice-dev.com/decoupe-html-css/sass-lecon-1-limbrication-des-regles/
--------------------
Faire sa 1ere vidéo
http://www.busimob.fr/comment-faire-sa-premiere-video-sur-youtube/
--------------------
Coder plus vite:
<iframe width="560" height="315" src="https://www.youtube.com/embed/IFN9Se1WLak" frameborder="0" allowfullscreen></iframe>
--------------------------
Outil pour dev:
<iframe width="560" height="315" src="https://www.youtube.com/embed/BZqNMPTVYf4" frameborder="0" allowfullscreen></iframe>
------------------------
Code simplifié javascript:
https://www.npmjs.com/
-------------------------
creer application avec windev en 3 min:
<iframe width="560" height="315" src="https://www.youtube.com/embed/JXeGiG-1P4Y" frameborder="0" allowfullscreen></iframe>
----------------
Centrer des élémts:
<iframe width="560" height="315" src="https://www.youtube.com/embed/QhHzxF2Kq8Q" frameborder="0" allowfullscreen></iframe>
----------------------
Avoir un code js propre avec webpack:
<iframe width="560" height="315" src="https://www.youtube.com/embed/vYW2qVuRDfE" frameborder="0" allowfullscreen></iframe>
-----------------------
Unite de mesure rem:
http://missgeek.fr/unite-de-mesure-rem-en-css/
---------------------
Les grilles (GRID layout):
https://la-cascade.io/css-grid-layout-guide-complet/
-----------------------
SASS:
https://www.ice-dev.com/decoupe-html-css/sass-lecon-1-limbrication-des-regles/
--------------------
Faire sa 1ere vidéo
http://www.busimob.fr/comment-faire-sa-premiere-video-sur-youtube/
--------------------
Coder plus vite:
<iframe width="560" height="315" src="https://www.youtube.com/embed/IFN9Se1WLak" frameborder="0" allowfullscreen></iframe>
--------------------------
creer application avec windev en 3 min:
<iframe width="560" height="315" src="https://www.youtube.com/embed/JXeGiG-1P4Y" frameborder="0" allowfullscreen></iframe>
----------------
Centrer des élémts:
<iframe width="560" height="315" src="https://www.youtube.com/embed/QhHzxF2Kq8Q" frameborder="0" allowfullscreen></iframe>
----------------------
Avoir un code js propre avec webpack:
<iframe width="560" height="315" src="https://www.youtube.com/embed/vYW2qVuRDfE" frameborder="0" allowfullscreen></iframe>
-----------------------
Unite de mesure rem:
http://missgeek.fr/unite-de-mesure-rem-en-css/
---------------------
Les grilles (GRID layout):
https://la-cascade.io/css-grid-layout-guide-complet/
-----------------------
SASS:
https://www.ice-dev.com/decoupe-html-css/sass-lecon-1-limbrication-des-regles/
--------------------
Faire sa 1ere vidéo
http://www.busimob.fr/comment-faire-sa-premiere-video-sur-youtube/
--------------------
Coder plus vite:
<iframe width="560" height="315" src="https://www.youtube.com/embed/IFN9Se1WLak" frameborder="0" allowfullscreen></iframe>
--------------------------
Outil pour dev:
<iframe width="560" height="315" src="https://www.youtube.com/embed/BZqNMPTVYf4" frameborder="0" allowfullscreen></iframe>
------------------------
Code simplifié javascript:
https://www.npmjs.com/
-------------------------
Outil:
Gulp est un task runner c’est à dire qu’il effectue des tâches pour vous. Dans le développement web, vous l’utiliserez pour des tâches front-end telles que :
créer un serveur web local
rafraîchir le navigateur automatiquement à chaque fois qu’un fichier est modifié
utiliser des préprocesseurs comme Sass ou LESS
optimiser des ressources comme CSS, JavaScript et les images.
La liste est longue de ce que Gulp peut faire pour vous
-----------------------
