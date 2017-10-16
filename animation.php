li:nth-child(odd):hover img {
  
   border : 7px ridge #660000;    //belle bordue
   transform : scale(1.2) rotate(-4deg); //les box impaires vont osciller de 4 degré et s'agrandir 1.2 fois
}
commentaire: les box impaires vont osciller de 4 degré et s'agrandir 1.2 fois
--------------------------------
img{
    opacity : 0.4; /*à "0" on ne verrait rien sur la page mais qd on clique on va decouvrir l'image*/
    border-radius : 50%;
    transition: all 10s ;
}
img:hover{
  opacity : 1;
  position: relative;
  animation: animationFrames linear 1s;
  animation-iteration-count: 1;
  transform-origin: 50% 50%; /*j'ai omis les prefix webkit, -moz etc*/
  z-index: 10;
  border-radius : 50px 0 50px 0;
}
Commentaire: l'image est réglé avec une opacité de 0.4 donc à moitié claire. La transition est appliqué sur l'ensemble des propriétés(all) de l'image(width, bodure , opacité etc) pendant 10seconde)

-----------------------------------
Gallerie d'image animée:
https://openclassrooms.com/forum/sujet/atelier-creez-votre-galerie
Vous verrez dans ce lien une liste de lien travaux sur gallerie
------------------------------
