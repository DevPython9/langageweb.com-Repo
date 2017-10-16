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
<body>
<header>
      <?php include'header.php';?>
  </header> 
  <div class="wrapper">
     <div class="main">
                  <h1>HTML en vidéos <img src="youtube-icone.png"></h1>
                  <p align="center"> <img src="separeteur_animee.gif"> </p><br/><hr/><br/>
       
                 <?php include 'video_html.php';?>
     </div>
    </div>
</div>
</div>
</div>
<footer>
  <?php include 'footer.php';?>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="YouTubePopUp.jquery.js"></script>
<script>jQuery("a.demo").YouTubePopUp();
</script>
<script>
$(function(){
  $(".imghtml").mouseover(function(){
    $(this).css("background","url('youtube-icone.png') no-repeat center"; "z-index", "9999");});
});
</script>
</body>
</html>
