

const burgerMenu = document.querySelector('.burger_menu');
const dropMenu = document.querySelector('.drop_menu');
const itemdropMenu = document.querySelector('.itemdrop_menu');
// const listFiltre = document.querySelector('.listFiltre');
const idLivraison = document.querySelector('.idlivraison');
const inputSearchVille = document.querySelector('#inputSearchVille');
const listFiltres = document.querySelectorAll('.listFiltre');
const filtreProduits = document.querySelectorAll('.filtreProduit');





console.dir(listFiltres);
//              filtre produit pour gerer duxiem menu
if (window.innerWidth > 841) {
    document.querySelectorAll('.listFiltre')[0].remove();
    document.querySelectorAll('.filtreProduit')[0].remove();
    // filtre();
    console.dir(document.querySelectorAll('.listFiltre'));
} else {
//    filtre();
}



//  burger menue  

burgerMenu.addEventListener('click', (event)=>{
    dropMenu.classList.toggle('drop_menu_active');
    burgerMenu.children[0].classList.toggle('dhidden');
    burgerMenu.children[2].classList.toggle('dhidden');
    burgerMenu.children[1].classList.toggle('burger_ligne_active');
    burgerMenu.children[1].children[0].classList.toggle('burger_ligne_activem');

    //for close filtre produit if it is not close
    document.querySelector('#itemFiltre').classList.add('dnone');
  
});

//  list filtre 


window.addEventListener('resize', function() {
  
    if (window.innerWidth > 841) {
        if (document.querySelectorAll('.listFiltre').length === 2) {
            document.querySelectorAll('.listFiltre')[0].remove();
            document.querySelectorAll('.filtreProduit')[0].remove();
            // document.querySelector('.itemFiltre').classList.add('dnone');
            // filtre();
            // console.dir(document.querySelectorAll('.listFiltre'));
        }        
    } 
    // if (window.innerWidth > 841) {
    //     if (document.querySelectorAll('.listFiltre').length === 2 ) {
    //         let valFiltProd = filtreProduits[0].cloneNode(true);
    //         document.querySelector('#idDropMenue').append(valFiltProd);
    //         let valListFilt = listFiltres[0].cloneNode(true);
    //         document.querySelector('#idDropMenue').append(valListFilt);
    //         filtre();
    //         console.dir(document.querySelectorAll('.listFiltre'));
    //     }
    // } 
   if(window.innerWidth <= 840) {
        if (document.querySelectorAll('.listFiltre').length === 1 ) {
            let valFiltProd = filtreProduits[0].cloneNode(true);
            document.querySelector('#idDropMenue').append(valFiltProd);
            let valListFilt = listFiltres[0].cloneNode(true);
            document.querySelector('#idDropMenue').append(valListFilt);
            // document.querySelector('.itemFiltre').classList.add('dnone');
            // filtre();
            // console.dir(document.querySelectorAll('.listFiltre'));
        }
    }
    console.dir(document.querySelectorAll('.listFiltre'));
    console.dir(document.querySelectorAll('.filtreProduit'));

});


// function filtre(){
    // burgerMenu.addEventListener('click', (event)=>{
    //   //for close filtre produit if it is not close
    //     document.querySelector('#itemFiltre').classList.add('dnone');
    // });

    document.querySelector('.filtreProduit').addEventListener('click', (event)=>{
        console.log('tyt');
        document.querySelector('.itemFiltre').classList.toggle('dnone');
        document.querySelector('.filtreProduit>img').classList.toggle('icon_triangle');
    });
    
    document.querySelector('#filtrePrix').addEventListener('click', (event)=>{
        document.querySelector('#itemPrix').classList.toggle('dnone');
        document.querySelector('#filtrePrix>img').classList.toggle('icon_triangle');
    });
    
    document.querySelector('#filtreCategorie').addEventListener('click', (event)=>{
        document.querySelector('#itemCategorie').classList.toggle('dnone');
        document.querySelector('#filtreCategorie>img').classList.toggle('icon_triangle');
    });
    
    document.querySelector('#filtreCouleur').addEventListener('click', (event)=>{
        document.querySelector('#itemCouleur').classList.toggle('dnone');
        document.querySelector('#filtreCouleur>img').classList.toggle('icon_triangle');
    });
    
    document.querySelector('#prix').addEventListener('input', (event)=>{
        document.querySelector('.prix_affiche').textContent = prix.value;
    });
    
    document.querySelector('#filtreFleur').addEventListener('click', (event)=>{
        document.querySelector('#filtreFleur>img').classList.toggle('icon_triangle');
        document.querySelector('#itemFleur').classList.toggle('dnone');
    });
// }

// document.querySelector('.filtreProduit').addEventListener('click', (event)=>{
//     console.log('tyt');
//     document.querySelector('.itemFiltre').classList.toggle('dnone');
//     document.querySelector('.filtreProduit>img').classList.toggle('icon_triangle');
// });

//   for notre Livraison move and remove block

idLivraison.addEventListener('click', (event)=>{
    document.querySelector('#notrelivraison').classList.toggle('notrelivraison_active');
});

document.querySelector('#livraisonVilleFermer').addEventListener('click', (event)=>{
    document.querySelector('#notrelivraison').classList.toggle('notrelivraison_active');
});

//  pour chercher les villes des livraison

inputSearchVille.addEventListener("input", (e) => {
    let str = e.target.value;
    let villes = document.querySelectorAll('.item_ville');
    for (let ville of villes) {
        if (ville.textContent.toLowerCase().match(str.toLowerCase())){
            ville.classList.remove("dnone");
            // ville.style.display = 'flex';
        } else {
            ville.classList.add("dnone");
            // ville.style.display = 'none';
        }
    }
});

