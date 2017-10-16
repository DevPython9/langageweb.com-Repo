/***************************Note****************************************/
Quand le site ne veut pas s'afficher:
peut etre probleme au serveur ou a la connexion(fournisseur, modem, cable etc)
Apres ce probleme, j'ai suivi cette instruction ci-dessous:
plus d'outils> effacer données de navigation>j'ai coché "données d'aplications hébergées et la case licences multimédias.
résultat: le probleme s'est réglé
-------------------------------------------------------
Probleme de reseau wifi:
Panneau de configuration\Système et sécurité\Pare-feu Windows\Applications autorisées et cocher "auttoriser reseau privé"
-----------------------------
Dans une feuille de style csss, les propriétés qui sont ecrites après les autres conservent la priorité sur celles-ci
--------------
color : cornsilk; //couleur proche du blanc-gris très jolie
color : #56B789; // couleur proche du gris chocolat blanc. tres agreable a voir
----------------
Une facon d'implémenter des polices dans sa feuille hml:
/* Importation police */
@import url(https://fonts.googleapis.com/css?family=Lobster);
@import url(https://fonts.googleapis.com/css?family=Indie+Flower);
------------------------
La page index ne répond pas malgré toutes les manip au niveau de La feuille de style et malgré la réactulisation de la barre d'adresse:
solution: penser à vous reconnecteur . Il se peut que c'est le serveur qui ne répond plus après avoir déconnecter votre session.
Sinon supprimer vos cookies. Il se peut que la page fait encore référence à la feuille style.css qui est dans le cookies.
-----------------------------
Z-index: sur mon site, les éléments du main notamment les videos passait par dessus de mon menu du haut. mais apres avoir mis un z-index:999 pour mon heade et un z-index:-1 pour mon div main. tout sest bien passé dorénavant!
Rq: meme si on met le header à z-index:999 et qu'on ne precise pas un z-index a main , ce dernier va l'emporter et se placera au desssus du premier.

--------------------
Webpack:
<iframe width="560" height="315" src="https://www.youtube.com/embed/vYW2qVuRDfE" frameborder="0" allowfullscreen></iframe>
------------------------
p {
padding:2rem o;
}
centrera notre texte.
---------------------- 
width:calc(25%-2rem): pour avoir une proportion de 25% - 2 rem
---------------
media queries: https://openclassrooms.com/courses/apprenez-a-creer-votre-site-web-avec-html5-et-css3/mise-en-page-adaptative-avec-les-media-queries
-------------------
slider:
https://amazingslider.com/
-------------------
creer miniature pour video:
<iframe width="560" height="315" src="https://www.youtube.com/embed/DPHMr0ezYAA" frameborder="0" allowfullscreen></iframe>
-----------------------
flexbox
<iframe width="560" height="315" src="https://www.youtube.com/embed/S9nDVG0WA_g" frameborder="0" allowfullscreen></iframe>
------------------------
les 5 meilleurs tutos
https://www.youtube.com/watch?v=ixrSQeEK0N4
----------------------------
Commande pour reinstaller et faire fonctionner gulp:
npm un -g gulp && npm un gulp
npm i -g gulp
npm i --save-dev gulp
----------------------
circle menu
http://wheelnavjs.softwaretailoring.net/index.html
-----------
Pie menu
http://pmg.softwaretailoring.net/
-----------------------
erreur "500 serveur interne"
page blanche meme apres apres  réactualisations
solution: vidage de cookies et réactualisation
---------------------------
Chargement page html effectué partiellement:
overflow:hidden appliqué sur le body ou sur html : commence puis le chargement de la page qui est effectué à moitié
--------------------------
Un pluging qui du jquery a besoin d'un fichier source jquery:
jai rempli ma page de fichier interne jquery et de code jquery mais sans le fichier soucr jquery3.2.1 ou le cdn par exple <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> ca ne foncionnera pas.
--------------------------
Afficher une page sur wamp:
j'ai copié le chemin du fichier "salat.php" qui est la page acceuil du site puis je lai collé sur le navigateur est resultat le site est aparu.
Rq: ne jms oublié l'extension .php
--------------
L'extension ruler (mesure taille)
fonctionne si:
http://127.0.0.1/Projet%20Capital/Site-Web2.0/siteweb2.0.html
 et non si:
C:\wamp\www\Projet Capital\Site-Web2.0\siteweb2.0.html
----------
float: left; appliqué sur le li ne pourra plus fonctionner sur un a pour par exple un float:right  d'un a pour l"isoler du reste.
Mais si on l'applique des le debut au lien a pour les mettre en horizontale il marchera pour un autre a.
-----
li {float:left} et li {display:inline-block} il ya une legere diference visuelle t surtout au niveau de la taille et de la police
----
difference entre width et max-width et mac-device-width
--width prend la largeur fixe qu'on lui donne
--max-width prend la largeur de l'element mais s'adapte quand la resolution devient plus petit et ne fait pas apparaitre des barres de defilement
max-device-width: tient compte de la largeur reelle de lappareil et s'adapte en fct d'elle et pas au taille donné par un tiers pour tricher sur la resoltion
----
le text-align metez le sur les lien "a" et non sur les "li"
mettez un padding sur les liens "a" au lieu de width ou margin pour l'hauteur du menu. 

En appliquant sur les liens "a" vous dissocier les liens et yaura e l'espace entre eux
----
li a:hover:not(.active) {
    background-color: #ddd;
} (pour d'abord exclure l'element de classe .active et appliquer un bgd à tout le reste des "a"

li a.active {
    color: white;
    background-color: #4CAF50;
} (pour mettre en relief un lien en permanence
---------------
ul{ height:100%} ne va pas prendre une enorme largeur mais plutot la longueur du plus lon element de la page. Exemple si le height du contenu div fait 1000px lui aussi il va mesurer 1000px. si
--------------------------
Pour des illustrations d'images dans votre code:
Pensez à lorempixel par exemple
exple: <img src="http://lorempixel.com/1200/1000" width=600 ..../>

Pour les illustratioins texte:
lorem ipsum
--------------------------
Pour effet clignotant
EN fondu on utiliserait ce script ci-dessous:
<label id="LblClignotant">VOICI MON TEXTE CLIGNOTANT DONNANT L'IMPRESSION D'UN FONDU</label>

<script type="text/javascript">
var signe = -1;
var clignotementFading = function(){
var obj = document.getElementById('LblClignotant');
if (obj.style.opacity >= 0.96){
signe = -1;
}
if (obj.style.opacity <= 0.04){
signe = 1;
}
obj.style.opacity = (obj.style.opacity * 1) + (signe * 0.04);
};

// mise en place de l appel de la fonction toutes les 0.085 secondes
// Pour arrêter le clignotement : clearInterval(periode);
periode = setInterval(clignotementFading, 85 );
</script>*/
