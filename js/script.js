'use strict'


/*************************************************************************************************/
/* ****************************************** DONNEES ****************************************** */
/*************************************************************************************************/
// Variable (tableau) qui contient toutes les <figure>
const figure = document.querySelectorAll('.imageSlider');
// Variable qui continent le chevron droit
const flecheDroite = document.querySelector('.fas.fa-chevron-right');
// Variable qui contient le chevron gauche
const flecheGauche = document.querySelector('.fas.fa-chevron-left');
let i = 0;


/*************************************************************************************************/
/* ***************************************** FONCTIONS ******************************************/
/*************************************************************************************************/
// Fonction Next

function next() {
  console.log(i);
  figure[i].classList.remove('active');
  i++;
  if (i >= figure.length) {
    i = 0;
  }
  figure[i].classList.add('active');
}

// Fonction Preview

function preview() {
  console.log(i);

  figure[i].classList.remove('active');
  i--;
  if (i < 0) {
    i = figure.length - 1;
  }
  figure[i].classList.add('active');
}

// Fonction pour les touches

function onKeyDown(e) {
  switch (e.keyCode) {
    case 37:
      preview();
      break;
    case 39:
      next();
      break;
  }
}

/*************************************************************************************************/
/* ************************************** CODE PRINCIPAL *************************************** */
/*************************************************************************************************/

// évènement pour ajouter la classe 'active' a la figure
//boucle pour attribuer l'evt à toutes les case de la variable figure
for (let j = 0; j < figure.length; j++) {
  flecheDroite.addEventListener('click', next);
  flecheGauche.addEventListener('click', preview);
}
// Evenement (fonction 'onKeyDown' sur les touches)
document.addEventListener('keydown', onKeyDown);


/************************************************************************
 **********************************************************************/
/**********************************************TEST ********************/
console.log(document.getElementsByTagName('figure').length);
console.log(figure);


function displayNav() {
  hamburger.style.display = 'none';
  document.getElementById("menuToggle").style.display = 'block';
}

function hideNav() {
  document.getElementById("menuToggle").style.display = 'none';
  hamburger.style.display = 'block';
}
let hamburger = document.getElementById("tog-bars");
hamburger.addEventListener('click', displayNav);
let closebtn = document.getElementById("tog-times");
closebtn.addEventListener('click', hideNav);