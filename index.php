<?php 
session_start();
$host="localhost";
$user="root";
$password="";
$db="traveleer";

$link = mysqli_connect($host,$user,$password,$db);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title >Traveler</title>
   
<link rel="icon" href="../Traveler/images/head_logo-removebg-preview.png">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../Traveler/css/style.css">


</head>
<body>

<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-hiking"></i> traveler. </a>

    <nav class="navbar">
        <div id="nav-close" class="fas fa-times"></div>
        <a href="#home">accueil</a>
        <a href="#about">a propos</a>
        <a href="#shop">produits</a>
        <a href="#packages">forfaits</a>
        <a href="#reviews">avis</a>
        
        
    </nav>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="../Traveler/View/Register.php" class="fas fa-shopping-cart" ></a>
        <div id="search-btn" class="fas fa-search"></div>
    </div>

</header>

<!-- header section ends -->

<!-- search form  -->

<div class="search-form">

    <div id="close-search" class="fas fa-times"></div>

    <form action="">
        <input type="search" name="" placeholder="recherchez.." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>
</div>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box" style="background: url('../Traveler/images/home-bg-1.jpg') no-repeat;">
                    <div class="content">
                        <span>N'arrêtez jamais</span>
                        <h3>D'explorer</h3>
                        <p>Une telle aventure se doit d’être bien préparée en amont pour limiter les mauvaises surprises. </p>
                        <a href="#packages" class="btn">Commencer</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box second" style="background: url('../Traveler/images/home-bg-2.jpg') no-repeat;">
                    <div class="content">
                        <span>rendre la tournée</span>
                        <h3>incroyable</h3>
                        <p>Vous aimeriez faire du camping toute l’année et vous recherchez un auvent idéal pour toutes les saisons ?</p>
                        <a href="#packages" class="btn">Commencer</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url('../Traveler/images/home-bg-3.jpg') no-repeat;">
                    <div class="content">
                        <span>explorer </span>
                        <h3>le nouveau monde ! </h3>
                        <p>Tout le monde fait du camping autour de vous mais vous n’avez jamais osé tenter l’expérience ? </p>
                        <a href="#packages" class="btn">Commencer</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- home section ends -->

<!-- category section starts  -->

<section class="category">

    <h1 class="heading">Idée Aventure !</h1>

    <div class="box-container">

        <div class="box">
            <img src="../Traveler/images/category-1.jpg" alt="">
            <h3>Saut à l'élastique</h3>
            <p>est une activité ludique de plein air qui consiste à se jeter dans le vide avec une corde élastique accrochée aux chevilles ou au torse, destinée à ralentir puis à stopper la chute. Le but recherché est de restituer.</p>
                </div>

        <div class="box">
            <img src="../Traveler/images/category-2.jpg" alt="">
            <h3>Tyroliennes</h3>
            <p>est un système de transport sur filin. Il s'agit d'un mode de déplacement utilisé pour la traversée en hauteur d'un obstacle dénivelé comme une douve ou autre cuvette naturelle ou artificielle..</p>
            
        </div>

        <div class="box">
            <img src="../Traveler/images/category-3.jpg" alt="">
            <h3>Canoë-kayak</h3>
            <p>est une activité physique de loisir ou sportive, pratiquée avec des embarcations propulsées à la pagaie, comme le canoë, le kayak, le raft, ou la pirogue. Cette activité est également désignée par « sports de pagaie ».</p>
                </div>

     

    </div>

</section>

<!-- category section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="../Traveler/images/about-img.jpg" alt="">
    </div>

    <div class="content">
        <h3>Expériences de plein air mémorables</h3>
        <p>À Saint-Sauveur, chez Chimo Refuges, on dort à poings fermés, perché dans un arbre, à l’abri dans le TeePee, dans la cabane de bûcheron, dans le Kube, ou encore dans le cottage.

            On regarde les étoiles, on oublie toutes ses obligations. On vous invite à vous souvenir du plaisir, de la nécessité de ne rien faire. Vous savez? Laisser passer le temps sans chercher à l’occuper?
            
            Fait intéressant : le propriétaire a créé chacun des refuges de ses mains, avec des matériaux récupérés et revalorisés.
            
            Pour se déposer quelque part, dans un lieu hors du monde, où ne rien faire est permis et encouragé!</p>
        
    </div>

</section>

<!-- about section ends -->

<!-- shop section starts  -->

<form method="POST" action="#">
<section class="shop" id="shop">

    <h1 class="heading">Produits populaires
    </h1>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="../Traveler/images/product-1.jpg" alt="">
                    <div class="icons">
                        <a href="../Traveler/View/Register.php" class="fas fa-shopping-cart"></a>
                         
                         
                    </div>
                </div>
                <div class="content">
                    <h3>Sac Camping</h3>
                    <div class="price"> 126.9 DT </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="../Traveler/images/product-2.jpg" alt="">
                    <div class="icons">
                        <a href="../Traveler/View/Register.php" class="fas fa-shopping-cart"></a>
                         
                         
                    </div>
                </div>
                <div class="content">
                    <h3>Couteau</h3>
                    <div class="price"> 29.9 DT </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="../Traveler/images/product-3.jpg" alt="">
                    <div class="icons">
                        <a href="../Traveler/View/Register.php" class="fas fa-shopping-cart"></a>
                         
                         
                    </div>
                </div>
                <div class="content">
                    <h3>Lunettes</h3>
                    <div class="price"> 120 DT </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="../Traveler/images/product-4.jpg" alt="">
                    <div class="icons">
                        <a href="../Traveler/View/Register.php" class="fas fa-shopping-cart"></a>
                         
                         
                    </div>
                </div>
                <div class="content">
                    <h3>Espadrille</h3>
                    <div class="price"> 159.9 DT</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

           
