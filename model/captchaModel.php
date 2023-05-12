<?php

$secretKey = '6LeaIZUlAAAAAKQSWcYuxQQ7KTzJOgeIitbem1Ig';

$emailAdmin = 'tom.bik@hotmail.be';

$postData = $valErr = $statusMsg = '';
$status = 'error';

if(isset($_POST['submit_frm'])) {
    
    $postData = $_POST;
    $name = htmlspecialchars(strip_tags(trim($_POST['nom'])));
    $email = htmlspecialchars(strip_tags(trim($_POST['email'])));
    $objet = htmlspecialchars(strip_tags(trim($_POST['objet'])));
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])));

    if(empty($name)){
        $valErr .= 'Veuillez entrez votre nom.</br>';
    }

    if(empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $valErr .= 'Veuillez entrez une adresse e-mail valide.</br>';
    }

    if(empty($message)){
        $valErr .= 'Veuillez entrez un message.</br>';
    }   
    
    if(empty($objet)){
        $valErr .= 'Veuillez entrez un objet.</br>';
    }
    
    if(empty($valErr)){

        if(isset($_POST['g-recaptcha']) && !empty($_POST['g-recaptcha'])){

            $api_url = 'https://www.google.com/recaptcha/api/siteverify';
            $resq_data = array(
                'secret' => $secretKey,
                'response' => $_POST['g-recaptcha'],
                'remoteip' => $_SERVER['REMOTE_ADDR']
            );

            $curlConfig = array(
                CURLOPT_URL => $api_url,
                CURLOPT_POST => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POSTFIELDS => $resq_data
            );

            $ch = curl_init();
            curl_setopt_array($ch, $curlConfig);
            $response = curl_exec($ch);
            curl_close($ch);

            $responseData = json_decode($response);

            if($responseData->success) {

                // Envoie de mail à l'admin du site
                $to = $emailAdmin;
                $sujet = 'Nouvelle demande de contact';
                $htmlContent = "
                    <h4>Détails de la demande de contact</h4>
                    <p><b>Nom: </b>".$name."</p>
                    <p><b>Email: </b>".$email."</p>
                    <p><b>Sujet: </b>".$objet."</p>
                    <p><b>Message: </b>".$message."</p>
                ";

                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                $headers .= 'From:'.$name.' <'.$email.'>' . "\r\n";

                mail($to, $sujet, $htmlContent, $headers);

                $status = 'success';
                $statusMsg = 'Merci votre demande de contact à bien été envoyée';
                $postData = '';


            }else{
                $statusMsg = 'La vérification reCAPTCHA à échoué, veuillez réessayer.';
            }
        }else{
            $statusMsg = 'Quelque chose à échoué, veuillez réessayer';
        }
    }else{
        $valErr = !empty($valErr)?'<br/>'.trim($valErr, '<br/>'):'';
        $statusMsg = 'Merci de remplir tous les champs obligatoires' .$valErr;
    }
}
?>