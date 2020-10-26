<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Eilco - Création de club</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/logoo.png" />

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  </head>

  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">Eilco's</span>
      <span class="site-heading-lower">Club</span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="index.php">Eilco's Club</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Accueil
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="about.php">Projet associative</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="calendrier.php">Calendrier</a>
            </li>
            <li class="nav-item  px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="connexion.php">Connexion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="page-section">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded" class="form-group">
              <h2 class="section-heading mb-5" style="color: white;" >
               Créer votre Club ou association !
                
              </h2>
              <form action="creation_insert.php" method="post">
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto" style="color: #00BFFF;display: inline-block;">
                <li class="form-group" style="text-align: center;">
                 <p> Les Membres du Club </p></li>

                 <li class="form-group"> 
                  <span class="ml-auto"><input type="text" name="nom_prenom1" class="form-control" placeholder="Nom & Prénom"><input type="text" name="fonction1" class="form-control" placeholder="Fonction"><input type="text" class="form-control" name="promos1" placeholder="Promotion"><input type="text" class="form-control" name="specialite1" placeholder="Spécialité"></span>
                </li>
                 <li class="form-group">
                  <span class="ml-auto"><input type="text" name="nom_prenom2" class="form-control" placeholder="Nom & Prénom"><input type="text" name="fonction2" class="form-control" placeholder="Fonction"><input type="text" class="form-control" name="promos2" placeholder="Promotion"><input type="text" class="form-control" name="specialite2" placeholder="Spécialité"></span>
                </li>
                 <li class="form-group"> 
                  <span class="ml-auto"><input type="text" name="nom_prenom3" class="form-control" placeholder="Nom & Prénom"><input type="text" name="fonction3" class="form-control" placeholder="Fonction"><input type="text" class="form-control" name="promos3" placeholder="Promotion"><input type="text" class="form-control" name="specialite3" placeholder="Spécialité"></span>
                </li>
                 <li class="form-group">
                  <span class="ml-auto"><input type="text" class="form-control" name="nom_prenom4" placeholder="Nom & Prénom"><input type="text" name="fonction4" class="form-control" placeholder="Fonction"><input type="text" class="form-control" name="promos4" placeholder="Promotion"><input type="text" name="specialite4" class="form-control" placeholder="Spécialité"></span>
                </li>
                 <li class="form-group">
                  <span class="ml-auto"><input type="text" name="nom_prenom5" class="form-control" placeholder="Nom & Prénom"><input type="text" name="fonction5" class="form-control" placeholder="Fonction"><input type="text" class="form-control" name="promos5" placeholder="Promotion"><input type="text" class="form-control" name="specialite5" placeholder="Spécialité"></span>
                </li>
                <li class="form-group">
                  <input type="submit" class="btn-primary"name="submit" value="Créer">
                </li>
              </ul>
              </form>
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

  <script src="script3.js"></script>


  <!-- Script to highlight the active date in the hours list -->
  <script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
  </script>

</html>
