<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Eilco - Organisation événement</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/logoo.png" />

  </head>

  <body>
    <?php session_start ();
    require"campus.php";
    $campus = new Campus("");
    $_SESSION['id'] = $_SESSION['id'];;
    ?>
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
            <li class="nav-item  px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="club_espace.php">Mon espace</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="calendrier.php">Calendrier</a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="evenement_form.php">Organiser un événement</a>
            </li>
             <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="deconnexion.php">Déconnexion</a>
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
              <h2 class="section-heading mb-5" style="color: white">
                Organiser un événement pour votre Club !
                
              </h2>
              <form action="Evenement_insert.php" method="post">
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto" style="color: #00BFFF">
                <li class="form-group">
                  Nom de l'événement : 
                  <span class="ml-auto"><input type="text" class="form-control"name="nom_eve" required></span>
                </li>
                <li class="form-group">
                  Campus : 
                 <span class="ml-auto">
                    <select  name="campus" class="form-control"> 
                      <?php
                      $cam = $campus->AllCampus();
                      foreach ($cam as $c) {
                    ?> 
                      <option value="<?php echo $c['id']; ?>"><?php echo $c['campus']; ?></option>
                      <?php
                      }
                    ?> 
                  </select>
                   </span>
               </li>
                <li class="form-group">
                  Responsable : 
                  <span class="ml-auto"><input type="text" class="form-control" name="resp_eve" required></span>
                </li>
                <li class="form-group">
                  Date de l'événement :  
                  <span class="ml-auto"><input type="date" class="form-control" name="date_eve" required></span>
                </li>
                <li class="form-group">
                  Heure de début : 
                  <span class="ml-auto"><input type="time" class="form-control" name="h_d" required></span>
                </li>
                <li class="form-group">
                  Heure de fin : 
                  <span class="ml-auto"><input type="time" class="form-control" name="h_f" required></span>
                </li>
                <li class="form-group">
                  Lieu : 
                  <span class="ml-auto"><input type="text" class="form-control" name="lieu" required></span>
                </li>
                <li class="form-group">
                  Type de l'événement : 
                  <span class="ml-auto"><input type="text" class="form-control" name="type_eve" required></span>
                </li>
                <li class="form-group">
                  Année Universitaire : 
                  <span class="ml-auto"><input type="text" class="form-control" name="annee_eve" required></span>
                </li>
                <li class="form-group">
                  Aide financière : 
                  <span class="ml-auto"><select  name="aide" class="form-control">  
                      <option value="1">Oui</option> 
                      <option value="0">Non</option>
                  </select></span>
                  
                </li>
                <li class="form-group">
                  Montant : 
                  <span class="ml-auto"><input type="number" class="form-control" name="montant_eve" required></span>
                </li>
                 <li class="form-group">
                  Objectif de l'événement : 
                  <span class="ml-auto"><textarea class="form-control" name="obj" required></textarea></span>
                </li>
                <li class="form-group">
                  <input class="btn-primary"type="submit" class="form-control" name="Organiser" value="Organiser">
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

  <!-- Script to highlight the active date in the hours list -->
  <script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
  </script>

</html>