</section>
</form>
<!-- shop section ends -->

<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading">forfaits populaires </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="../Traveler/images/img-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Bni Mtir, Ain Drahem, Tunisia</h3>
                <p>Beni M'Tir ou Beni Metir est un village du Nord-Ouest de la Tunisie situé dans la région montagneuse de Kroumirie à quelques kilomètres d'Aïn Draham. La ville se trouve sur le territoire de la confédération de tribus berbères des Kroumirs</p>
                <div class="price">350 DT</div>
                <a href="../Traveler/View/Register.php" class="btn">explorer maintenant</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../Traveler/images/img-2.jpg" alt="">
            </div>
            <div class="content">
                <h3>El Mgasseb, Beja, Tunisia</h3>
                <p>El Mgasseb, un Coin magique attaché au gouvernorat de Bèja du nord-ouest de la Tunisie qui est située à une centaine de kilomètres de Tunis et à une cinquantaine de kilomètres de la frontière tuniso-algérienne, précisément à Nefza.</p>
                <div class="price">320 DT</div>
                <a href="../Traveler/View/Register.php" class="btn">explorer maintenant</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../Traveler/images/img-3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Kef Abed, Bizerte, Tunisia.</h3>
                <p>Le chalet est situé sur les hauteurs de Kef Abbed et entouré par la beauté des montagnes sauvages de Bizerte à seulement 40 km du centre-ville de Bizerte à 100 km de l'aéroport international tunis carthage et 74 km de la belle Tabarka</p>
                <div class="price">400 DT</div>
                <a href="../Traveler/View/Register.php" class="btn">explorer maintenant</a>
            </div>
        </div>


</section>

<!-- packages section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

    <h1 class="heading">Avis des clients </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <p class="text">une bonne organisation à l'écoute de nos attentes et de nos souhaits je recommande fortement !! </p>
                <div class="user">
                    <img src="../Traveler/images/pic-1.png" alt="">
                    <div class="info">
                        <h3>Bayezid Soussi</h3>
                        <span>designer</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p class="text">Traveler s’est complètement adapté à nos envies et nous a fait découvrir Ain drahem en ayant l’impression de vivre une aventure extraordinaire en dosant très bien la liberté dans nos choix, Nous ferons à nouveau des Voyages organisé par Traveler</p>
                <div class="user">
                    <img src="../Traveler/images/pic-2.png" alt="">
                    <div class="info">
                        <h3>sarra yahya </h3>
                        <span>coiffeuse</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p class="text">Si la perfection dans le monde de l'organisation du voyage existe, elle s'appelle traveler. Merci à vous pour ce voyage au Bizerte qui restera à jamais dans notre tête. Les guides, les visites... C'est simplement parfait. A très bientôt !</p>
                <div class="user">
                    <img src="../Traveler/images/pic-3.png" alt="">
                    <div class="info">
                        <h3>Alaeddine Cherif</h3>
                        <span>Docteur</span>
                    </div>
                </div>
            </div>

      
        </div>

    </div>

</section>

<!-- reviews section ends -->



<!-- newsletter section  -->

<section class="newsletter">

    <div class="content">
        <h1 class="heading">Abonnez-vous maintenant </h1>
        <p>pour plus d'offres et de voyages, rejoignez-nous et commencez votre aventure  !</p>
        <form action="">
            <input type="email" name="" placeholder="Entrer votre Email" id="" class="email">
            <input type="submit" value="Abonner" class="btn">
        </form>
    </div>

</section>


<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Liens rapides</h3>
            <a href="#home">accueil</a>
            <a href="#about">a Propos</a>
            <a href="#shop">produits</a>
            <a href="#packages">forfaits</a>
            <a href="#reviews">avis</a>
            <a href="../Traveler/View/register_trav.php">Connexion Worker</a>
            <a href="../Traveler/View/Login.php">Connexion admin</a>
        </div>

        

        <div class="box">
            <h3>Informations de contact</h3>
            <a href="#"> <i class="fas fa-phone"></i> +216 22001144 </a>
        
            <a href="#"> <i class="fas fa-envelope"></i> TIC.@Tek-up.tn </a>
            <a href="#"> <i class="fas fa-map"></i> TEK-UP </a>
        </div>

        <div class="box">
            <h3>Suivez-nous</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            
        </div>

    </div>

    <div class="credit">créé par<span> TIC </span> &copy; WEB 2024</div>

</section>

<!-- footer section ends -->



<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="../Traveler/js/script.js"></script>


</body>
</html>