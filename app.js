/**
-----Pour faire clignboter le texte: les videos augmenteront au fur et à mesure
**/
  var clignotement = function(){ 
   if (document.getElementById('spanClignotante').style.visibility=='visible'){ 
      document.getElementById('spanClignotante').style.visibility='hidden'; 
   } 
   else{ 
   document.getElementById('spanClignotante').style.visibility='visible'; 
   } 
}; 
// mise en place de l appel de la fonction toutes les 0.8 secondes 
// Pour arrêter le clignotement : clearInterval(periode); 
periode = setInterval(clignotement, 1200);        
    
    
    /*On accede à nos éléments input et icone search*/

var input=document.querySelector('input')
var icone=document.querySelector('.icone_search')

 /*On crée notre fct "modifietextInput* et supprimeModifInput qui ne seront effective que lorsque l'on clique sur icone search*/
 /*Atention: pas de couple de parenthèse sur le nom de la fct dans l'instruction du gestionnaire d'evt sinon elle va s'exécuter avant le clic*/
 var modifieInput=function(){
                 input.value="Essayez un autre mot"
                 input.style.backgroundColor="grey"
                 input.style.color="white"
                
                 };
 var supprimeModifInput=function(){
                 this.value=""
                 this.style.backgroundColor=""
                 this.style.color=""
 }
                 
/*On accroche un gestionnaire d'evt à icone et à input*/

 icone.addEventListener('click',modifieInput)
 input.addEventListener('click',supprimeModifInput)
 

