<?php
// Connexion à la base de données
$servername = "localhost";
$username = "nom_utilisateur";
$password = "mot_de_passe";
$dbname = "nom_de_la_base_de_donnees";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifiez la connexion
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Récupérez la requête de recherche à partir du formulaire soumis
$search_query = $_POST['search'];

// Interrogez les tables SQL pour récupérer les résultats qui correspondent à la requête de recherche
$sql = "SELECT * FROM table1 WHERE column1 LIKE '%$search_query%'
        UNION SELECT * FROM table2 WHERE column2 LIKE '%$search_query%'
        UNION SELECT * FROM table3 WHERE column3 LIKE '%$search_query%'";

$result = $conn->query($sql);

// Afficher les résultats dans une vue conviviale pour les utilisateurs
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Résultat: " . $row["column1"] . " - " . $row["column2"] . " - " . $row["column3"] . "<br>";
  }
} else {
  echo "Aucun résultat trouvé pour la recherche: " . $search_query;
}

// Fermer la connexion à la base de données
$conn->close();
?>