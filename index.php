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


</head>
<body onload="alert('Votre taille d\'écran est de '+screen.width)">
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
<script>
jQuery("a.demo").YouTubePopUp({ autoplay: 0 });
</script>
</body>
</html>