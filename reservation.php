
<?php 
session_start();
require './config/database.php';
 $erreur = null;
 $success = null;
 $dateObj = new DateTime();
 $dateCond = $dateObj->format('Y-m-d');
 $dateCond = trim($dateCond);
 $liste_request = $connection->prepare("SELECT * FROM `reservation` where `date_debut` = :dateCond");
 $liste_request ->bindParam(':dateCond',$dateCond);
 $liste_request->setFetchMode(PDO::FETCH_OBJ);
 $liste_request-> execute();
 $liste_reservation = $liste_request->fetchAll();
if (isset($_POST["name"])) {
        
    if($_POST["name"] && $_POST["email"] && $_POST["date_debut"] && $_POST["date_fin"]){
        $nom= $_POST["name"];
        $email = $_POST["email"];
        $telephone = $_POST["telephone"];
        $date_debut = $_POST["date_debut"];
        $date_fin = $_POST["date_fin"];
        $type = $_POST["type"];
        $message = $_POST["message"];

        $request = $connection->prepare("INSERT INTO `reservation`( `nom_client`, `email_client`,`tel`, `message`, `type`, `date_debut`, `date_fin`) VALUES (:nom,:email,:telephone,:message,:type,:date_debut,:date_fin)");
        $request->bindParam(':nom',$nom);
        $request->bindParam(':email',$email);
        $request->bindParam(':message',$message);
        $request->bindParam(':telephone',$telephone);
        $request->bindParam(':type',$type);
        $request->bindParam(':date_debut',$date_debut);
        $request->bindParam(':date_fin',$date_fin);
        
        $resultat = $request->execute();

        if($resultat>0){
            $success = "Information enregistrer";
        }else{
            $erreur = "L'enregistrement a échoué";
        }
        
    }else{
        $erreur = "Les champs nom, email, date et heure sont obligatoire!!!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equive="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reservation</title>

    <link rel="stylesheet" href="./reservation.css" />
   
  </head>

  <body>
     <!--Ceci est pour la barre de navigation-->
     <nav class="nav">
        <a href="index.php" class="logo">
            <h1 class="logoSite">Robert</h1>
        </a>

        <div class="navigation-menu" id="nav-menu">
            <ul class="liste">
                <li class="nav-liste"><a href="index.php" class="mon-lien ">Accueil</a></li>
                <li class="nav-liste"><a href="./projet.php" class="mon-lien">Projets</a></li>
                <li class="nav-liste"><a href="reservation.php" class="mon-lien active-link">Reservation</a></li>
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
          <li><span class="lien-page">Reservation</span></li>
      </ul>
  </section>


    <section id="banner">
      <h1>Votre Réservation</h1>
    </section>
    <section>
        <div class="alert">
        <?php 
        if($erreur!=null){
            echo "<p id='erreur'>".$erreur."</p>";
        }elseif ($success!=null) {
            echo "<p id='success'>".$success."</p>";
        }
        ?>
        </div>
      <h2>Prenons rendez-vous !</h2>
      <form action="./reservation.php" method="POST">
        <input type="text" placeholder="Name*" id="name" name="name" />
        <select id="number" name="type">
          <option value="anniversaire">Anniversaire</option>
          <option value="mariage">Mariage</option>
          <option value="ceremonie">Ceremonie</option>
        </select>
        <input type="text" placeholder="email*" id="email" name="email"/>
        <input type="text" placeholder="telephone" id="telephone" name="telephone"/>
        <textarea placeholder="Message" id="message" name="message"></textarea>
        <input type="date" name="date_debut"/>
        <input type="date" name="date_fin"/>
        <input type="submit" value="Envoyer" />
      </form>
    </section>
    <section class="listes_reservation">
        <h2>Réservation du jour</h2>
        <table id="clientReserve">
            <tr>
                <th>Date début</th>
                <th>Date fin</th>
            </tr>
            <?php foreach($liste_reservation as $res): ?>
            <tr>
            <td><?=$res->date_debut?></td>
            <td><?=$res->date_fin?></td>
        </tr>
                <?php endforeach;  ?>
        </table>
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
