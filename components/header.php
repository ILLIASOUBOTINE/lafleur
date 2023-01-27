<header>
    <nav class="nav_left">
        <a class="pd24w600 marg20" href="#">Blog</a>
        <a class="pd24w600 marg20" href="accueil.php">Accueil</a>
        <a class="pd24w600 marg20" href="contact.php">Contact</a>
    </nav>
    <nav class="nav_left_phone">
        <div class="burger_menu cursorscall20">
            <div class="burger_ligne"></div>
            <div class="burger_ligne">
                <div class="burger_ligne"></div>
            </div>
            <div class="burger_ligne"></div>
        </div>
        <a href="#"><img class="cursorscall20" src="imgs/account_icon.svg" alt="account"></a>
    </nav>

    <nav id="idDropMenue" class="drop_menu">

        <a class="pd24w600 itemdrop" href="accueil.php">Accueil</a>
        <a class="pd24w600 itemdrop" href="contact.php">Contact</a>
        <a class="pd24w600 itemdrop" href="#">Blog</a>
        <div id="filtreProduit" class="pd24w600 itemdrop filtreProduit">
            <span>Filtre produit</span>
            <img src="imgs/icons_triangle-down.svg" alt="">
        </div>
        <?php include 'uix/list_filtre.php'?>

    </nav>
    <a class="logo cursorscall20" href="accueil.php"><img src="imgs/logo.png" alt="accueil"></a>
    <nav class="nav_right">
        <a class="marg20 idAccount" href="#"><img class="cursorscall20" src="imgs/account_icon.svg" alt="account"></a>
        <img class="marg20 cursorscall20 idlivraison" src="imgs/delivery_icon.svg" alt="livraison">
        <img class="marg20 cursorscall20" src="imgs/basket_icon.svg" alt="panier">
    </nav>
    <!-- <nav class="nav_right_phone">
        <img class="marg20 idlivraison" src="imgs/delivery_icon.svg" alt="livraison">
       
    <img src="imgs/basket_icon.svg" alt="panier">
    </nav> -->

    <?php include 'uix/list_livraison.php'?>
</header>