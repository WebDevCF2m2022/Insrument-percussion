<?php
$db = new PDO(    /*$db défini dans index */
    DB_TYPE.':host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME.';charset='.DB_CHARSET,
    DB_USER,
    DB_PWD
);


$item = $db->query('SELECT instruments FROM categorie ORDER BY id DESC');   /*$db défini dans index */



?>


<form method="GET" >
    <input type="search" name="google" placeholder="votre recherche:">
    <input type="submit" value="Valider">
</form>

<ul>
    <?php while($i = $item->fetch()){ ?>    <!--pour avoir une boucle qui va récupérer les infos de ma db et les mettre dans une liste-->
        <li><?= $i['instruments'] ?> </li>
<?php }  ?>
</ul>
