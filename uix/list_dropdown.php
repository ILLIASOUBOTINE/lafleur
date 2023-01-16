<?php
$arrVille = ['Lourmarin','Lauris', 'Puget','Cadenet','Bonnieux',];

?>

<div class="itemdrop_menu">
    <div id="filtreProduit" class="pd24w600 itemdrop">
        <span>Filtre produit</span>
        <img src="imgs/icons_triangle-down.svg" alt="">
    </div>
    <div class="itemdrop_menu dnone" id="itemFiltre">
        <div class="filtre_prix itemdrop_menu">
            <div id="filtrePrix" class="pd24w600 itemdrop1">
                <span>Prix</span>
                <img src="imgs/icons_triangle-down.svg" alt="">
            </div>
            <div class="itemPrix dnone" id="itemPrix">
                <input type="range" id="prix" value="30" step="1" max="150" min="0">
                <span class="prix_affiche int20w400">30</span>
                <span class="int20w400">$</span>
                </input>
            </div>
        </div>
        <div class="filtre_fleur itemdrop_menu">
            <div id="filtreFleur" class="pd24w600 itemdrop1">
                <span>Fleur</span>
                <img src="imgs/icons_triangle-down.svg" alt="">
            </div>
            <div class="itemdrop_menu dnone" id="itemFleur">
                <label class="itemdrop2 int20w400" for="fleur">
                    <input type="checkbox" id="fleur" name="fleur" class="marg20">
                    fleur
                </label>
                <label class="itemdrop2 int20w400" for="fleur1">
                    <input type="checkbox" id="fleur1" name="fleur" class="marg20">
                    fleur
                </label>



            </div>
        </div>
        <div class="filtre_categorie itemdrop_menu">
            <div id="filtreCategorie" class="pd24w600 itemdrop1">
                <span>Categorie</span>
                <img src="imgs/icons_triangle-down.svg" alt="">
            </div>
        </div>
    </div>
    <div class="filtre_couleur"></div>
</div>