<?php


// Récupérez la requête de recherche à partir du formulaire soumis


function searching(PDO $db, string $search_query){


// Interrogez les tables SQL pour récupérer les résultats qui correspondent à la requête de recherche
$sql = "SELECT * FROM categorie WHERE nom_categorie LIKE '%$search_query%'
        UNION SELECT * FROM instruments WHERE nom LIKE '%$search_query%'
        UNION SELECT * FROM musiciens WHERE nom_musicien LIKE '%$search_query%'";

$result = $db->query($sql);

// Afficher les résultats pour les users
if ($result->rowCount() > 0) {
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
          echo "Résultat: " . $row["nom_categorie"] . " - " . $row["nom"] . " - " . $row["nom_musicien"] . "<br>";
        }
      } else {
        echo "Aucun résultat trouvé pour la recherche: " . $search_query;
      }
    }
  

 /*   <?php

$item = $db->query('SELECT instruments FROM categorie ORDER BY id DESC');   
$item = $db->query('SELECT instruments FROM categorie WHERE instruments LIKE "%' .$g. '%" ORDER BY id DESC');

$item = $db->query('SELECT musiciens FROM categorie ORDER BY id DESC');   
$item = $db->query('SELECT musiciens FROM categorie WHERE musiciens LIKE "%' .$g. '%"  ORDER BY id DESC');

$item = $db->query('SELECT instruments FROM musiciens ORDER BY id DESC');  
$item = $db->query('SELECT instruments FROM musiciens WHERE instruments LIKE "%' .$g. '%"  ORDER BY id DESC');
/*$db
$item = $db->query('SELECT musiciens FROM instruments ORDER BY id DESC');    
$item = $db->query('SELECT musiciens FROM instruments WHERE musiciens LIKE "%' .$g. '%"  ORDER BY id DESC');



if(isset($_GET['google']) AND !empty($_GET['google'])){
    $g = htmlspecialchars($_GET['google']);   
    $i = $db->query('SELECT instruments FROM categorie WHERE instruments LIKE "%' .$g. '%" ORDER BY id DESC');
    if ($i ->rowCount()==0){
      $i = $db -> query('SELECT instruments FROM categorie WHERE CONCAT (instrument, artiste) LIKE "%'.$g.'%" ORDER BY id DESC');
    }
}

?>
*/