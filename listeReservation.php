
<?php 
require './config/database.php';
// Listes reservations
$liste_request = $connection->prepare("SELECT * FROM `reservation`");
$liste_request->setFetchMode(PDO::FETCH_OBJ);
$liste_request-> execute();
$liste_reservation = $liste_request->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="listeReservation.css">
    <title>Liste des reservations</title>
</head>
<body>
    
<section > 
    <h1 class="text-center">Liste des réservation</h1>
        <div class='container'>
           
        <table border >
            <thead class="bg-black">
                <tr >
                <th>Nom</td>
                <th>Email</td>
                <th>Message</td>
                <th>date début</td>
                <th>date fin</td>
            </tr>
        </thead>
        <?php foreach($liste_reservation as $res): ?>
            <tr>
            <td><?=$res->nom_client?></td>
            <td><?=$res->email_client?></td>
            <td><?=$res->message ?></td>
            <td><?=$res->date_debut?></td>
            <td><?=$res->date_fin?></td>
        </tr>
                <?php endforeach;  ?>
        </table>
        </div>
    </section>

</body>
</html>