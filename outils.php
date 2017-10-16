<!Doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--un rendu facile à lire, sans zoom,viewport même largeur que l'écran -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Global Site Tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106866773-1"></script>
        <script>
         window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments)};
       gtag('js', new Date());
       gtag('config', 'UA-106866773-1');
       </script>

	<title>index</title>
        <!-- Une feuille de styles de base pour bien démarrer vos projets:knass avec alsecration-->
        <link rel="stylesheet" type="text/css" media="all" href="css/knass.css" />
        <!--Lien vers fichier Bootstrap.min.css-->
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
        <!--Lien vers feuille de style.css-->
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- media queries :Pour ceux qui ont une résolution inférieure à 980px-->
        <link rel="stylesheet" media="screen and (max-width: 980px)" href="mediaqueries.css" />
        <!--Lien vers jquery3.2.1-->
        <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
        <link rel="stylesheet" href="YouTubePopUp.css">

	<!--Lien vers la police-->
        <lixcnk hcxref="https://fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <!--Lien pour Icones google-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
        <!--Favicon -Début-->
        <?php include'favicon.php';?>
      
      <!-- Feuille de style pour l'infobulle-->
<style>     
 .container_outil {
     background:url('outil.png'); 
     width:80%;
     margin:150px auto;

}

.bulle{
        margin:50px ;
}
div.bulle ul{
        list-style-stype:none;
        margin:0; padding:0;
        overflow:hidden;
        background:rgba(20,25,150,0.6);
        border:11px solid black;
        border-radius:19px;
        
       
} 
      
     /*---animation---*/
 /* Règle de base pour le lien */ 
.box {
  display:block;
  font-style:italic;
  font-weight:bold;
  font-size:18px;
  color:#1473e6;
  background:radial-gradient(circle at center,silver,white);
  border : 2px solid white;
  text-decoration:none;
  border-radius:50%;
  margin:20px;
  padding:12px
  -webkit-transition : border 500ms ease-out;
  -moz-transition : border 500ms ease-out;
  -o-transition : border 500ms ease-out;
  transition : border 500ms ease-out;
}

.box:hover {
   border : 6px solid white;  
   text-decoration: none; 
}
/*--------*/    
       div.bulle a:hover,
          div.bulle a:focus{
                color:#f1f1f1;
                background:black;
                
            }
            
            /* Position et couleur bulle */
            div.bulle a span{ 
                position:absolute;
                margin-top:-200px; 
                margin-left:-200px;
                color:#fff; 
                background:rgba(200, 20, 170, 0.8); 
                padding:8px; 
                width:50%;
                border-radius:15px; 
                display:none;
                /* Faire disparaire infobulle par défaut */
                /* On determine l'origine de la rotation */ 
                /*transform:scale(0) rotate(-180deg);*/
                /* Faire durer l'effet */
                transition:all .25s;
                /* Effet sur la transparence */ 
                opacity:0;
            }
            
            /* Apparition de la bulle avec le scale à 1 */ 
             div.bulle a:hover span, 
             div.bulle a:focus span { 
                display:block;
                /* Effet sur la transparence */ 
                opacity:1;}
        h2 {
       font:800 2rem italic;
       font-family: 'Encode Sans Condensed', sans-serif;
}

         
        
        </style> 
</head>
<body>
<header>
      <?php include'header.php';?>
  </header>
  <div class="wrapper" style=" width:80%;
    height:auto;
    margin: 10px auto;
    padding:10px;
    background-color:#f3f3f5; 
    border: 1px solid #eee; 
    text-align: center;
    z-index:-1;">

                  <h1>Outils du développeur</h1>
       <p align="center" > <img src="separeteur_animee.gif" > </p>

<h2>Voici une liste de liens menant vers des outils importants pour le développeur web!</h2>
<div class="container_outil">
 <div class="bulle">
 <ul class="left">
  <li ><a href="https://pixlr.com" class="box">Logiciel PIXLR en ligne<span>Pixlr est un excellent site pour éditer gratuitement ses images en toute simplicité : la qualité est telle qu'il peut très bien concurrencer des logiciels gratuits comme PhotoFiltre. On apprécie particulièrement les nombreux raccourcis repris de Adobe Photoshop CC. Seul un bandeau publicitaire (assez conséquent) fait défaut au site.</span></a> </li>
  <li> <a href="http://www.mandragore2.net/" class="box">Mandragore2<span>Créez votre bannière/Editez vos Meta-tags/Gifs animés/Graphisme/Textures Javascripts ...</span></a> </li>
 <li> <a href="http://outils-css.aliasdmc.fr/convertir-unites-de-longueurs-css.php" class="box">Conversion<span> Des explication détaillées de différentes unités de longueurs CSS</span></a></li>
  <li> <a href="https://www.alsacreations.com/search/" class="box">alsacreations<span>Ce site ,bien conçu, propose de nombreux articles de qualités aux développeurs. On y trouve des astuces, ds tutoriels, des cours etc</span></a> </li>
  <li> <a href="https://emmet.io/" class="box">Emmet<span>Emmet est un plugin pour de nombreux éditeurs de texte populaires qui améliore grandement le flux de production HTML et CSS</span></a> </li>
