
<?php

/*
$item = $db->query('SELECT instruments FROM categorie ORDER BY id DESC');   // $db défini dans index
$item = $db->query('SELECT instruments FROM categorie WHERE instruments LIKE "%' .$g. '%" ORDER BY id DESC');

$item = $db->query('SELECT musiciens FROM categorie ORDER BY id DESC');   // $db défini dans index
$item = $db->query('SELECT musiciens FROM categorie WHERE musiciens LIKE "%' .$g. '%"  ORDER BY id DESC');

$item = $db->query('SELECT instruments FROM musiciens ORDER BY id DESC');   // $db défini dans index
$item = $db->query('SELECT instruments FROM musiciens WHERE instruments LIKE "%' .$g. '%"  ORDER BY id DESC');

$item = $db->query('SELECT musiciens FROM instruments ORDER BY id DESC');   // $db défini dans index 
$item = $db->query('SELECT musiciens FROM instruments WHERE musiciens LIKE "%' .$g. '%"  ORDER BY id DESC');
*/


if(isset($_GET['google']) AND !empty($_GET['google'])){
    $g = htmlspecialchars($_GET['google']);   /*$g pour google*/

    $i;
}

// Vérifiez si un mot clé a été soumis
if (isset($_GET['search'])) {
    // Récupérer l'entrée utilisateur
    $search = htmlspecialchars(strip_tags(trim($_GET['search'])), ENT_QUOTES);

    // Préparer la requête SQL
    $sql = "SELECT i.categorie_id,c.nom_categorie FROM instruments AS i JOIN categorie AS c ON i.categorie_id=c.id WHERE i.nom LIKE CONCAT('%', ?, '%')";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(1, $search);

    // Exécuter la requête et récupérer les résultats
    $stmt->execute();
    $result = $stmt->fetchAll();

    // Afficher les résultats
    foreach ($result as $row) {
        echo $row['nom_categorie'] . "\n";
        header('location: ./?page='.$row['nom_categorie']);
    }
}
?>

<?php

/*
<form method="GET" >
    <input type="search" name="google" placeholder="votre recherche:">
    <input type="submit" value="Valider">
</form>

<ul>
    <?php while($i = $item->fetch()){ ?>
        <li><?= $i['instruments'] ?> </li>
<?php }  ?>
</ul>
*/

?>