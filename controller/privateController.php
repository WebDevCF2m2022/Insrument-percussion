<?php
#var_dump($_SESSION);


if (isset($_GET['disconnect'])){
    if(deconnect()){
        header('Location: ./');
        die();
    }
}elseif(isset($_GET['update']) && ctype_digit($_GET['update'])){
   // echo "ID = ".$_GET['id'];
    $instru = updateInstrument($db, $_POST['nom'], $_POST['resume'], $_POST['description'], $_POST['son'], $_POST['url'], $_POST['id']);
    header('Location: ./');
    die();

}elseif(isset($_GET['add'])) {
    $addInstru = addInstrument($db, $_POST['nom'], $_POST['resume'], $_POST['description'], $_POST['son'], $_POST['url'], $_POST['categorie_id']);
    header('Location: ./');
    die();
}elseif(isset($_GET['delete']) && ctype_digit($_GET['delete'])) {
    $suppInstru = deleteInstrument($db, $_GET['delete']);
    if($suppInstru===1){
        header('Location: ./');
        die();
    }
}
else{

    // on récupére les données de la table instruments
    $instruments = getAllInstruments($db);
    include_once "../view/private_view/adminView.php";
}