<li> <a href="http://outils-css.aliasdmc.fr/les-animations-css3.php" class="box">Les animations<span> Comprendre les animations CSS3:
Vous pouvez faire en CSS3 faires des animations sur des éléments (X)HTML. Pour cela vous devez utiliser keyframes du CSS3 et y ajouter des propriétés Css propriétaires pour la compatibilité</span></a></li>
  <li> <a href="http://outils-css.aliasdmc.fr/les-transitions-css3.php" class="box">les transitions CSS3<span>Comprendre les transitions CSS3
Vous pouvez faire en CSS3 faires des transitions sur des éléments (X)HTML. Pour cela vous devez utiliser transition du CSS3 et y ajouter des propriétés Css propriétaires pour la compatibilité.</span></a> </li>
<li> <a href="https://color.adobe.com/fr/" class="box">Couleur design<span>Chez adobe on trouve des dizaines de belles palettes de couleurs pour donner un beau design à son site! Il faut se connecter pour télécharger les couleurs. </span></a></li>
<li> <a href="http://www.libellules.ch/interfaces_connecteurs_ext.php" class="box">Flexbox<span> Box-sizing pour les nuls</span></a> </li>
<li> <a href="http://torrentspourlesnuls.blogspot.fr/2012/08/quest-ce-quun-torrent-partie-12.html" class="box">Torrent</a><span>Bien comprendre Torrent</a> </li>
<li> <a href="http://fr.365psd.com/" class="box"> http://www.alexgirard.com/git-book/index.html<span>Bien comprendre GIT</a> </li>
<li> <a href="http://fr.365psd.com/" class="box"> PSD <span>Des milions de graphiques gratuits<span></a> </li>
<li> <a href="http://www.mon-ip.com/" class="box"><span> monIp</span>Obtenir son adresse ip</a> </li>
<li> <a href="https://openclassrooms.com/courses/reprenez-le-controle-a-l-aide-de-linux/vim-l-editeur-de-texte-du-programmeur" class="box">VIM<span> Le Puissant éditeur des "vrais" développeurs Web!</span></a> </li>

<li> <a href="https://www.opquast.com/" class="box">Opquast<span> Grâce à la certification Opquast, évaluez et mettez en valeur vos compétences web. Différenciez-vous et passez la Certification Opquast!</span></a> </li>
<li> <a href="https://www.alsacreations.com/article/lire/563-gerer-la-taille-du-texte-avec-les-em.html" class="box">Font-size<span> Typographie web : gérer la taille du texte avec les «em»</span></a> </li>
<li> <a href="https://www.alsacreations.com/article/lire/631-quelles-polices-pour-un-site-web.html" class="box">Police<span> Quelles polices de caractères (fontes) utiliser sur le Web ?</span></a> </li>
  </ul>
</div>
<div class="bulle">
 <ul class="left">
  <li ><a href="http://fr.tuto.com/blog/2015/10/outils-css-utiles-simples.htm" class="box">18 outils CSS<span>18 outils CSS utiles et extrêmement simples à essayer dès maintenant.</span></a> </li>
  <li> <a href="http://fr.freepik.com/" class="box">Banque d'Images<span>Trouver des images c'est parfois un peu galère. Avec freepik on peut télécharger des centaines d'images gratuitement </span></a> </li>
 <li> <a href="https://bootsnipp.com/" class="box">Bootnsipp<span>Bootnsipp c'est un Site de ressources à base de bootstrap.Exemple: formulaire, menu, etc. On peut y trouver plein de modèles avec le code mis à disposition pour le public.</span></a></li> 
<li> <a href="http://blog.kinoa.com/2014/07/22/10-astuces-pour-le-referencement-de-votre-site-web/" class="box">Tutoriel vidéo informatique<span>Référencement site we. Conseils importants </span></a> </li>
<li> <a href="http://www.tutoriel-video.com" class="box">Tutoriel vidéo informatique<span>Tutoriel vidéo informatique facile et intéressant </span></a> </li>
<li> <a href="http://www.responsive-mind.fr/git-15-points/" class="box">Git en 15 points<span>Facile à comprendre </span></a> </li>

