const burgerMenu = document.querySelector('.burger_menu');
const dropMenu = document.querySelector('.drop_menu');
const itemdropMenu = document.querySelector('.itemdrop_menu');
const filtreProduit = document.querySelector('#filtreProduit');
const filtrePrix = document.querySelector('#filtrePrix');
const filtreFleur = document.querySelector('#filtreFleur');
const prix = document.querySelector('#prix');
console.dir(filtreProduit);

burgerMenu.addEventListener('click', (event)=>{
    dropMenu.classList.toggle('drop_menu_active');
    burgerMenu.children[0].classList.toggle('dhidden');
    burgerMenu.children[2].classList.toggle('dhidden');
    burgerMenu.children[1].classList.toggle('burger_ligne_active');
    burgerMenu.children[1].children[0].classList.toggle('burger_ligne_activem');
  
});

filtreProduit.addEventListener('click', (event)=>{
    document.querySelector('#itemFiltre').classList.toggle('dnone');
});

filtrePrix.addEventListener('click', (event)=>{
    document.querySelector('#itemPrix').classList.toggle('dnone');
});

prix.addEventListener('input', (event)=>{
    document.querySelector('.prix_affiche').textContent = prix.value;
});

filtreFleur.addEventListener('click', (event)=>{
    document.querySelector('#itemFleur').classList.toggle('dnone');
});





// itemdropMenuTitle.addEventListener('click', (event)=>{
//     console.log('ytyt');
//     itemdropMenuTitle.disabled = true;
//     let setInterval1;
//     index=0;
//     let allItem = document.querySelectorAll('.item_ville');
   
//         setInterval1 = setInterval(() => {
//             console.log('ytyt');
//             allItem[index].classList.toggle('dnone');
//             // allItem[index].classList.toggle('dposrel'); 
//             index++;
//             if (index === allItem.length ) {
//                  clearInterval(setInterval1);
//                  itemdropMenuTitle.disabled = false;
//             } 
           
//         }, 200);
// });