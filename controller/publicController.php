<?php

if(isset($_GET['page'])){

    switch($_GET['page']){

        case 'contact':
          
            include "../view/public_view/contact.php";
            break;
        
        case 'Electrophone': 
        case 'Idiophone':
        case 'Membranophone':
            $elec = getInstrumentsByCategId($db,$_GET['page']);
            include "../view/public_view/electrophone.php";
            break;
        case 'login':
            if(isset($_POST['usermail'])){
                $user = verifUser($db,$_POST['usermail'],$_POST['userpassword']);
                if($user) {
                    header('location: ./');
                    die();
                }
            }
            include "../view/public_view/formulaireView.php";
            break;
        case 'register':
            include "../view/public_view/register_form.php";
            break;      

    default:
    $instru = donneInstru($db);
        include_once "../view/public_view/homePage.php";
        break;
    }
}else{
    $instru = donneInstru($db);
    include_once "../view/public_view/homePage.php";

}
//switch pour all