<li> <a href="https://www.sitepoint.com/essential-sublime-text-javascript-plugins/" class="box">Sublime text:10 plugins essentiels<span>10 plugins essentiels SublimeText pour les développeurs JavaScript </span></a> </li>
<li> <a href="http://www.webcodesniffer.net/index.php" class="box">CodeSniffer<span>WebCodeSniffer est une version Web de PHP_CodeSniffer. Il vous permet d'utiliser facilement PHP_CodeSniffer dans votre navigateur sur un serveur local ou distant </span></a> </li>
<li> <a href="http://dahlbyk.github.io/posh-git/" class="box">Git sur Powershell<span>Installer la commande git sur powershell</span></a> </li>
<li> <a href="https://www.supinfo.com/articles/single/2682-5-outils-indispensables-developpeur-web" class="box">LiveStyle<span>Le premier outil d'édition bidirectionnel en temps réel pour CSS, LESS et SCSS. </span></a> </li>
<li> <a href="https://www.alsacreations.com/article/lire/1675-json-stockage-leger-pratique-donnees-multitypes.html" class="box">JSON<span>JSON, le stockage léger et pratique de données multitypes </span></a> </li>
<li> <a href="https://www.supinfo.com/articles/single/2682-5-outils-indispensables-developpeur-web" class="box">5 outils du développeur<span>Les 5 outils indispensables du développeur web </span></a> </li>
 <li> <a href="https://www.youtube.com/watch?v=NmVSfgx5Y78&t=15shttps://www.youtube.com/watch?v=VsJg-t0GroA" class="box">DEVENIR DEVELOPPEUR WEB<span> COMMENT DEVENIR UN BON DEVELOPPEUR WEB? </span></a> </li>
<li> <a href="https://www.youtube.com/watch?v=NmVSfgx5Y78&t=15s" class="box">Outils pour le développeur web<span> LA BOÎTE À OUTILS DU DÉVELOPPEUR & DESIGNER WEB</span></a> </li>
<li> <a href="https://openclassrooms.com/courses/apprenez-a-creer-votre-site-web-avec-html5-et-css3/mise-en-page-adaptative-avec-les-media-queries" class="box"> Responsive <span>Le responsive design avec les Media Queries</span></a> </li>
<li> <a href="https://lecrabeinfo.net/creer-copie-sauvegarde-image-systeme-disque-dur-ssd-avec-clonezilla.html" class="box"> Clonezilla<span>Créer une sauvegarde de son disque dur ou SSD avec Clonezilla.</span></a> </li>
<li> <a href="https://ninite.com/" class="box"> Ninite<span>Installez et mettez à jour tous vos programmes à la fois. Pas de barres d'outils. Pas de clic sur Suivant. Choisissez simplement vos applications et allez.</span></a> </li>

<li> <a href="http://www.zupimages.net/?v=NmVSfgx5Y78&t=15s" class="box"> zupimages<span>Hébergeur d'images et de photos gratuit</span></a> </li>
<li> <a href="https://la-cascade.io/box-sizing-pour-les-nuls/" class="box">Box-Sizing<span> La propriété box-sizing est utilisée pour ajuster la largeur et la hauteur des éléments. </span></a> </li>
<li> <a href="http://devdocs.io/" class="box">Devdocs.io<span> DevDocs combine plusieurs documentations API dans une interface rapide, organisée et consultable</span></a> </li>
<li> <a href="https://www.alsacreations.com/tuto/lire/1493-css3-flexbox-layout-module.html" class="box">Flexbox<span> Bonne technique css pour positionner et aligner des éléments du DOM</span></a> </li>
<li> <a href="https://checklists.opquast.com/seo/" class="box">SEO<span>SEO
80 règles pour pousser plus loin votre référencement.</span></a> </li>
<li> <a href="https://developer.mozilla.org/fr/docs/Web/CSS/radial-gradient" class="box">Radial-gradient<span> La fonction radial-gradient() permet de créer une <image> CSS représentant un dégradé de couleur.</span></a> </li>
<li> <a href="https://www.logogenie.fr/creation-logo?" class="box">Logo<span> Plateforme de création facile de logo </span></a> </li>
<li> <a href="https://www.lije-creative.com/erreurs-css/" class="box">10 erreurs CSS à éviter<span> 10 erreurs CSS à éviter. C'est parti!</span></a> </li>
<li> <a href="https://autoprefixer.github.io/" class="box">Autoprefixer<span> Autopresseur CSS en ligne
Ajoutez les préfixes de fournisseur souhaités et supprimez inutilement dans votre CSS.</span></a> </li>
  </ul>
</div>
</div>
</div>
</div>
<footer>
  <?php include 'footer.php';?>
</footer>
<script src="scripts/main.js"></script>
</body>
</html>
