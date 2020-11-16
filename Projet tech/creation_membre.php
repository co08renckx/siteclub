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

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">

  </head>

  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">Eilco's</span>
      <span class="site-heading-lower">Club</span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Eilco's Club</a>
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
            <li class="nav-item active px-lg-4">
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
              <h2 class="section-heading mb-5" style="color: white">
                Créer votre Club !
                
              </h2>
              <form action="membre_insert.php" method="post">
              <ul class="list-unstyled list-hours mb-5 text-left ">
                 <h3> Les Membres du Club </h3>
                <?php 
				session_start ();
      require'Database_connexion.php';
      require'type.php';
      require'specialite.php';
      require'promotion.php';
      
  
                $t = new Type(0,"");
                $s = new Specialite(0,"");
                $p = new Promotion(0,"");

               ?>
                 <li class="list-unstyled-item list-hours-item d-flex">
                  <span class="ml-auto p-2"><input type="text" name="nom_prenom1" value="<?php echo $_SESSION['bob']; ?>" readonly /></span>
                  <span class="ml-auto p-2"><input type="text" name="fonction1" value="Président" readonly /></span>
                  <span class="ml-auto p-2">
                    <select id="promotion1"  name="promotion1" class="select"> 
                      <option value="0">Sélectionner une promotion</option>
                       <?php
                      $promos = $p->FindALLPromotion();
                      foreach ($promos as $pr) {
                    ?> 
                      <option value="<?php echo $pr['id']; ?>"><?php echo $pr['promotion']; ?></option>
                      <?php
                      }
                    ?> 
                  </select>
                </span>
                  <span class="ml-auto p-2"><select id="specialite1"  name="specialite1" class="select"> 
                <option value="0">Sélectionner une Spécialité</option>
                 <?php
                      $specialites = $s->FindALLSpecialite();
                      foreach ($specialites as $sp) {
                    ?> 
                      <option value="<?php echo $sp['id']; ?>"><?php echo $sp['specialite']; ?></option>
                      <?php
                      }
                    ?>
                </select>
                </span>

               </li>
                 <li class="list-unstyled-item list-hours-item d-flex">
                  <span class="ml-auto p-2"><input type="text" name="nom_prenom2" placeholder="Nom & Prénom"></span>
                  <span class="ml-auto p-2"><input type="text" name="fonction2" placeholder="Fonction"></span>
                  <span class="ml-auto p-2">
                    <select id="promotion2" name="promotion2" class="select"> 
                      <option value="0">Sélectionner une promotion</option>
                       <?php
                      $promos = $p->FindALLPromotion();
                      foreach ($promos as $pr) {
                    ?> 
                      <option value="<?php echo $pr['id']; ?>"><?php echo $pr['promotion']; ?></option>
                      <?php
                      }
                    ?> 
                  </select></span>
                  <span class="ml-auto p-2">
                    <select id="specialite2"  name="specialite2" class="select"> 
                <option value="0">Sélectionner une Spécialité</option>
                 <?php
                      $specialites = $s->FindALLSpecialite();
                      foreach ($specialites as $sp) {
                    ?> 
                      <option value="<?php echo $sp['id']; ?>"><?php echo $sp['specialite']; ?></option>
                      <?php
                      }
                    ?>
                </select>
              </span>

                </li>
                 <li class="list-unstyled-item list-hours-item d-flex">
                  <span class="ml-auto p-2"><input type="text" name="nom_prenom3" placeholder="Nom & Prénom"></span>
                  <span class="ml-auto p-2"><input type="text" name="fonction3" placeholder="Fonction"></span>
                  <span class="ml-auto p-2">
                    <select id="promotion3" name="promotion3" class="select"> 
                      <option value="0">Sélectionner une promotion</option>
                       <?php
                      $promos = $p->FindALLPromotion();
                      foreach ($promos as $pr) {
                    ?> 
                      <option value="<?php echo $pr['id']; ?>"><?php echo $pr['promotion']; ?></option>
                      <?php
                      }
                    ?> 
                  </select></span>
                  <span class="ml-auto p-2">
                    <select id="specialite3"  name="specialite3" class="select"> 
                <option value="0">Sélectionner une Spécialité</option>
                 <?php
                      $specialites = $s->FindALLSpecialite();
                      foreach ($specialites as $sp) {
                    ?> 
                      <option value="<?php echo $sp['id']; ?>"><?php echo $sp['specialite']; ?></option>
                      <?php
                      }
                    ?>
                </select>
              </span>

                </li>
                 <li class="list-unstyled-item list-hours-item d-flex">
                  <span class="ml-auto p-2"><input type="text" name="nom_prenom4" placeholder="Nom & Prénom"></span>
                  <span class="ml-auto p-2"><input type="text" name="fonction4" placeholder="Fonction"></span>
                  <span class="ml-auto p-2">
                    <select id="promotion4"  name="promotion4" class="select"> 
                      <option value="0">Sélectionner une promotion</option>
                       <?php
                      $promos = $p->FindALLPromotion();
                      foreach ($promos as $pr) {
                    ?> 
                      <option value="<?php echo $pr['id']; ?>"><?php echo $pr['promotion']; ?></option>
                      <?php
                      }
                    ?> 
                  </select></span>
                  <span class="ml-auto p-2">
                    <select id="specialite4"  name="specialite4" class="select"> 
                <option value="0">Sélectionner une Spécialité</option>
                 <?php
                      $specialites = $s->FindALLSpecialite();
                      foreach ($specialites as $sp) {
                    ?> 
                      <option value="<?php echo $sp['id']; ?>"><?php echo $sp['specialite']; ?></option>
                      <?php
                      }
                    ?>
                </select>
              </span>

                </li>
                 <li class="list-unstyled-item list-hours-item d-flex">
                  <span class="ml-auto p-2"><input type="text" name="nom_prenom5" placeholder="Nom & Prénom"></span>
                  <span class="ml-auto p-2"><input type="text" name="fonction5" placeholder="Fonction"></span>
                  <span class="ml-auto p-2">
                    <select id="promotion5" name="promotion5" class="select"> 
                      <option value="0">Sélectionner une promotion</option>
                       <?php
                      $promos = $p->FindALLPromotion();
                      foreach ($promos as $pr) {
                    ?> 
                      <option value="<?php echo $pr['id']; ?>"><?php echo $pr['promotion']; ?></option>
                      <?php
                      }
                    ?> 
                  </select>
                </span>
                  <span class="ml-auto p-2">
                    <select id="specialite5" name="specialite5" class="select"> 
                <option value="0">Sélectionner une Spécialité</option>
                 <?php
                      $specialites = $s->FindALLSpecialite();
                      foreach ($specialites as $sp) {
                    ?> 
                      <option value="<?php echo $sp['id']; ?>"><?php echo $sp['specialite']; ?></option>
                      <?php
                      }
                    ?>
                </select>
              </span>

              <li class="list-unstyled-item list-hours-item d-flex">
                  <span class="ml-auto p-2"><input type="text" name="nom_prenom6" placeholder="Nom & Prénom"></span>
                  <span class="ml-auto p-2"><input type="text" name="fonction6" placeholder="Fonction"></span>
                  <span class="ml-auto p-2">
                    <select id="promotion6" name="promotion6" class="select"> 
                      <option value="0">Sélectionner une promotion</option>
                       <?php
                      $promos = $p->FindALLPromotion();
                      foreach ($promos as $pr) {
                    ?> 
                      <option value="<?php echo $pr['id']; ?>"><?php echo $pr['promotion']; ?></option>
                      <?php
                      }
                    ?> 
                  </select>
                </span>
                  <span class="ml-auto p-2">
                    <select id="specialite6" name="specialite6" class="select"> 
                <option value="0">Sélectionner une Spécialité</option>
                 <?php
                      $specialites = $s->FindALLSpecialite();
                      foreach ($specialites as $sp) {
                    ?> 
                      <option value="<?php echo $sp['id']; ?>"><?php echo $sp['specialite']; ?></option>
                      <?php
                      }
                    ?>
                </select>
              </span>
              


                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  <input class="btn-primary"type="submit" name="submit"  value="Créer" style="margin-left: 27rem">
                </li>
              </ul>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

   

    <footer class="footer text-faded text-center py-5">
    <?php include 'footer.php'; ?>
    <link rel="stylesheet" href="css/modif.css">

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="script4.js"></script>

  </body>

  <!-- Script to highlight the active date in the hours list -->
  <script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
  </script>

</html>
