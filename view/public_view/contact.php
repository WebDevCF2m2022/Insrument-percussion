<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet </title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/3010b1eaf1.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <script>
        function onSubmit(token) {
            document.querySelector("#contactForm").submit();
        }
    </script>
</head>
<?php
if(isset($_POST['submit']))
{
    print_r($_POST);  die();
}
?>
<body>

<!--header-->
<?php include 'include/header.inc.php' ?>
<?php include  'include/search.inc.php'?>








<!-- section contact -->

<section id="contact">
    <h1 class="section_title">Contact</h1>
    <div class="form_contact">
        <h3>Envoyer un message</h3>
        <form action="#" id="contactForm" method="post">
            <!-- STATUS MESSAGE -->

            <?php if(!empty($statusMsg)){ ?>
                <p class="status-msg
                <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
            <?php } ?>

            <input type="text" value="" name="nom" placeholder="Nom">
            <input type="email" value="" name="email" placeholder="Adresse Mail">
            <input type="text" value="" name="objet" placeholder="Objet">
            <textarea name="message" value="" id="" cols="30" rows="10" placeholder="Message"></textarea>
            <!-- <input type="submit" value="Envoyer"> -->

            <input type="hidden" name="submit_frm" value="1">
            <button
                class="g-recaptcha"
                data-sitekey="6LeaIZUlAAAAADmNnMlAY0sJmMuNarGdb-_3J18j"
                data-callback='onSubmit'
                data-action='submit'>Submit
            </button>
        </form>
    </div>
</section>

<!--footer-->
<?php include 'include/footer.inc.php' ?>








</body>
</html>

<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('6LeaIZUlAAAAADmNnMlAY0sJmMuNarGdb-_3J18j', {action: 'submit'}).then(
            function(token) {
                // Add your logic to submit to your backend server here.
                var reponse = document.querySelector("#token_generate");
                reponse.value = token;
            });
    });

</script>