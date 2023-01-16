<?php
$arrVille = ['Lourmarin','Lauris', 'Puget','Cadenet','Bonnieux',];

?>

<div class="itemdrop_menu">
    <div id="notrelivraison" class="pd24w600 itemdrop">
        <span>Notre livraison</span>
        <img src="imgs/icons_triangle-down.svg" alt="">
    </div>
    <?php foreach($arrVille as $ville):?>
    <p class="item_ville itemdrop int20w400 dnone">
        <?=$ville?></p>
    <?php endforeach?>
</div>




<!-- <div class="itemdrop_menu">
    <div id="notrelivraison" class="pd24w600 itemdrop">
        <span>Notre livraison</span>
        <img src="imgs/icons_triangle-down.svg" alt="">
    </div> -->
<!-- <?php foreach($arrVille as $ville):?> -->
<!-- <p class="item_ville itemdrop int20w400 dnone"> -->
<?=$ville?></p>
<?php endforeach?>
</div>