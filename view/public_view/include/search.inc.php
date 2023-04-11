<?php

// Afficher les résultats pour les users
if ($result->rowCount() > 0) {
  while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "Résultat: " . $row["nom_categorie"] . " - " . $row["nom"] . " - " . $row["nom_musicien"] . "<br>";
  }
} else {
  echo "Aucun résultat trouvé pour la recherche: " . $search_query;
}

?>


<form method="POST" action="rechercher.php">
    <input type="text" name="search" placeholder="Recherche...">
    <button type="submit">Rechercher</button>
</form>