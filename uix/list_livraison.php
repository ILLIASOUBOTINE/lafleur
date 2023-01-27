<?php
$arrVille = ['Lourmarin','Lauris', 'Puget','Cadenet','Bonnieux',];

?>

<div class="notrelivraison" id="notrelivraison">
    <div id="livraisonVilleFermer" class="pd24w600 itemdrop">
        <span>Notre livraison</span>
        <img src="imgs/close_circle_icon.svg" alt="">
    </div>
    <div class="itemdrop style_item_list">
        <input id="inputSearchVille" type="text" class="search_ville int20w400" placeholder="Ville" />
        <img class="search_icon" src="imgs/search_icon.svg" alt="" />
    </div>
    <?php foreach($arrVille as $ville):?>
    <p class="item_ville int20w400">
        <?=$ville?>
    </p>
    <?php endforeach?>
</div>