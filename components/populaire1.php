<?php
include './class/Carte.class.php';

$arr = array(
    array(
        "id"=>1,
        "title"=>"Title1",
        "prix"=>50,
        "urlPhoto"=>"imgs/rose_blanch.jpg",
        "dispo"=>"Ajouter",
    ),
    array(
        "id"=>2,
        "title"=>"Title2",
        "prix"=>50,
        "urlPhoto"=>"imgs/rose_rouge.jpg",
        "dispo"=>"Indisponible",
    ),  
    array(
        "id"=>3,
        "title"=>"Title3",
        "prix"=>50,
        "urlPhoto"=>"imgs/rose.jpg",
        "dispo"=>"Ajouter",
    ),  
    array(
        "id"=>4,
        "title"=>"Title4",
        "prix"=>50,
        "urlPhoto"=>"imgs/rose_blanch.jpg",
        "dispo"=>"Ajouter",
    ),

);
?>
<section class="populaire_section">
    <h2 class="pd40w700 marg20top">Le plus populaire</h2>
    <div class="populaire_carte">
        <?php foreach($arr as $carte){
            $newCarte = new Carte(
                $carte['id'],
                $carte['title'],
                $carte['prix'],
                $carte['urlPhoto'],
                $carte['dispo'],
            );
            echo $newCarte->createViewHtmlCarte();
        }
        ?>
    </div>
</section>