<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site photographe </title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!--Ceci est pour la barre de navigation-->
    <nav class="nav">
        <a href="index.php" class="logo">
            <h1 class="logoSite">Robert</h1>
        </a>

        <div class="navigation-menu" id="nav-menu">
            <ul class="liste">
                <li class="nav-liste"><a href="index.php" class="mon-lien active-link">Accueil</a></li>
                <li class="nav-liste"><a href="./projet.php" class="mon-lien">Projets</a></li>
                <li class="nav-liste"><a href="reservation.php" class="mon-lien">Reservation</a></li>
                <li class="nav-liste"><a href="apropos.php" class="mon-lien">A propos</a></li>
                <li class="nav-liste"><a href="./contact.php" class="mon-lien">Contact</a></li>
            </ul>
        </div>
    </nav>
    <header>
        <h1>Robert Photographe</h1>
        <h3>Nous vous proposons les meilleurs de nos services</h3>
        <button>
            <a href="reservation.php">Commandez</a>
        </button>
        <div class="clear"></div>
    </header>

    <!--Section 1 : partie qui contienne la liste de mes oeuvres-->
    <section class="main">
        <div class="container">
            <div class="card">
                <div class="left">
                    <h2>Photo avec amies</h2>
                    <p class="para">Parfois un peu de photo avec des amies nous aide beaucoups à serrez nos liens!</p>
                    <a href="image-amie.php" class="button-2">Voir plus</a>
                </div>

                <div class="right">
                    <img src="image/amie_1.jpg" alt="">
                </div>
            </div>

            <div class="card">
                <div class="left">
                    <h2>Photo en familles</h2>
                    <p class="para">Prenez des photos ensembles avec votre familles</p>
                    <a href="image-famille.php" class="button-2">Voir plus</a>
                </div>

                <div class="right">
                    <img src="image/night-1927265.jpg" alt="">
                </div>
            </div>

        </div>

    </section>

    <!--Cette section est pour le contact-->
    <section id="contact">
        <div class="contenir">
            <h2>Contactez-nous</h2>
            <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi accusantium ducimus numquam
                sunt fugiat delectus nulla placeat, laboriosam, consectetur rerum repellat nemo quas vero! Suscipit in
                aperiam eligendi quibusdam fugiat.</p>
            <form>
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" placeholder="Votre nom" required>

                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Votre email" required>

                <input type="submit" value="OK" class="button-1">
            </form>
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
            <!--Deuxieme div du footer (Contact)-->
            <div class="box">
                <h2 class="sous-titre">Contact</h2>
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
                <p class="foot-para"><a href="image-amie.php" class="lien-nk">
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