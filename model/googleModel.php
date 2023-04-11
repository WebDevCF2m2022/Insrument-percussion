<?php

// Récupérez la requête de recherche à partir du formulaire soumis
$search_query = $_POST['search'];

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