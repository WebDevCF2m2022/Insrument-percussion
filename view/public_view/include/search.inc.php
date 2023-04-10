<?php
/*// Connexion à la base de données
$servername = "localhost";
$username = "nom_utilisateur";
$password = "mot_de_passe";
$dbname = "nom_de_la_base_de_donnees";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifiez la connexion
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}*/
$db = new PDO(
    DB_TYPE.':host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME.';charset='.DB_CHARSET,
    DB_USER,
    DB_PWD
);


$conn=$db;
// Récupérez la requête de recherche à partir du formulaire soumis
$search_query = $_GET['search'];

// Interrogez les tables SQL pour récupérer les résultats qui correspondent à la requête de recherche
$sql = "SELECT * FROM categorie WHERE nom_categorie LIKE '%$search_query%'
        UNION SELECT * FROM instruments WHERE nom LIKE '%$search_query%'
        UNION SELECT * FROM musiciens WHERE nom_musicien LIKE '%$search_query%'";

$result = $conn->query($sql);

// Afficher les résultats pour les users
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Résultat: " . $row["nom_categorie"] . " - " . $row["nom"] . " - " . $row["nom_musicien"] . "<br>";
  }
} else {
  echo "Aucun résultat trouvé pour la recherche: " . $search_query;
}

// Fermer la connexion à la base de données
$conn->close();
?>