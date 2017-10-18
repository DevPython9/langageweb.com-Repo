<!Doctype html>
<html lang="fr" xmlns:og="http://ogp.me/ns#">
<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimal-ui" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	    <!-- pk la balise <meta http-equiv=X-UA-Compatible....>? À la base, le mode de compatibilité est prévu pour pouvoir faire fonctionner les vieux sites qui ont été conçus à la mode du tag soup et des tableaux de présentation. Ces derniers se fichaient bien du respect des standards (triste époque du « optimisé pour IE  »).
           Idéalement, la possibilité d'utiliser ce mode devrait être laissée, toutefois, il est parfois pénible de chercher pendant une heure ce qui peut ne pas fonctionner chez un utilisateur alors que le site a été conçu dans les règles de l'art (comprenez en respectant les standards, testé sur des versions d'Internet Explorer raisonnablement récentes).
         Toutefois, il est possible d'interdire cette possibilité, et de plusieurs manières :
         via un méta-tag : <meta http-equiv="X-UA-Compatible" content="IE=edge" />
         via un entête PHP : header('x-ua-compatible: ie=edge');
         ou soit directement dans un fichier .htaccess via : header set X-UA-Compatible "IE=Edge".
         Il faut l'entourer de commentaire if..pour qu'il soit validé par w3 -->
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <![endif]-->
        <!--<meta name="viewport ...>? La largeur que vous définissez dans votre « viewport » revient à dire que c'est
        la largeur qui permet l'affichage le plus optimisé de votre site.
        La meilleure solution pour que votre site ait un « responsive design » est de définir comme largeur de « viewport » la largeur du matériel utilisé pour visualiser la page Web.
        Pour vous assurer que votre page s'affichera sans zoom, vous pouvez utiliser la propriété inital-scale pour définir le zoom par défaut.
        En mettant l'échelle à 1, on s'assure qu'aucun zoom ne sera fait à l'affichage de la page.
        Si vous souhaitez empêcher tout zoom de la part de l'utilisateur, vous pouvez définir la propriété maximum-scale à 1 afin d'empêcher tout redimensionnement. *d'info: voir http://paulund.developpez.com/tutoriels/html/metatag-viewport/-->
        <meta name="language" content="com,fr" />
        <meta name="copyright" content="//langageweb.com" />
        <meta name="author" content="langageweb.com" />
        <!-- Global Site Tag (gtag.js) - Google Analytics: Google me demande de mettre ces lignes de code entre les balises HEAD de mon site pour activer l'analitic. On va mettre le code dans un fichier php séparé -->
        <?php require_once 'google_analytic.php'; ?>
        <!-- Une feuille de styles de base pour bien démarrer vos projets:knass avec alsecration-->
        <link rel="stylesheet" type="text/css" media="all" href="css/knass.css" />
        <!--Lien vers fichier Bootstrap.min.css-->
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
        <!--Lien vers feuille de style.css-->
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- media queries: Pour ceux qui ont une résolution inférieure à 980px-->
        <link rel="stylesheet" media="screen and (max-width: 980px)" href="mediaqueries.css" />
        <!--Lien vers jquery3.2.1-->
        <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
        <link rel="stylesheet" href="YouTubePopUp.css">

	    <!--Lien vers la police-->
        <link href="https://fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <!--Lien pour Icones google-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
        <!--Favicon -->
        <?php include'favicon.php';?>
        <!--La balise <title> correspond au titre de votre page web. Il s’agit d’un champ essentiel à ne pas négliger dans le cadre d’une bonne stratégie d’optimisation du référencement naturel puisqu’elle est l’un des critères les plus importants pour les moteurs de recherche (Google, Bing...)
            Le contenu de la balise <title> d’une page web apparaît dans la partie supérieure de la fenêtre de navigation ainsi que dans le nom des onglets. Note: placez les balises title et meta description juste avant </head> et la balise title au dessus de meta desc. Pour +d'info voir: https://www.yakaferci.com/balise-title/-->
	    <title>Accueil:tutoriels sur les langages web</title>
	    <title><?php echo $_GET["\'id\'"];?></title>
	    <!--En théorie, l'impact de l'Open Graph sur le SEO est limité. En effet, le protocole Open Graph est destiné à l'origine aux réseaux sociaux (Facebook, Google +, Twitter...) et non aux moteurs de recherche (Google, Bing...)
           En pratique cependant, les réseaux sociaux comme Facebook ont pris une telle importance depuis quelques années que les moteurs de recherche ne peuvent pas ignorer les données de l'Open Graph dans leurs algorithmes.Pour mettre en place le protocole Open Graph, il faut simplement :
            Ajouter le namespace "http://ogp.me/ns#" au tag html
            Au sein des balises head, il faut rajouter des balises meta avec les attributs property et content
            Les spécifications définissent 4 balises de l'Open Graph comme "Requise" : og:title, og:type, og:url, og:image
            D'autres tags sont aussi utiles, notamment si votre page a du contenu riche (vidéo). Pour +info voir:https://www.yakaferci.com/open-graph/-->
        <meta property="og:title" content="Article sur l'Open Graph" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="http://www.langageweb.com/open-graph/" />
        <meta property="og:image" content="http://www.langageweb.com/images/logo.jpg" />
        <!--La balise meta et plus précisément la balise meta description permet d’ajouter une description d'une page affichée, ainsi que des mots-clés pour lesquels on souhaite optimiser une page.
        Elle permet d’informer les moteurs de recherche ainsi que les internautes du contenu de la page. Afin de tirer profit de cette balise (dans le cadre du référencement naturel) il y a quelques règles à respecter et quelques pièges à éviter. voir:https://www.yakaferci.com/balise-meta-description/-->
        <meta name="description" content="Apprendre facilement les langages de créations de sites web -HTML/CSS/JAVASCRIPT/PHP/JQUERY..avec les meilleurs vidéastes français développeurs web sur youtube.">

</head>
<body>
    <header>
        <?php include'headerIndex.php';?>
    </header>
<div class="wrapper">
    <!-- For modern browsers. -->
     <i class="material-icons icone_avion">airplanemode_active</i>
     <i class="material-icons icone_avion">airplanemode_active</i>
      <!-- For IE9 or below. -->
    <i class="material-icons">&#xE195;</i>
   <h3>Survolez le menu du haut pour accéder directement aux cours vidéos</h3>
   <span class="chaine-animee">Un bon Site est toU<img src="sep_anim.gif" align="center";>Jours en Construction!</span>
    <h3 class="titre2">Voici les 3 principaux langages à appendre absolument! </h3>
    <!-- For modern browsers. --> 
      <i class="material-icons icone_silhouette">directions_run</i> 
      <i class="material-icons icone_silhouette">directions_run</i>
      <!-- For IE9 or below. -->
     <i class="material-icons">&#xE566;</i>
           <hr style="color:green;">
  <nav>
    <ul class="bloc_langage">
            <!-- les li vers des Ancres -->
             <!--<li style="z-index-1"><a href="index.php" ><i class="material-icons home2">home</i></a></li>-->
             <li><a href="#html">HTML</a></li>
             <li><a href="#css3">CSS3</a></li>
             <li><a href="#javascript">JAVASCRIPT</a></li>
             <!--<li><a href="#jquery">JQUERY</a></li>
             <li><a href="#php">PHP</a></li>-->
      
  </ul>
</nav>
<aside>
   <?php include 'aside.php';?>
</aside>
  <div class="main">
         <section>
             <span class="icone_langage"> HTML </span>
               <h1 id="html">Qu'est-ce que HTML</h1>
            <p>HTML n'est pas, à proprement parler, un langage de programmation. C'est un langage de balises utilisé pour fournir la structure et le sens du contenu qu'on souhaite avoir sur un site web. </p>
<p>Il se compose de différents éléments qu'on assemble autour des différentes parties du contenu pour lui fournir un sens. Les balises qui entourent un mot ou une image peuvent former un lien hypertexte, mettre le texte en italique,...
 <button class="btn_html"><a href="html.php">Apprendre plus en vidéos</a></button> </p>
          </section>
          <section>
               <span class="icone_langage"> CSS  </span>
                       <h1 id="css3">Qu'est-ce que CSS?</h1>
             <p>De la même façon que HTML, CSS n'est pas vraiment un langage de programmation. C'est un langage de feuille de style, c'est-à-dire qu'il permet d'appliquer des styles sur différents éléments sélectionnés dans un document HTML. </p>
             <p>Diagramme expliquant les différents éléments d'une déclaration CSS</p>
            <figure align="center">
                 <img src="imageCSS.svg"  class="diagramme" alt="image css">
                 <figcaption><br/><strong style="color:red">Anatomie d'une règle CSS</strong></figcaption>
            </figure>
            <p>Cette structure s'appelle: "un ensemble de règles" (généralement, on appelle ça une « règle »)...<button  class="btn_html"><a href="css3.php">Apprendre plus en vidéos</a></button></p> <br/>
             </section>
             <section>
                <span class="icone_langage">  JS </span>
             <h1 id="javascript">Les bases de JavaScript</h1>
            <p>JavaScript est un langage de programmation qui permet de rendre un site web interactif (par exemple pour réaliser des jeux, afficher des réponses de façon dynamique lorsque l'utilisateur clique sur un bouton ou saisit des données, animer la page). Avec ces tuto, vous serez en mesure d'utiliser le bases de ce langage et de réaliser ce qu'il est possible de faire avec JavaScript...<button class="btn_html"><a href="javascript.php">Apprendre plus en vidéos</a></button> </p>
           </section> 
            
</div>
</div>
<footer>
  <?php include 'footer.php';?>
</footer>
<script src="app.js"></script>
<script>
jQuery("a.demo").YouTubePopUp({ autoplay: 0 });
</script>
</body>
</html>
