<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact </title>


    <link rel="stylesheet" href="./contact.css">



</head>

<body>
    <!--Ceci est pour la barre de navigation-->
    <nav class="nav">
        <a href="index.php" class="logo">
            <h1 class="logoSite">Robert</h1>
        </a>

        <div class="navigation-menu" id="nav-menu">
            <ul class="liste">
                <li class="nav-liste"><a href="./index.php" class="mon-lien ">Accueil</a></li>
                <li class="nav-liste"><a href="./projet.php" class="mon-lien">Projets</a></li>
                <li class="nav-liste"><a href="./reservation.php" class="mon-lien">Reservation</a></li>
                <li class="nav-liste"><a href="./apropos.php" class="mon-lien">A propos</a></li>
                <li class="nav-liste"><a href="./contact.php" class="mon-lien active-link">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!--Lien de la page-->
    <section class="lien">
        <ul class="list-page-link container">
            <li><a href="index.php" class="page_link linkd">Accueil</a></li>
            <li><span class="lien-page">/</span></li>
            <li><span class="lien-page">Contact</span></li>
        </ul>
    </section>

    <section class="contact1">
        <div>
            <h1>
                Contact
            </h1>
        </div>
    </section>



    <!--C'est la partie footer de notre page-->
    <footer>
        <div class="box-cont container">
            <!--Premiere div du footer-->
            <div class="box">
                <h3 class="sous-titre">Suivez-nous</h3>
                <div class="share">
                    <!--Lien facebook-->
                    <a href="#">
                        <img src="image/icon-facebook.svg" alt="" class="icon">
                    </a>
                    <!--Lien Instagram-->
                    <a href="#">
                        <img src="image/icon-instagram.svg" alt="" class="icon">
                    </a>
                    <!--Lien github-->
                    <a href="#">
                        <img src="image/github.png" alt="" class="icon">
                    </a>
                </div>
            </div>
            <!-- ========================Deuxieme div du footer (Contact)=========== -->
            <div class="box">
                <h2 class="sous-titre" id="contact">Contact</h2>
                <p class="foot-para"><span>Adresse :</span> Lazaret Nord 126LB</p>
                <p class="foot-para"><span>Tel :</span> +26132 83 566 23</p>
                <p class="foot-para"><span>Email :</span> judicaelroberto@gmail.com</p>
            </div>
            <!--Troisième div du footer (Service)-->
            <div class="box">
                <h2 class="sous-titre">Service</h2>
                <p class="foot-para"><a href="" class="lien-nk">
                        Photo en familles?
                    </a>
                </p>
                <p class="foot-para"><a href="image-amie.html" class="lien-nk">
                        Photo avec des amies?
                    </a>
                </p>


            </div>
        </div>

        <!--La partie copyright-->
        <div class="copyright-foot container">
            <p class="copyright">
                Copyright &copy;2024 by Roberto| All rights reserved
            </p>
        </div>
    </footer>
</body>

</html>