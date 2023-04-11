<?php

if (isset ($_POST['search'])){
    $search_query = $_POST['search'];
    searching($db, $search_query);
}

if(isset($_GET['page'])){

    switch($_GET['page']){
        
        case 'electrophone': 
            include "../view/public_view/electrophone.php";
            break;
        
        case 'idiophone':
            include "../view/public_view/idiophone.php";
            break;
        
        case 'membranophone':
            include "../view/public_view/membranophone.php";
            break;

        case 'contact':
            include "../view/public_view/contact.php";
            break;

    default:
        include_once "../view/public_view/homePage.php";
        break;
    }
}else{
    include_once "../view/public_view/homePage.php";
}