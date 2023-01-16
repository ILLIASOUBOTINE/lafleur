<?php
$arr = array(array("title"=>"Title1","prix"=>"50$"),
array("title"=>"Title2","prix"=>"51$"),
array("title"=>"Title3","prix"=>"52$"),
array("title"=>"Title4","prix"=>"53$"),);
?>
<section class="populaire_section">
    <h2 class="pd40w700 marg20top">Le plus populaire</h2>
    <div class="populaire_carte">
        <?php foreach($arr as $value):?>
        <div class="carte marg5">
            <a class="img_carte" href="#"><img src="imgs/rose.jpg" title="details" alt=" details"></a>
            <p class="title_carte pd24w600">
                <?=$value['title'] ?>
            </p>
            <div class="footer_carte">
                <span class="prix_carte int20w400"><?=$value['prix'] ?></span>
                <button class="btn_ajouter int20w400" title="Ajouter">Ajouter</button>
            </div>

        </div>
        <?php endforeach?>
    </div>

</section>