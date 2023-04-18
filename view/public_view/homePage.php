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
    <script defer  src="js/captcha.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <script>
        function onSubmit(token) {
            document.querySelector("#contactForm").submit();
        }
    </script>
</head>
<body>
    
    <!--header-->
        <?php include 'include/header.inc.php' ?>

    
    
    <!-- section Accueil -->
    
     
    <section id="home">
        <div class="left">

            <h1>Les <span>instruments</span> à percussion</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit doloremque earum, totam laudantium dolor voluptatum fugiat. Odio doloribus nostrum harum corporis. Natus omnis deleniti reiciendis illum maxime necessitatibus accusantium esse.</p>
            
        </div>
        <div class="images1">
            <img src="img/set-realistic-drums-metal-cymbals-260nw-2128767320.png" class="shape">
        </div>
    </section>


    <section id="cars">
        <h1 class="section_title">Nos Instruments</h1>
        <div class="images">
            <ul>
<?php
//var_dump($instru);
foreach ($instru as $key => $value): 
    /*0echo $value['nom'];
    echo $value['resume'];
    echo $value['url'];
    echo $value['description'];
    echo $value['son'];
    echo $value['img_url'];
    */
    //affichez des images liées à chaque instrument avec le nom de l'instrument
?>

    <!-- section vehicule -->

    
                <li class="car">
                   <div>
                        <a href="<?=$value['img_url']?>" data-toggle="lightbox" data-gallery="example-gallery">
                            
                            <img src="<?=$value['img_url']?>" alt="" width="150px">
                        </a>                       
                   </div>
                   <div class="btn_main"><button class="bout"><?=$value['nom'];?></button>
                  </div>
                </li>
      
<?php endforeach; ?>
            </ul>
        </div>
        <div class="main"></div>
    </section>
    <!-- section contact -->
    
    <section id="contact">
        <h1 class="section_title">Contact</h1>
        <div class="form_contact">
            <h3>Envoyer un message</h3>
            <form action="#" id="contactForm" method="post">
                <!-- STATUS MESSAGE -->
                
                <?php if(!empty($statusMsg)){ ?>
                    <p class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
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
        <?php

?>
    </section>
 
    <!--footer-->
    <?php include 'include/footer.inc.php' ?>
   

    <script>
        //menu responsive code JS

        var menu_toggle = document.querySelector('.menu_toggle');
        var menu = document.querySelector('.menu');
        var menu_toggle_span = document.querySelector('.menu_toggle span');

        menu_toggle.onclick = function(){
            menu_toggle.classList.toggle('active');
            menu_toggle_span.classList.toggle('active');
            menu.classList.toggle('responsive') ;
        }

    </script>

<script>
    let body = document.querySelector("body");
    let main = document.querySelector(".main");
    body.addEventListener("click", function (e) {
      if (e.target.classList[0] == "airimage") {
        main.classList.add("main2");
        main.innerHTML = `<img class="boximage" src="${e.target.dataset.url}" alt="one"  />; <i class="fa-solid fa-xmark close"></i>`;
      } else {
        main.classList.remove("main2");
        main.innerHTML = "";
      }
    });
</script>


    
    
</body>
</html>