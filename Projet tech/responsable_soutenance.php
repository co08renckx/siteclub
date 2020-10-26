<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Eilco - Soutenance</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/logoo.png" />

    <style type="text/css">
      .row{width :900px ;}
      .col-xl-9{background-color: black; width: 300px; border-radius: 10px; padding-top: 10px; padding-bottom: 10px;}
      .cta-inner{width: auto;}
      .col{margin-bottom: 220px;font-family:Raleway;margin-left: 300px;margin-top:-120px;}
       @media screen and (max-width: 900px){
        div[class=row]{width :100px ;}
        .col-xl-9{background-color: black; width: 150px; border-radius: 10px; padding-top: 10px; padding-bottom: 10px;}
        .cta-inner{width: 40px;}
        .col{margin-bottom: 20px;font-family:Raleway;margin-left:0px;margin-top:-0px;}
        div[class="row row-cols-1 row-cols-md-1"]{width: 350px;}
        .table{font-size: 10px;margin-left: -20px;}
        .card{width: 350px;}
        


       }
    </style>

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
            <li class="nav-item  px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="responsable.php">Mon espace</a>
            </li>
            <li class="nav-item active px-lg-4">
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
<?php
  session_start ();
  
  require'Club.php';
  require'Soutenance.php';
  
?>
<section class="page-section">
  <div class="row" >
      <nav class="navbar-fixed-left" >
          <div class="col-xl-9 mx-auto" >
            <div class="cta-inner text-center rounded">
             <div class="row" >
              <div class="col-3 ">
                <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home"  style="font-weight: bold;font-family:Raleway" aria-selected="true">Ajouter soutenance </a>
                  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" style="font-weight: bold;font-family:Raleway" aria-selected="false">Supprimer soutenance </a>
                </div>
              </div>
            </div>
          </div>
         </div>
      </nav>
      
      <style type="text/css">b {color: #87CEFA;}</style>
      <div class="col-9" >
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="row ">
              
              <div class="col col-md-12 " >
             <div class="card border border-primary rounded"  style="width: auto;">
                  <div class="card-body" class ="form-group">
                    <h5 class="card-title h5" style="font-weight: bold;font-family:Raleway;color: #00BFFF;text-align: center;text-decoration: underline;">Ajouter une soutenance!</h5>
                
                
              
              <form action="traitement_soutenance.php" method="post">
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto" style="color: #00BFFF">
                <li class="form-group">
                  Intitulé du soutenance : 
                  <span class="ml-auto"><input type="text" class="form-control"name="int_sout" required></span>
                </li>
                <li class="form-group">
                  Date : 
                  <span class="ml-auto"><input type="date" class="form-control" name="date_sout" required></span>
                </li>
                <li class="form-group">
                  Club :  
                  <span class="ml-auto">
                    <select id="club_id"  name="club_id" class="form-control">
                    <?php
                      $club = new Club("",0,"","","",0,0,"","","","");
                      $clubs = $club->AllClubTreated();
                      foreach ($clubs as $c) {
                    ?> 
                      <option value="<?php echo $c['id']; ?>"><?php echo $c['Nom']; ?></option>
                      <?php
                      }
                    ?> 
                        </select>
                   </span>
                </li>
                <li class="form-group">
                  Heure : 
                  <span class="ml-auto"><input type="time" class="form-control"name="heure_sout" required></span>
                </li>
                
                <li class="form-group">
                  <input class="btn-primary"type="submit" class="form-control" name="Ajouter" value="Ajouter">
                </li>
              </ul>
              </form>
            </div>
          </div>
        </div>
            </div>
          </div>
          <div class="tab-pane fade " id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
             <div class="row ">
              <?php
                $club1 = new Club("",0,"","","",0,0,"","","","");
                $soutenance1 = new Soutenance("",0,"",0);
                $souts = $soutenance1->AllSoutenance();
                foreach ($souts as $s) {
                  $c = $club1->FindClub($s['id_club']);
                  
               ?>
              <div class="col col-md-12 " >
                <div class="card border border-primary rounded"  style="width: auto;">
                  <div class="card-body">
                    <h5 class="card-title h5" style="font-weight: bold;font-family:Raleway;color: #00BFFF;text-align: center;text-decoration: underline;"><?php echo $s['intitule']; ?></h5>
                    <p class="card-text" style="margin-bottom:-2px;"><?php foreach ($c as $cs) {echo "<b>Club : </b>".$cs['Nom'];} ?></p>
                    <p class="card-text" style="margin-bottom:-2px;"><?php echo "<b>Date : </b>".$s['date_soutenance']; ?></p>
                    <p class="card-text" style="margin-bottom:-2px;"><?php echo "<b>Heure : </b>".$s['heure_soutenance']; ?></p>
                    <p class="card-text" >
                      <div class="form-check form-check-inline">
                        <form action="traitement_soutenance.php" method="POST">
                          <input type="hidden" name="id_soutenance" value="<?php echo $s['id']; ?>">
                        <input class="btn btn-danger " type="submit" id ="supprimer_soutenance"  name="supprimer_soutenance" value="Supprimer">
                      </form>
                      </div>
                    </p>
                  </div>
                </div>
              </div>
              <?php 
               }
              ?>
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

  <!-- Script to highlight the active date in the hours list -->
  <script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
  </script>

</html>
