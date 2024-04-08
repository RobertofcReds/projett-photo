<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link rel="stylesheet" href="./projet.css">
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <!--Pour la barre de navigation-->
    <nav class="nav">
        <a href="index.php" class="logo">
            <h1 class="logoSite">Robert</h1>
        </a>

        <div class="navigation-menu" id="nav-menu">
            <ul class="liste">
                <li class="nav-liste"><a href="index.php" class="mon-lien">Accueil</a></li>
                <li class="nav-liste"><a href="./projet.php" class="mon-lien active-link">Projets</a></li>
                <li class="nav-liste"><a href="reservation.php" class="mon-lien">Reservation</a></li>
                <li class="nav-liste"><a href="apropos.php" class="mon-lien">A propos</a></li>
                <li class="nav-liste"><a href="./contact.php" class="mon-lien">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!--Lien de la page-->
    <section class="lien">
        <ul class="list-page-link container">
            <li><a href="index.php" class="page_link linkd">Accueil</a></li>
            <li><span class="lien-page">/</span></li>
            <li><span class="lien-page">Projets</span></li>
        </ul>
    </section>


    <!--Profile section-->
    <section id="profile">
        <div class="section__pic-container">
            <img src="image/profile-pic.png" alt="my profile">
        </div>
        <div class="section__text">
            <p class="section__text__p1">Hello, i'm </p>
            <h1 class="title">Roberto Tilahizafy</h1>
            <p class="section__text__p2">Photographe</p>

            <div class="btn-container">
                <button class="btn btn-color2" onclick=" window.open('image/CV STAGE.pdf')">
                    Download CV
                </button>
                <button class="btn btn-color1">
                    <a href="contact.php" class="contact-lien">Contact Info</a>
                </button>

            </div>
            <div id="socials-container">
                <img src="image/linkedin.png" alt="My linkedin profile" class="icon" onclick="location.href= 'https://linkedin.com'">

                <img src="image/github.png" alt="My github profile" class="icon" onclick="location.href= 'https://github.com'">
            </div>
        </div>
    </section>

    <!--A propos -->
    <section class="about">
        <h1 class="heading">Qui sommes-nous ?</h1>

        <div class="about-div container">
            <div class="image-about">
                <img src="image/about.jpg" class="image-nk">
            </div>

            <div class="content">
                <h3 class="title-nk">Robert Photographe</h3>
                <p class="para-about">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mauris dolor,
                    gravida a varius blandit, auctor eget purus. Phasellus scelerisque sapien sit amet mauris laoreet,
                    eget scelerisque nunc cursus. Duis ultricies malesuada leo vel aliquet. Curabitur rutrum porta dui
                    eget mollis. Nullam lacinia dictum auctor.</p>
                <p class="para-about">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                    himenaeos. Orci varius natoque penatibus et magnis dis parturient montes.</p>

                <div class="btn-nk">
                    <a href="apropos.php">Lire plus</a>
                </div>
            </div>



        </div>

    </section>

    <!--Mes projets-->
    <section id="projet">
        <h1 class="titre">Projets</h1>
        <div class="experience-details-container">
            <div class="about-containers container">

                <!-- Projet1: photos avec des amies -->
                <div class="details-container color-container">

                    <div class="article-container">
                        <img src="image/amie_1.jpg" alt="Project 1" class="project-img image1" />
                    </div>

                    <h2 class="experience-sub-title project-title">Photo avec des amies</h2>
                    <div class="btn-container">
                        <a href="image-amie.php" class="bouton">Voir plus</a>
                    </div>
                </div>


                <!--Projet 2-->
                <div class="details-container color-container">
                    <div class="article-container">
                        <img src="image/nouveau-ne-Eyden-17-1024x682.jpg" alt="Project 2" class="project-img image1" />
                    </div>
                    <h2 class="experience-sub-title project-title">Photo en familles</h2>
                    <div class="btn-container">
                        <div class="btn-container">
                            <a href="image-famille.php" class="bouton">Voir plus</a>
                        </div>
                    </div>
                </div>
            </div>
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

            <!-- id="contact" -->

                <h2 class="sous-titre" >Contact</h2>
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