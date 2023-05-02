<?php
//requete sql pour récupérer données users dans la table users
function donneUser($db){
    $retour = $db->query('SELECT * FROM `users`');
    $data =  $retour->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
//requete sql pour verifier si l'utilisateur existe dans la table users
function verifUser($db, $email, $password){
    $retour = $db->prepare('SELECT * FROM `users` WHERE `lemail` = :lemail');
    $retour->bindValue(':lemail', $email, PDO::PARAM_STR);
    try {
        $retour->execute();
    }catch (Exception $e){
        die ($e->getMessage());
    }
    if ($retour->rowCount() === 1){
        //on vas verifier si le mdp est bon avec password_verify
        $data =  $retour->fetch(PDO::FETCH_ASSOC);
        if (password_verify($password, $data['motdepasse'])){
            $_SESSION=$data;
            $_SESSION['idsession']=session_id();
            return true;
    }else{
        return false;
    }
    }



}
