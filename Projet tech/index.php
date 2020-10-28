<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Eilco - Accueil</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="img/logoo.png" />
  <style type="text/css">
  *{box-sizing : border-box}

img{max-width:100%}

.contenu_carou_auto{

margin:2rem auto;
width:420px;
height:200px;
perspective:8000px.
  
  }
    
.caroussel-image{
  
animation:rotation 24s infinite alternate linear; 
transform-style:preserve-3d;
position:relative;  

}

.caroussel-image img{
  
position: absolute;
top:0;
left: 0;
  
  
  }


    
.caroussel-image img{
  
filter:drop-shadow(0 12px 5px hsla(0,0%,0%,.4));
width:400px;
height:200px;
left:10px;
outline:1px solid transparent;
backface-visibility:hidden
  
  }
    
.caroussel-image img:nth-child(1){
  
transform:translate3d(0,0,495px)
    
    }
    
.caroussel-image img:nth-child(2){
  
transform:rotateY(45deg) translateZ(495px)
  
    }
    
.caroussel-image img:nth-child(3){
  
  transform:rotateY(90deg) translateZ(495px)
  
  }
  
.caroussel-image img:nth-child(4){
  
  transform:rotateY(135deg) translateZ(495px)
  
  }
  
.caroussel-image img:nth-child(5){
  
  transform:rotateY(180deg) translateZ(495px)
  
  }
  
.caroussel-image img:nth-child(6){
  
  transform:rotateY(225deg) translateZ(495px)
  
  }
  
.caroussel-image img:nth-child(7){
  
  transform:rotateY(270deg) translateZ(495px)
  
  }
  
.caroussel-image img:nth-child(8){
  
  transform:rotateY(315deg) translateZ(495px)
  
  }
  .caroussel-image img:nth-child(9){
  
  transform:rotateY(360deg) translateZ(495px)
  
  }
  .caroussel-image img:nth-child(10){
  
  transform:rotateY(405deg) translateZ(495px)
  
  }
  .caroussel-image img:nth-child(11){
  
  transform:rotateY(450deg) translateZ(495px)
  
  }
  .caroussel-image img:nth-child(12){
  
  transform:rotateY(495deg) translateZ(495px)
  
  }
  .caroussel-image img:nth-child(13){
  
  transform:rotateY(540deg) translateZ(495px)
  
  }
  .caroussel-image img:nth-child(14){
  
  transform:rotateY(675deg) translateZ(495px)
  
  }
  


  

  
@keyframes rotation{
from{transform:rotatey(0)}
to{transform:rotatey(1turn)}}

</style>

</head>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Eilco's</span>
    <span class="site-heading-lower">Club</span>
  </h1>

  <!-- Navigation -->
  <?php session_start ();
    if(isset($_SESSION['login']) == ''){ ?>
      <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="index.php">Eilco's Club</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.php">Accueil
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="about.php">Projet associatif</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="calendrier.php">Calendrier</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="connexion.php">Connexion</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<?php }
    else if($_SESSION['login'] == 'BDE'){ ?>
     <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="index.php">Eilco's Club</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.php">Accueil
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="bde.php">Mon espace</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="calendrier.php">Calendrier</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="deconnexion.php">Déconnexion</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php }
    else if($_SESSION['login'] != 'BDE' and $_SESSION['login'] != 'SABINE Rensy'){ ?>
     <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="index.php">Eilco's Club</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
           <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Accueil
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="about.php">Projet associatif</a>
            </li>
            <li class="nav-item  px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="club_espace.php">Mon espace</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="calendrier.php">Calendrier</a>
            </li>
            <li class="nav-item  px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="evenement_form.php">Organiser un événement</a>
            </li>
             <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="deconnexion.php">Déconnexion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <?php } else if($_SESSION['login'] == 'SABINE Rensy') {?>
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="index.php">Eilco's Club</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Accueil
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item  px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="responsable.php">Mon espace</a>
            </li>
            <li class="nav-item  px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="responsable_soutenance.php">Soutenance</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="calendrier.php">Calendrier</a>
            </li>
            <li class="nav-item  px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="deconnexion.php">Déconnexion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <?php }?>
  
  <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/introo.jpg" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-lower">Création de club ou association</span>
            
          </h2>
          <p class="mb-3" style="text-align: justify;">Si vous voulez intégrer la vie associative au sein de Eilco, vous pouvez créer votre propre club ou bien votre association par un simple clique sur le bouton ci-dessous.
          </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="creation.php" style="font-size: 15px;margin-left: 5px;">Créer votre Club ou Association ici !</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          
             <div class="contenu_carou_auto">
                <div class="caroussel-image">
                  <img src="img/bda.png" alt>
                  <img src="img/cinetco.png" alt>
                  <img src="img/cougars.png" alt>
                  <img src="img/eil4l.png" alt>
                  <img src="img/eilcotaku.png" alt>
                  <img src="img/eilcrew.png" alt>
                  <img src="img/gamers.png" alt>
                  <img src="img/LogoD10Cassé.png" alt>
                  <img src="img/Logo-EilTech.png" alt>
                  <img src="img/Oeno.jpg" alt>
                  <img src="img/opalien.png" alt>
                  <img src="img/rock.jpg" alt>
                  <img src="img/sport.jpg" alt>
                  <img src="img/sportmeca.png" alt>
                  <img src="img/logotest.png" alt>

                </div>
              </div>  
          
        </div>
      </div>
    </div>
  </section>

    <?php include 'footer.php'; ?>
    <link rel="stylesheet" href="css/modif.css">

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
